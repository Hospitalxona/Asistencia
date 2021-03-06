<?php

namespace App\Http\Controllers;

use App\Examens;
use App\Calificaciones;
use Sentinel;
use App\Details;
use App\Calis;
use DB;
use Session;

use Illuminate\Http\Request;
use App\Exports\CalisExport;
use App\Exports\CaliscriExport;
use Maatwebsite\Excel\Facades\Excel;

class ExamenController extends Controller
{
    public function show(){

        $clavequesigue = Examens::withTrashed()->orderBy('id','desc')
        ->take(1)
        ->get();

        if (count($clavequesigue)==0)
        {
        $ide = 1;
        }
        else
        {
        $ide= $clavequesigue[0]->id+1;
        }

        $examens = Examens::all();

        return view('examen', compact("ide","examens"));
    }

    public function create(Request $request){

        $exam= new Examens();
        // $exam->id=$request->get('id');
        $exam->title=$request->get('nombre');
        $exam->tipo=$request->get('tipo');
        $exam->iframe=$request->get('iframe');
        $exam->status="indef";
        $exam->save();
        return redirect('examen')->with('success', 'Examen ha sido agregado');
    }

    public function changeStatus($id){

        $status = Examens::find($id);
        $status->status="Activo";
        $status->save();
        return redirect('examen')->with('success', 'Estatus cambiado con exito');
    }

    public function inactiveStatus($id){

        $status = Examens::find($id);
        $status->status="Inactivo";
        $status->save();
        return redirect('examen')->with('success', 'Estatus cambiado con exito');
    }

    public function newdatos($id){

        $cali = Calificaciones::all();
        foreach($cali as $cal)

        if($id ==  $cal->ide)
        {

            return redirect('sinExamen');
        }
        else{


            $cal= new Calificaciones();
            $cal->title='prueba';
            $cal->ide=$id;
            $cal->idu=Sentinel::getUser()->id;
            $cal->estatus='contestado';
            $cal->save();
    
            return redirect('showExampre');

        }

    }

    public function showExampre(){

        $user=  Sentinel::getUser()->id;
        $examens = Examens::all();
        return view('examenpre',compact('examens'));
        
        // dd($cali);
    }


    public function showExampos(){

        $examens = Examens::all();
        return view('exampos',compact('examens'));
    }


    public function createCal(Request $request){

     $ide  = $request->get('ide');
     $idu  =  $request->get('idu');

        
     $cali = DB::table('calificaciones')->where('ide', $ide)->exists();

     $cali2 = DB::table('calificaciones')->where('idu', $idu)->exists();


       if($cali == $ide && $cali2 == $idu)
        {
            return redirect()->route('confirmacion');
        }
        else{

            $cal= new Calificaciones();
            $cal->title=$request->get('title');
            $cal->ide=$request->get('ide');
            $cal->idu=$request->get('idu');
            $cal->estatus='contestado';
            $cal->save();
            return redirect('exito');
        }   
    }

    public function createCalpos(Request $request){

        $ide  = $request->get('ide');
        $idu  =  $request->get('idu');
   
           
        $cali = DB::table('calificaciones')->where('ide', $ide)->exists();
   
        $cali2 = DB::table('calificaciones')->where('idu', $idu)->exists();
   
   
          if($cali == $ide && $cali2 == $idu)
           {
               return redirect()->route('confirmacionpos');
           }
           else{
   
               $cal= new Calificaciones();
               $cal->title=$request->get('title');
               $cal->ide=$request->get('ide');
               $cal->idu=$request->get('idu');
               $cal->estatus='contestado';
               $cal->save();
               return redirect('exitopos');
           }          
       }


    public function confirmacion(){

        return view('confirmacion');
    }

    public function exito(){

        return view('exito');
    }

    public function confirmacionpos(){

        return view('confirmacionpos');
    }

    public function exitopos(){

        return view('exitopos');
    }

   
    public function showcal(){

        
        $con=\DB::select("SELECT cal.id AS id,cal.title AS title ,ex.tipo AS tipo,CONCAT( us.first_name,' ', us.last_name) AS usuario,cal.calpre AS calpre,cal.calpos AS calpos,cal.promedio AS promedio
        FROM calificaciones AS cal
        INNER JOIN users AS us ON us.id=cal.idu
        INNER JOIN examens AS ex ON ex.id= cal.ide");
        return view('calificacionesread',compact('con'));

    }

    public function showcalpublic(){

        $user=Sentinel::getUser()->id;
        
        $con=\DB::select("SELECT cal.id AS id,cal.title AS title ,ex.tipo AS tipo,us.first_name AS user, us.last_name AS apellido,cal.calpre AS calpre,cal.calpos AS calpos,cal.promedio AS promedio
        FROM calificaciones AS cal
        INNER JOIN users AS us ON us.id=cal.idu
        INNER JOIN examens AS ex ON ex.id= cal.ide
        WHERE us.id = ?",[$user]);
        return view('calificacionusuario',compact('con'));

        

    }

    public function calificacion(Request $request){

        $id= $request->id;

        $promedio = $request->calpre + $request->calpos;

        $calnew= Calificaciones::find($id);
        $calnew->calpre=$request->calpre;
        $calnew->calpos=$request->calpos;
        $calnew->promedio=$promedio / 2;
        $calnew->save();
        return redirect('showcal')->with('success', 'Estatus cambiado con exito');


    }

   

    public function exportcalificacion() 
    {
        return Excel::download(new CalisExport, 'Reporte-Gralcalificación.xlsx');
    }

    public function exportbycriterio(Request $request) 
    {

        $nombre = $request->get('buscador');

        // return Excel::download(new AsistenciasExport, 'Asistencias.xlsx');
        return (new CaliscriExport($nombre))->download('Reporte-PorExamen.xlsx');
    }

}
