<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use App\Models\Secretaire;
use App\Models\Medecins;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        if($user->statut == 'medecin')
        {
            $medecins = medecins::where ('userId', $user->id)->first();

            return view ('medecins.dashboard',compact('medecins'));

        }

        elseif($user->statut == 'patient')
        {
            $patients = patients::where ('userId', $user->id)->first();

            return view ('patients.dashboard',compact('patients'));

        }
        
        else
        {
          return view('home');  
        }
        
    }
  
    }

