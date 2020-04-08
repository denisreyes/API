<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use Illuminate\Http\Response;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $servicios = Servicio::all();
        return response()->json($servicios, 200)
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
        $servicio = new Servicio;
        $servicio->tipo = $request->input('tipo');
        $servicio->save();
        return response()->json(['message'=>'recurso creado'], 201)
        ->header('Content-Type','aplication/json')
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
        $servicio = Servicio::find($id);
        return response()->json($servicio, 200)
        ->header('Content-Type','aplication/json')
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
        $servicio = Servicio::find($id);
        $servicio->tipo = $request->input('tipo');
        $servicio->save();
        return response()->json(['message'=>'recurso actualizado'], 200)
        ->header('Content-Type','aplication/json')
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
        Servicio::destroy($id);
        return response()->json(['message'=>'recurso eliminado'], 200)->header('Content-Type','aplication/json')
        ->header('Access-Control-Allow-Origin','*');
    }
}
