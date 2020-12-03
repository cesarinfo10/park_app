<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notificacione;
use Illuminate\Support\Facades\DB;

class NotificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noti = DB::table('notificaciones')
        ->join('usuarios', 'notificaciones.usuario_id', '=','usuarios.id')
        ->select('notificaciones.*','usuarios.nombre','usuarios.apellido')
        ->get();
        return $noti;
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
        $noticreate= Notificacione::create($request->all());
        return $noticreate;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noti = DB::table('notificaciones')
        ->join('usuarios', 'notificaciones.usuario_id', '=','usuarios.id')
        ->select('notificaciones.*','usuarios.nombre','usuarios.apellido')
        ->where('notificaciones.id', '=', $id)
        ->get();
        return $noti;
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
        $notiupdate = Notificacione::findOrFail($id)->update($request->all());
        return $notiupdate;
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
