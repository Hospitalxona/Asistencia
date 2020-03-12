<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capacitaciones;

class capacitacion extends Controller
{
    public function listacapacitacion()
    {
        $lista = capacitaciones::all();
        return view('capacitaciones')
        // return view('auth.QrLogin2')
        ->with("lista",$lista);

        
    }

    public function iniciarcapa($id)
    {
        $capacitacion = capacitaciones::where('id','=',$id)->get();
        // return view('capacitaciones')
        return view('auth.QrLogin2')
        ->with("capacitacion",$capacitacion[0]);

        
    }

}
