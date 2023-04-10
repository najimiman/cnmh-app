<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('typeHandicaps', App\Http\Controllers\TypeHandicapController::class);
Route::resource('typeHandicaps', App\Http\Controllers\TypeHandicapController::class);
Route::resource('services', App\Http\Controllers\ServiceController::class);
Route::resource('niveauScolaires', App\Http\Controllers\NiveauScolaireController::class);
Route::resource('etatCivils', App\Http\Controllers\EtatCivilController::class);