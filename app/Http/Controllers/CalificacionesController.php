<?php

namespace App\Http\Controllers;

use App\calificaciones;
use Illuminate\Http\Request;

class CalificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cal = calificaciones::all();
        return view('calificacionesread', compact('cal'));
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
    public function edit(calificaciones $calificaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\calificaciones  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, calificaciones $calificaciones)
    {
        //
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
