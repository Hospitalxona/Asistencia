<?php

namespace App\Http\Controllers;

use App\Examens;
use App\Calificaciones;
use Sentinel;
use App\Details;
use DB;
use Session;

use Illuminate\Http\Request;

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

    public function confirmacion(){

        return view('confirmacion');
    }

    public function exito(){

        return view('exito');
    }

    public function showExampos(){

        $examens = Examens::all();
        return view('exampos',compact('examens'));
    }

    public function createCalpos(Request $request){

        $cal= new Calificaciones();
        $cal->title=$request->get('title');
        $cal->ide=$request->get('ide');
        $cal->idu=$request->get('idu');
        $cal->estatus='contestado';
        $cal->save();
        return redirect('showExampos')->with('success', 'Examen ha sido agregado');
    }

    public function sinExamen(Request $request){

        $examens = Examens::all();
        return view('sinexamen')
        ->with('examens',$examens);


    }

}
