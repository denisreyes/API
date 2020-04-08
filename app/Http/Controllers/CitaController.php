<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;
use Illuminate\Http\Response;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cita_registrada = Cita::all();
        return response()->json($cita_registrada, 200)
        ->header('Content-Type','aplication/json')
        ->header('Access-Control-Allow-Origin','*');
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
        $cita = new Cita;
        $cita->fechaHora = $request->input('fechaHora');
        $cita->espacio = $request->input('espacio');
        $cita->nombre = $request->input('nombre');
        $cita->servicio = $request->input('servicio');
        $cita->save();
        return response()->json(['message'=>'recurso creado'], 201)->header('Content-Type','aplication/json')
        ->header('Access-Control-Allow-Origin','*');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cita = Cita::find($id);
        return response()->json($cita, 200)->header('Content-Type','aplication/json')
        ->header('Access-Control-Allow-Origin','*');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $cita = Cita::find($id);
        $cita->fechaHora = $request->input('fechaHora');
        $cita->espacio = $request->input('espacio');
        $cita->nombre = $request->input('nombre');
        $cita->servicio = $request->input('servicio');
        $cita->save();
        return response()->json(['message'=>'recurso actualizado'], 200)->header('Content-Type','aplication/json')
        ->header('Access-Control-Allow-Origin','*');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Cita::destroy($id);
        return response()->json(['message'=>'recurso eliminado'], 200)->header('Content-Type','aplication/json')
        ->header('Access-Control-Allow-Origin','*');
    }
}
