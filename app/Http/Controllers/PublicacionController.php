<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    public function mostrarofertas(){
        $publicacions = Publicacion::all();
        return view("mostrar.ofertas")->with("publicacions", $publicacions);
    }
}
