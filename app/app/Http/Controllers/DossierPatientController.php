<?php

namespace App\Http\Controllers;

use Flash;
use Illuminate\Http\Request;
use App\Repositories\TuteurRepository;
use App\Repositories\PatientRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Patient;
use App\Repositories\DossierPatientRepository;
use App\Http\Requests\CreateDossierPatientRequest;
use App\Http\Requests\UpdateDossierPatientRequest;
use App\Models\Consultation;
use App\Models\DossierPatient;
use App\Models\RendezVous;
use App\Models\Service;

class DossierPatientController extends AppBaseController
{
    /** @var DossierPatientRepository $dossierPatientRepository*/
    private $dossierPatientRepository;

    public function __construct(DossierPatientRepository $dossierPatientRepo)
    {
        $this->dossierPatientRepository = $dossierPatientRepo;
    }

    /**
     * Display a listing of the DossierPatient.
     */
    public function index(Request $request)
    {

        $query = $request->input('query');
        $dossierPatients = $this->dossierPatientRepository->paginate($query);

        if ($request->ajax()) {
            return view('dossier_patients.table')
                ->with('dossierPatients', $dossierPatients);
        }

        return view('dossier_patients.index')
            ->with('dossierPatients', $dossierPatients);
    }

    /**
     * Show the form for creating a new DossierPatient.
     */
    public function create()
    {
        return view('dossier_patients.create');
    }

    /**
     * Store a newly created DossierPatient in storage.
     */
    public function store(CreateDossierPatientRequest $request)
    {
        $input = $request->all();
        // dd($input);

        $dossierPatient = $this->dossierPatientRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/dossierPatients.singular')]));

        return redirect(route('dossier-patients.index'));
    }

    /**
     * Display the specified DossierPatient.
     */
    public function show($id)
    {
        $dossierPatient = $this->dossierPatientRepository->find($id);
        $patient= Patient::find($dossierPatient->patient_id);
        $parent  = $patient->parent;
        $listrendezvous=DossierPatient::join('dossier_patient_consultation', 'dossier_patients.patient_id', '=', 'dossier_patient_consultation.dossier_patient_id')
        ->join('consultations','consultations.id','=','dossier_patient_consultation.consultation_id')
        ->join('rendez_vous','rendez_vous.consultation_id','=','dossier_patient_consultation.consultation_id')
        ->join('consultation_service','consultation_service.consultation_id','=','dossier_patient_consultation.consultation_id')
        ->join('services','services.id','=','consultation_service.service_id')
        ->where('dossier_patients.patient_id',$dossierPatient->patient_id)
        ->select(['rendez_vous.date_rendez_vous','rendez_vous.etat', 'services.nom','dossier_patients.patient_id'])
        ->groupBy('rendez_vous.date_rendez_vous', 'rendez_vous.etat','services.nom','dossier_patients.patient_id')
        ->get();
        // dd($listrendezvous);
        $entretien_social=DossierPatient::join('patients', 'dossier_patients.patient_id','=','patients.id')
        ->join('niveau_scolaires','niveau_scolaires.id','=','patients.niveau_scolaire_id')
        ->join('couverture_medicals','couverture_medicals.id','=','dossier_patients.couverture_medical_id')
        ->join('dossier_patient_type_handicap','dossier_patient_type_handicap.dossier_patient_id','=','dossier_patients.id')
        ->join('type_handicaps','dossier_patient_type_handicap.type_handicap_id','=','type_handicaps.id')
        ->select(['dossier_patients.patient_id','couverture_medicals.nom','type_handicaps.nom','niveau_scolaires.nom','dossier_patients.date_enregsitrement'])
        ->where('dossier_patients.patient_id',$dossierPatient->patient_id)
        ->get();
        // dd($entretien_social);
        
        if (empty($dossierPatient)) {
            Flash::error(__('models/dossierPatients.singular').' '.__('messages.not_found'));

            return redirect(route('dossier-patients.index'));
        }

        return view('dossier_patients.show',compact('dossierPatient',"patient","parent","listrendezvous","entretien_social"));
    }

    /**
     * Show the form for editing the specified DossierPatient.
     */
    public function edit($id)
    {
        $dossierPatient = $this->dossierPatientRepository->find($id);

        if (empty($dossierPatient)) {
            Flash::error(__('models/dossierPatients.singular').' '.__('messages.not_found'));

            return redirect(route('dossier-patients.index'));
        }

        return view('dossier_patients.edit')->with('dossierPatient', $dossierPatient);
    }

    /**
     * Update the specified DossierPatient in storage.
     */
    public function update($id, UpdateDossierPatientRequest $request)
    {
        $dossierPatient = $this->dossierPatientRepository->find($id);

        if (empty($dossierPatient)) {
            Flash::error(__('models/dossierPatients.singular').' '.__('messages.not_found'));

            return redirect(route('dossier-patients.index'));
        }

        $dossierPatient = $this->dossierPatientRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/dossierPatients.singular')]));

        return redirect(route('dossier-patients.index'));
    }

    /**
     * Remove the specified DossierPatient from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dossierPatient = $this->dossierPatientRepository->find($id);

        if (empty($dossierPatient)) {
            Flash::error(__('models/dossierPatients.singular').' '.__('messages.not_found'));

            return redirect(route('dossier-patients.index'));
        }

        $this->dossierPatientRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/dossierPatients.singular')]));

        return redirect(route('dossier-patients.index'));
    }
    public function parent(Request $request){
        $query = $request->input('query');
         $tuteurRepository = new TuteurRepository;
         $tuteurs  =  $tuteurRepository->paginate($query);
        return view('dossier_patients.parent',compact("tuteurs"));
    }
    public function patient(Request $request){

        $query = $request->input('query');

         $patientRepository = new PatientRepository;
         $patients  =  Patient::where("tuteur_id",$request->parentRadio)->get();
        return view('dossier_patients.patient',compact("patients"));
    }
    public function entretien(Request $request){

        return view('dossier_patients.entretien');
    }
    // public function storeEntetien(Request $request){
    //   $entertien= $request->input();



    // }
}
