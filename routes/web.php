<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('secreRegister');
});

Route::get('/', function () {
    return view('patientRegister');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/secre-register', [App\Http\controllers\SecretaireController::class, 'viewForm'])->name('secre.formview');
Route::post('/secre-create',[App\Http\controllers\SecretaireController::class,'registerSecre'])->name('secre.create');


Route::get('/patient-register', [App\Http\controllers\PatientsController::class, 'viewForm'])->name('patient.formview');
Route::post('/patient-create',[App\Http\controllers\PatientsController::class,'registerPatient'])->name('patient.create');


Route::get('/medecin-register', [App\Http\controllers\MedecinsController::class, 'viewForm'])->name('medecin.formview');
Route::post('/medecin-create',[App\Http\controllers\MedecinsController::class,'registerMedecin'])->name('medecin.create');

Route::get('/agenda-create', [App\Http\controllers\AgendaController::class, 'viewForm'])->name('Agenda.formview');
Route::post('/agenda-create',[App\Http\controllers\AgendaController::class,'registerAgenda'])->name('agenda.create');


Route::get('/dash', [App\Http\Controllers\SecretaireController::class, 'dash']);