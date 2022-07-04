<?php

namespace App\Http\Controllers;

use App\Models\Evidencia;
use Illuminate\Http\Request;

class EvidenciaController extends Controller
{
    public function mostrarcurrivitae(){
        $evidencias = Evidencia::all();
        return view("mostrar.curriculumvitae")->with("evidencias", $evidencias);
    }
}
