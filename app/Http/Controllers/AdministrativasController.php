<?php

namespace App\Http\Controllers;

use App\Models\Administrativas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\EmpleadoCrearRequest;

class AdministrativasController extends Controller
{
    public function recibirlogin(Request $request){
        $datos=$request->except('_token','enviar');
        $users=DB::table('administrativas')->where([['email','=', $datos['email']],['password','=',$datos['password']],])->count();
            // return $datos;
            if ($users == 1) {
                return redirect('mostrar');
            } else {
                return redirect('/');
            }
    }

    public function login(){
        return view('login');
    }

    public function mostrar(){
        // coger todos los datos de tbl_alumnos
        $lista=DB::table('empleados')->get();
        // return $lista;
        // hace referencia a $lista y lo encia a mostrarvista
        // compact -> pasarle mas de una variable a lista
        return view('mostrarvista', compact('lista'));
    }

    public function borrar($id){
        //return $id;
        DB::table('empleados')->where('id', '=', $id)->delete();
        // envio a la ruta mostrar
        return redirect('mostrar');
    }

    public function crear(){
        return view('crearalumno');
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
     * @param  \App\Models\Administrativas  $administrativas
     * @return \Illuminate\Http\Response
     */
    public function show(Administrativas $administrativas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrativas  $administrativas
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrativas $administrativas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrativas  $administrativas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrativas $administrativas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrativas  $administrativas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrativas $administrativas)
    {
        //
    }
}
