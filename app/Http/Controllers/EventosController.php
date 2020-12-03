<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = DB::table('eventos')
        ->join('usuarios', 'eventos.usuario_id', '=','usuarios.id')
        ->join('categorias', 'eventos.categoria_id', '=','categorias.id')
        ->join('lugares', 'eventos.lugares_id', '=','lugares.id')
        ->select('eventos.*','usuarios.nombre','usuarios.apellido',
                 'categorias.nombre', 'categorias.descripcion',
                 'lugares.nom_lugar', 'lugares.descripcion')
        ->get();
        return $eventos;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eventos = DB::table('eventos')
        ->join('usuarios', 'eventos.usuario_id', '=','usuarios.id')
        ->join('categorias', 'eventos.categoria_id', '=','categorias.id')
        ->join('lugares', 'eventos.lugares_id', '=','lugares.id')
        ->select('eventos.*','usuarios.nombre','usuarios.apellido',
                 'categorias.nombre', 'categorias.descripcion',
                 'lugares.nom_lugar', 'lugares.descripcion')
        ->where('eventos.id', '=', $id)
        ->get();
        return $eventos;
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
    }
}
