<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capacitaciones;

use Carbon\Carbon;


$date = Carbon::now();

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


        $date = Carbon::now();

        $time = Carbon::now();

        $date = $date->format('Y-m-d');

        $time = $time->toTimeString(); 

        // return view('capacitaciones')
        return view('lector')
        ->with("capacitacion",$capacitacion[0])
        ->with("nombre",$nombre[0])
        ->with("date",$date)
        ->with("time",$time);

        
    }

    public function salidacapa($id)
    {
        $capacitacion = capacitaciones::where('id','=',$id)->get();


        $nombre=\DB::select("SELECT nombre AS nombre
        FROM capacitaciones WHERE id = ?",[$id]);


        $date = Carbon::now();

        $time = Carbon::now();

        $date = $date->format('Y-m-d');

        $time = $time->toTimeString(); 

        // return view('capacitaciones')
        return view('lectorsalida')
        ->with("capacitacion",$capacitacion[0])
        ->with("nombre",$nombre[0])
        ->with("date",$date)
        ->with("time",$time);

        
    }

    public function desactivarcapa($id)
    {
        capacitaciones::find($id)->delete();
        return redirect()->route('listacapacitacion');
  
    }

    public function createcapaci()
    {
        $clavequesigue = capacitaciones::withTrashed()->orderBy('id','desc')
        ->take(1)
        ->get();

        if (count($clavequesigue)==0)
        {
        $idc = 1;
        }
        else
        {
        $idc= $clavequesigue[0]->id+1;
        }



        // DESPUES DE QUE VERIFICA TODOS LOS DATOS MANDA A LLAMAR A LA VISTA
        return view ('createcapaci')
        ->with('idc',$idc);

    }

    
public function guardacapacitacion(Request $request)
{
 
  //validaciones del formulario

//   $this->validate($request,[
//     'id_empresa'=>'required|numeric',
//     'nombre_empresa'=>'required|regex:/^[\pL\s\-]+$/u',
//     'tipo_empresa'=>'required|regex:/^[\pL\s\-]+$/u',
//   ]);   

  // insertar datos
  $capa = new capacitaciones;
  $capa->id = $request->id;
  $capa->nombre = $request->capacitacion;
  $capa->fecha = $request->fecha;
  $capa->hora = $request->hora;
  $capa->lugar = $request->lugar;
  $capa->save();

  return redirect()->route("createcapaci");



}

}

