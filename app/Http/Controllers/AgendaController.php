<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Agenda;
USE Auth;

class AgendaController extends Controller
{
    //
    //cette méthode est conçu uniquement pour afficher la page d'inscription d'un agenda
    public function viewForm()
    {
        return view('agenda.agendaRegister');
    }

    public function registerAgenda(request $request)
    //ici nous allons definir les normes qui doivent respectés nos diffèrents champs
    {
        $user=Auth::User();
        $verification = $request->validate(
            [
                'medecinsId' => 'required', 
                'date_agenda' => 'required',
                'heure' => 'required',

            ]
        );
        if($verification)
        {
            Agenda::create(
                [
                    'medecinsId' => $user->id, 
                'date_agenda' => $request ['date_agenda'],
                'heure' => $request ['heure' ],
               
                ]
            );
            return redirect('/patients/dashboard');
            
        }
            
               
                    
                }

        }


 