<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $usuario=Usuario::with('tipo_usuarios')->get();
        return $usuario;

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

        $userid = DB::table('usuarios')
        ->where('email', '=', $request->input('email'))
        ->get();


        if (count($userid) == 0){

        $users = new Usuario;
        $tipo = $request->input('tipo_usuarios_id');

        $users->tipo_usuarios_id=$tipo;
        $users->nombre=$request->input('apellido');
        $users->apellido=$request->input('nombre');
        $users->email=$request->input('email');
        $users->pass=crypt($request->input('pass'),'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$
        $2a$07$asxx54ahjppf45sd87a5auxq/SS293XhTEeizKWMnfhnpfay0AALe');
        $users->barrio=$request->input('barrio');
        $users->fecha_nacimiento=$request->input('fecha_nacimiento');
        //ARTISTA
        if ($tipo == 2) {

            if ($request->input('foto_perfil' != '') || $request->input('foto_portada' != '')
                || $request->input('genero_artistico' != '')) {

                $users->foto_perfil=$request->input('foto_perfil');
                $users->foto_portada=$request->input('foto_portada');
                $users->genero_artistico=$request->input('genero_artistico');
                $users->descripcion=$request->input('descripcion');
                $users->estado=$request->input('estado');

                $users->save();
                echo 1;
            }else {
                echo 'Su perfil requiere que todos los campos esten llenos';
            }

        }else{
        $users->fecha_nacimiento= NULL;
        $users->foto_perfil= NULL;
        $users->foto_portada= NULL;
        $users->genero_artistico= NULL;
        $users->descripcion=$request->input('descripcion');
        $users->estado=$request->input('estado');

        $users->save();

        echo 1;
        }

    }else {
        echo 'Su correo ya excite';
    }


        /*$usuariocreate= Usuario::create($request->all());
        return $usuariocreate;*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userid = DB::table('usuarios')
        ->join('tipo_usuarios', 'usuarios.tipo_usuarios_id', '=','tipo_usuarios.id')
        ->select('usuarios.*','tipo_usuarios.desc_tipo')
        ->where('usuarios.id', '=', $id)
        ->get();


        return $userid;
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
       /* $userudate = Usuario::findOrFail($id)->update($request->all());
        return $userudate;*/

        $users = Usuario::findOrFail($id);
        $tipo = $request->input('tipo_usuarios_id');

        $users->tipo_usuarios_id=$tipo;
        $users->nombre=$request->input('apellido');
        $users->apellido=$request->input('nombre');
        $users->email=$request->input('email');
        $users->pass=crypt($request->input('pass'),'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$
        $2a$07$asxx54ahjppf45sd87a5auxq/SS293XhTEeizKWMnfhnpfay0AALe');
        $users->barrio=$request->input('barrio');
        $users->fecha_nacimiento=$request->input('fecha_nacimiento');
        //ARTISTA
        if ($tipo == 2) {

            if ($request->input('foto_perfil' != '') || $request->input('foto_portada' != '')
                || $request->input('genero_artistico' != '')) {

                $users->foto_perfil=$request->input('foto_perfil');
                $users->foto_portada=$request->input('foto_portada');
                $users->genero_artistico=$request->input('genero_artistico');
                $users->descripcion=$request->input('descripcion');
                $users->estado=$request->input('estado');

                $users->save();
                echo 1;
            }else {
                echo 'Su perfil requiere que todos los campos esten llenos';
            }

        }else{
        $users->fecha_nacimiento= NULL;
        $users->foto_perfil= NULL;
        $users->foto_portada= NULL;
        $users->genero_artistico= NULL;
        $users->descripcion=$request->input('descripcion');
        $users->estado=$request->input('estado');

        $users->save();

        echo 1;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userdelete=Usuario::findOrFail($id)->delete();
        return $userdelete;
    }

    public function inicioSesion($email, $pass){

        $encriptar = crypt($pass, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

        $usuario = Usuario::where('email', $email)
            ->where('pass', $encriptar)
            ->get();

            return $usuario;

    }
}
