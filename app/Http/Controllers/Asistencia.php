<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistencias;
use App\Capacitaciones;
use DB;

use App\Exports\AsistenciasExport;
use Maatwebsite\Excel\Facades\Excel;


use Carbon\Carbon;

$date = Carbon::now();

class Asistencia extends Controller
{
    public function lector()
    {
        return view('lector');
    }

    public function crear(Request $request)
    {

         //validaciones del formulario
  

       $date = Carbon::now();

       $time = Carbon::now();

       $date = $date->format('Y-m-d');

       $time = $time->toTimeString();  

       $id = $request->capacitacion;

       $asis = new Asistencias;
       $asis->user = $request->caja_valor;
       $asis->fecha = $request->fecha;
       $asis->hora = $request->time;
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
       ->with("nombre",$nombre[0])
       ->with("date",$date)
       ->with("time",$time);



    // dd($post);
    }

    public function asistencia()
    {
        $asis = \DB::select("SELECT asi.`ida` AS ida,asi.`user` AS 'user',asi.`fecha` AS fecha, asi.`hora` AS hora,ca.`id` AS id,ca.`nombre` AS nombre
        FROM asistencias AS asi
        INNER JOIN capacitaciones AS ca ON ca.`id`= asi.`id`");
        return view('asistenciacapaci')
        ->with('asis',$asis);

    }

    public function buscarasistencia(Request $request)
    {

        $nombre = $request->get('buscador');

        $asis = \DB::select("SELECT asi.`ida` AS ida,asi.`user` AS 'user',asi.`fecha` AS fecha, asi.`hora` AS hora,ca.`id` AS id,ca.`nombre` AS nombre
        FROM asistencias AS asi
        INNER JOIN capacitaciones AS ca ON ca.`id`= asi.`id`
        WHERE ca.`nombre` = ?",[$nombre]);
        return view('asistenciacapaci')
        ->with('asis',$asis);
    }

    public function export() 
    {
        return Excel::download(new AsistenciasExport, 'Asistencias.xlsx');
    }

}
