<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistencias;

class Asistencia extends Controller
{
    public function lector()
    {
        return view('lector');
    }

    public function crear(Request $request)
    {

       $asis = new Asistencias;
       $asis->user = $request->caja_valor;
       $asis->fecha = "2020-03-12";
       $asis->hora = "10:00";
       $asis->id = $request->capacitacion;
       $asis->save();

       return redirect()->route('lector');
       

    // dd($post);
    }
}
