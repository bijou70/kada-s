<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Secretaire;

class SecretaireController extends Controller
{
    //cette méthode est conçu uniquement pour afficher la page d'inscription d'un secretaire
    public function viewForm()
    {
        return view('secretaires.secreRegister');
    }

    public function dash()
    {
        return view('todash');
    }

    //ici nous allons definir les normes qui doivent respectés nos diffèrents champs
    public function registerSecre(request $request)
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
                    'statut' => 'secretaire'
                ]
                );
                if($user)
                {
                    $secretaire = Secretaire::create(
                        [
                            'userId' => $user->id,
                            'nom' => $request['nom'],
                            'prenom' => $request['prenom'],
                            'telephone' => $request['telephone'],
                            'email' => $request['email'],
                            'password' => bcrypt($request['password'])
                        ]
                    );
                    return redirect('/secreRegister');
                }

        }


    }
}