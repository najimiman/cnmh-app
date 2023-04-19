<?php


use App\Http\Controllers\CouvertureMedicalController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TypeHandicapController;
use App\Http\Controllers\NiveauScolaireController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtatCivilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('projects', App\Http\Controllers\ProjectController::class);
Route::resource('tasks', App\Http\Controllers\TaskController::class);
Route::resource('members', App\Http\Controllers\MemberController::class);
Route::resource('couvertureMedicals', App\Http\Controllers\CouvertureMedicalController::class);
Route::get('/export_couvertureMedicals',[CouvertureMedicalController::class,'export'])->name('couvertureMedicals.export');
Route::post('/import_couvertureMedicals',[CouvertureMedicalController::class,'import'])->name('couvertureMedicals.import');
Route::resource('typeHandicaps', App\Http\Controllers\TypeHandicapController::class);
Route::resource('typeHandicaps', App\Http\Controllers\TypeHandicapController::class);
Route::resource('services', App\Http\Controllers\ServiceController::class);
Route::get('/export_service',[ServiceController::class,'export'])->name('services.export');
Route::post('/import_service',[ServiceController::class,'import'])->name('services.import');
Route::resource('niveauScolaires', App\Http\Controllers\NiveauScolaireController::class);
Route::resource('etatCivils', EtatCivilController::class);
Route::resource('employes', App\Http\Controllers\EmployeController::class);
Route::get('/export_employes',[EmployeController::class,'export'])->name('employes.export');
Route::post('/import_employes',[EmployeController::class,'import'])->name('employes.import');
Route::resource('reclamations', App\Http\Controllers\ReclamationController::class);
Route::resource('fonctions', App\Http\Controllers\FonctionController::class);
Route::resource('patients', App\Http\Controllers\PatientController::class);
Route::resource('dossier-patients', App\Http\Controllers\DossierPatientController::class);
Route::resource('orientation-externes', App\Http\Controllers\OrientationExterneController::class);
Route::resource('consultations', App\Http\Controllers\ConsultationController::class);
Route::resource('rendez-vouses', App\Http\Controllers\RendezVousController::class);

Route::get('/export_typehandicap',[TypeHandicapController::class,'export'])->name('typehandicap.export');
Route::post('/import_typehandicap',[TypeHandicapController::class,'import'])->name('typehandicap.import');


Route::get('/export_niveauScolaires',[NiveauScolaireController::class,'export'])->name('niveauScolaires.export');
Route::post('/import_niveauScolaires',[NiveauScolaireController::class,'import'])->name('niveauScolaires.import');

// EtatCivil export and import
Route::get('/export_etatCivils',[EtatCivilController::class,'export'])->name('etatCivils.export');
Route::post('/import_etatCivils',[EtatCivilController::class,'import'])->name('etatCivils.import');