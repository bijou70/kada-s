<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Medecins;

class MedecinsController extends Controller
{
    //
      //cette méthode est conçu uniquement pour afficher la page d'inscription d'un medecin
      public function viewForm()
      {
          return view('medecins.medecinRegister');
      }

      public function dashboard()
      {
          return view('medecins.dashboard');
      }
  
      public function registerMedecin(request $request)
      //ici nous allons definir les normes qui doivent respectés nos diffèrents champs
      {
          $verification = $request->validate(
              [
                  'nom' => ['required', 'string'],
                  'prenom' => ['required', 'string'],
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
                      'statut' => 'medecin'
                  ]
                  );
                  if($user)
                  {
                      $Medecins = Medecins::create(
                          [
                              'userId' => $user->id,
                              'nom' => $request['nom'],
                              'prenom' => $request['prenom'],
                              'sexe' => $request['sexe'],                           
                              'specialite' => $request['specialite'],
                              'telephone' => $request['telephone'],
                              'email' => $request['email'],
                              'password' => bcrypt($request['password'])
                          ]
                      );
                      return view('medecins.medecinRegister');
                  }
  
          }
  
  
      }
}
