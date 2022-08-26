<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('Welcome');
});




Auth::routes();


Route::get('/patient-register', [App\Http\controllers\PatientsController::class, 'viewForm'])->name('patient.formview');
Route::get('/patient-registration', [App\Http\controllers\PatientsController::class, 'ajout'])->name('patient.formviewadd');

Route::get('/montrerdash', [App\Http\controllers\PatientsController::class, 'ayira'])->name('toutdashboard');


Route::get('/montrerdv', [App\Http\controllers\rendezvousController::class, 'monrender'])->name('rdv');

Route::post('/patient-create',[App\Http\controllers\PatientsController::class,'registerPatient'])->name('patient.create');


Route::get('/medecin-register', [App\Http\controllers\MedecinsController::class, 'viewForm'])->name('medecin.formview');
Route::post('/medecin-create',[App\Http\controllers\MedecinsController::class,'registerMedecin'])->name('medecin.create');

Route::get('/agenda-create', [App\Http\controllers\AgendaController::class, 'viewForm'])->name('Agenda.formview');
Route::post('/agenda-create',[App\Http\controllers\AgendaController::class,'registerAgenda'])->name('agenda.create');


Route::get('/dash', [App\Http\Controllers\SecretaireController::class, 'dash']);