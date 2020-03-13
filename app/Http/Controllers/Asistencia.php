<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistencias;
use App\Capacitaciones;
use DB;

class Asistencia extends Controller
{
    public function lector()
    {
        return view('lector');
    }

    public function crear(Request $request)
    {

       $id = $request->capacitacion;

       $asis = new Asistencias;
       $asis->user = $request->caja_valor;
       $asis->fecha = "2020-03-12";
       $asis->hora = "10:00";
       $asis->id = $request->capacitacion;
       $asis->save();

    $capacitacion=\DB::select("SELECT asi.`ida` AS ida, asi.`user` AS 'user', asi.`id` AS id
    FROM asistencias AS asi
    ORDER BY asi.`ida` DESC LIMIT 1");

    $nombre=\DB::select("SELECT nombre AS nombre
    FROM capacitaciones WHERE id = ?",[$id]);

    //    return redirect()->route('lector')
       return view('lector')
       ->with("capacitacion",$capacitacion[0])
       ->with("nombre",$nombre[0]);



    // dd($post);
    }
}
