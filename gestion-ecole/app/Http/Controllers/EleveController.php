<?php

namespace App\Http\Controllers;

use App\Models\eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ListeEleve()
    {
        $eleves= eleve::all();
        return view('gestion-eleve.listeEleve', ['liste_des_eleves' =>$eleves]);
    }

}
