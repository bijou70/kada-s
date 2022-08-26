<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patients;
class PatientsController extends Controller
{
     //cette méthode est conçu uniquement pour afficher la page d'inscription d'un patient
     public function viewForm()
     {
         return view('patients.dashboard');
     }

     public function ajout()
     {
         return view('patients.patientRegister');
     }


     public function ayira()
     {
        return view('todash');
     }
 
     public function registerPatient(request $request)
     //ici nous allons definir les normes qui doivent respectés nos diffèrents champs
     {
         $verification = $request->validate(
             [
                 'nom' => ['required', 'string'],
                 'prenom' => ['required', 'string'],
                 'sexe' => ['required', 'string'],
                 'fonction' => ['required', 'string'],
                 'adresse' => ['required', 'string'],
                 'email' => ['required', 'string'],
                 'telephone' => ['required','string'],
                 'password' => ['required', 'string', 'min:5', 'confirmed'],
             ]
         );
 //ici nous allons définir les actions à faire si la vérification est bonne
         if($verification)
         {
             //nous allons creer un utilisateur avec les données saisis par l'utilisateur
             $user = User::create(
                 [
                     'name' => $request['prenom'],
                     'email' => $request['email'],
                     'password' => bcrypt($request['password']),
                     'statut' => 'patient'
                 ]
                 );
                 if($user)
                 {
                     $patients = Patients::create(
                         [
                             'userId' => $user->id,
                             'nom' => $request['nom'],
                             'prenom' => $request['prenom'],
                             'sexe' => $request['sexe'],
                             'fonction' => $request['fonction'],
                             'adresse' => $request['adresse'],
                             'telephone' => $request['telephone'],
                             'email' => $request['email'],
                             'password' => bcrypt($request['password'])
                         ]
                     );
                     return view('patients.patientRegister');
                 }
 
         }
 
 
     }
    //
}
