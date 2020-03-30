<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistencias;
use App\listaases;
use App\Capacitaciones;
use DB;

use App\Exports\AsistenciasExport;
use App\Exports\ListasExport;
use Maatwebsite\Excel\Facades\Excel;


use Carbon\Carbon;

$date = Carbon::now();

class Asistencia extends Controller
{
    public function lector()
    {
        return view('lector');
    }

    public function lectorsalida()
    {
        return view('lectorsalida');
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


    public function crearsalida(Request $request)
    {

         //validaciones del formulario
  

       $date = Carbon::now();

       $time = Carbon::now();

       $date = $date->format('Y-m-d');

       $time = $time->toTimeString();  

       $id = $request->capacitacion;

       $valor  = $request->get('caja_valor');
       $asistencia = DB::table('asistencias')->where('user', $valor)->exists();

      
    if($asistencia == $valor)
    {
        $updated = \DB::update('update asistencias set salida=? 
        where user=?',[$request->time,$valor]);
    }

    else
    {
        $asis = new Asistencias;
        $asis->user = $request->caja_valor;
        $asis->fecha = $request->fecha;
        $asis->hora = $request->time;
        $asis->id = $request->capacitacion;
        $asis->save();
    }
       

        
	    
        
  
    $capacitacion=\DB::select("SELECT asi.`ida` AS ida, asi.`user` AS 'user', asi.`id` AS id
    FROM asistencias AS asi
    ORDER BY asi.`ida` DESC LIMIT 1");

    $nombre=\DB::select("SELECT nombre AS nombre
    FROM capacitaciones WHERE id = ?",[$id]);

    //    return redirect()->route('lector')
       return view('lectorsalida')
       ->with("capacitacion",$capacitacion[0])
       ->with("nombre",$nombre[0])
       ->with("date",$date)
       ->with("time",$time);



    // dd($post);
    }

    public function asistencia()
    {
        $asis = \DB::select("SELECT asi.`ida` AS ida,us.`first_name` AS Nombre,us.`last_name` AS apellido,us.`email` AS correo,ro.name AS 'role',asi.`fecha` AS fecha,asi.`hora` AS hora,
         asi.`salida` AS salida,ca.`id` AS id,ca.`nombre` AS capacitacion
        FROM asistencias AS asi
        INNER JOIN capacitaciones AS ca ON ca.`id`=asi.`id`
        INNER JOIN users AS us ON us.`QRpassword`=asi.`user`
        INNER JOIN role_users AS ru ON ru.`user_id`=us.`id`
        INNER JOIN roles AS ro ON ro.`id`=ru.`role_id`");
        return view('asistenciacapaci')
        ->with('asis',$asis);

    }

 
    public function export(Request $request) 
    {

        $nombre = $request->get('buscador');

        // return Excel::download(new AsistenciasExport, 'Asistencias.xlsx');
        return (new AsistenciasExport($nombre))->download('Asistencias.xlsx');
    }

    public function exportcomplete() 
    {
        return Excel::download(new ListasExport, 'Reporte-General.xlsx');
    }
    

}
