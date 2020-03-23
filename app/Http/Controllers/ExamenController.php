<?php

namespace App\Http\Controllers;

use App\Examens;

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
}
