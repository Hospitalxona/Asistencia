<?php

namespace App\Http\Controllers;

use App\User;
use App\calificaciones;
use Illuminate\Http\Request;
use DB;

class CalificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $con=\DB::select("SELECT cal.id AS id,cal.title AS title ,ex.tipo AS tipo,CONCAT( us.first_name,' ', us.last_name) AS usuario,cal.calpre AS calpre,cal.calpos AS calpos
        FROM calificaciones AS cal
        INNER JOIN users AS us ON us.id=cal.idu
        INNER JOIN examens AS ex ON ex.id= cal.ide");
        return view('calificacionesread')
        ->with('con',$con);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\calificaciones  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function show(calificaciones $calificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\calificaciones  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('calificacionesedit', ['calificaciones' => calificaciones::findOrFail($id)]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\calificaciones  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cu = calificaciones::fineOrFail($id);

        $cu->calpre = $request->get('calpre');
        $cu->calpos = $request->get('calpos');
        $cu->update();
        return redirect('calificaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\calificaciones  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(calificaciones $calificaciones)
    {
        //
    }
}
