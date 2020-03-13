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


        $nombre=\DB::select("SELECT nombre AS nombre
        FROM capacitaciones WHERE id = ?",[$id]);


        // return view('capacitaciones')
        return view('lector')
        ->with("capacitacion",$capacitacion[0])
        ->with("nombre",$nombre[0]);

        
    }

}
