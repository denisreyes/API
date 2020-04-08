<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestador;
use Illuminate\Http\Response;

class PrestadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prestadores = Prestador::all();
        return response()->json($prestadores, 200)
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
        $nuevo_prestador = new Prestador;
        $nuevo_prestador->nombre = $request->input('nombre');
        $nuevo_prestador->horas = $request->input('horas');
        $nuevo_prestador->inicio = $request->input('inicio');
        $nuevo_prestador->fin = $request->input('fin');
        $nuevo_prestador->save();
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
        $prestador = Prestador::find($id);
        return response()->json($prestador, 200)->header('Content-Type','aplication/json')
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
        $prestador = Prestador::find($id);
        $prestador->nombre = $request->input('nombre');
        $prestador->horas = $request->input('horas');
        $prestador->inicio = $request->input('inicio');
        $prestador->fin = $request->input('fin');
        $prestador->save();
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
        Prestador::destroy($id);
        return response()->json(['message'=>'recurso eliminado'], 200)->header('Content-Type','aplication/json')
        ->header('Access-Control-Allow-Origin','*');
    }
}
