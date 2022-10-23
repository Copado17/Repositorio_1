<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests\validador;

class Controlador extends Controller
{
     public function validadorio(validador $req){
        
        return view('Tabla')->with('mensaje', 'Sueño guardado');
     }
}
