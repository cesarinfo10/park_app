<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Calificacione;
use Illuminate\Support\Facades\DB;

class CalificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calificaciones = DB::table('calificaciones')
        ->join('eventos', 'calificaciones.eventos_id', '=','eventos.id')
        ->select('calificaciones.*','eventos.desc_evento')
        ->get();
        return $calificaciones;
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
        $calificacionescreate= Calificacione::create($request->all());
        return $calificacionescreate;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calificaciones = DB::table('calificaciones')
        ->join('eventos', 'calificaciones.eventos_id', '=','eventos.id')
        ->select('calificaciones.*','eventos.desc_evento')
        ->where('calificaciones.id', '=', $id)
        ->get();
        return $calificaciones;
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
        $calificacionesupdate = Calificacione::findOrFail($id)->update($request->all());
        return $calificacionesupdate;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $calificacionesdelete=Calificacione::findOrFail($id)->delete();
        return $calificacionesdelete;
    }
}
