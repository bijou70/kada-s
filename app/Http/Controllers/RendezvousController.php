<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RendezvousController extends Controller
{
    //
    public function monrender()
    {
        return view('patients.prendrerdv');
    }
}
