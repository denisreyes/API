<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventario;
use Illuminate\Http\Response;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inventario = Inventario::all();
        return response()->json($inventario, 200)
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
        $inventario = new Inventario;
        $inventario->nombre = $request->input('nombre');
        $inventario->cantidad = $request->input('cantidad');
        $inventario->save();
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
        $inventario = Inventario::find($id);
        return response()->json($inventario, 200)->header('Content-Type','aplication/json')
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
        $inventario = Inventario::find($id);
        $inventario->nombre = $request->input('nombre');
        $inventario->cantidad = $request->input('cantidad');
        $inventario->save();
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
        Inventario::destroy($id);
        return response()->json(['message'=>'recurso eliminado'], 200)->header('Content-Type','aplication/json')
        ->header('Access-Control-Allow-Origin','*');
    }
}
