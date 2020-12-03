<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Mensaje;
use Illuminate\Support\Facades\DB;

class MensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensaje = DB::table('mensajes')
        ->join('usuarios', 'mensajes.usuario_id', '=','usuarios.id')
        ->join('tipo_mensajes', 'mensajes.tipo_mensaje_id', '=','tipo_mensajes.id')
        ->select('mensajes.*','usuarios.nombre','usuarios.apellido', 'tipo_mensajes.desc_tipo')
        ->get();
        return $mensaje;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensajecreate= Mensaje::create($request->all());
        return $mensajecreate;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensaje = DB::table('mensajes')
        ->join('usuarios', 'mensajes.usuario_id', '=','usuarios.id')
        ->join('tipo_mensajes', 'mensajes.tipo_mensaje_id', '=','tipo_mensajes.id')
        ->select('mensajes.*','usuarios.nombre','usuarios.apellido', 'tipo_mensajes.desc_tipo')
        ->where('mensajes.id', '=', $id)
        ->get();
        return $mensaje;
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
        $mensajeupdate = Mensaje::findOrFail($id)->update($request->all());
        return $mensajeupdate;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mensajeelete=Mensaje::findOrFail($id)->delete();
        return $mensajedelete;
    }
}
