<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Espacio;
use Illuminate\Http\Response;

class EspacioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $espacios_registrados = Espacio::all();
        return response()->json($espacios_registrados, 200)
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
        $espacio_nuevo = new Espacio;
        $espacio_nuevo->nombre = $request->input('nombre');
        $espacio_nuevo->save();
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
        $espacio_a_eliminar = Espacio::destroy($id);
        return response()->json(['message'=>'recurso eliminado'], 200)->header('Content-Type','aplication/json')
        ->header('Access-Control-Allow-Origin','*');
    }
}
