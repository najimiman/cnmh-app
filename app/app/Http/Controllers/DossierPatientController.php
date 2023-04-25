<?php

namespace App\Http\Controllers;

use Flash;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Repositories\TuteurRepository;
use App\Repositories\PatientRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\DossierPatientRepository;
use App\Http\Requests\CreateDossierPatientRequest;
use App\Http\Requests\UpdateDossierPatientRequest;

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

        if (empty($dossierPatient)) {
            Flash::error(__('models/dossierPatients.singular').' '.__('messages.not_found'));

            return redirect(route('dossier-patients.index'));
        }

        return view('dossier_patients.show')->with('dossierPatient', $dossierPatient);
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
