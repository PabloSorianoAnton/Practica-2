<?php

namespace App\Http\Controllers;

use App\Models\Administrativas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EmpleadoCrearRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;


class AdministrativasController extends Controller
{
    public function recibirlogin(Request $request){
        $datos=$request->except('_token','enviar');
        $users=DB::table('administrativas')->where([['email','=', $datos['email']],['password','=',$datos['password']],])->count();
            // return $datos;
            if ($users == 1) {
                $request->session()->put('data',$request->input());
                return redirect('mostrar');
                // return $request->session()->all();
            } else {
                return redirect('/');
            }
    }

    public function login(){
        return view('login');
    }

    public function mostrar(){
        if (!session()->has('data')){
            return redirect ('/');
        }
        // coger todos los datos de tbl_alumnos
        $lista=DB::table('empleados')->get();
        // return $lista;
        // hace referencia a $lista y lo encia a mostrarvista
        // compact -> pasarle mas de una variable a lista
        return view('mostrarvista', compact('lista'));
    }

    public function borrar($id){
        //return $id;
        if (!session()->has('data')){
            return redirect ('/');
        }
        DB::table('empleados')->where('id', '=', $id)->delete();
        return redirect('mostrar');
        // envio a la ruta mostrar
        
    }

    public function crear(){
        if (!session()->has('data')){
            return redirect ('/');
        }
        return view('crearempleado');
    }

    public function actualizar($id){
        // recuperrar alumno a partir del id
        // el first nos quedamos con el 1r id que encuentre
        $empleado=DB::table('empleados')->where('id', '=', $id)->first();
        // manera de mostrar el alumno
        // return response()->json($alumno);
        // enviar los datos del alumno a la vista
        return view('actualizar', compact('empleado'));
    }

    public function modificar($id){
        // recibir los datos del usuario
        $datos=request()->except('_token','enviar','_method');
        // $datos=$request->except('_token','enviar','_method');
        // return $datos;
        // actualizar bd
        DB::table('empleados')->where('id', '=', $id)->update($datos);
        // redirigir a mostrar
        return redirect('mostrar');
    }

    public function recibir(EmpleadoCrearRequest $request){
        $datos=$request->except('_token', 'enviar');
        // return $datos['nombre_empleados'];
        DB::table('empleados')->insertGetId(['nombre_empleados'=>$datos['nombre_empleados'],'apellido1_empleados'=>$datos['apellido1_empleados'],'apellido2_empleados'=>$datos['apellido2_empleados'],'fecha_empleado'=>$datos['fecha_empleado'],'sueldo_empleado'=>$datos['sueldo_empleado'],'complementos_empleado'=>$datos['complementos_empleado'],'email_empleado'=>$datos['email_empleado']]);
        // lo redireccionamos a la funcion mostrar para coger la lista con los usuarios
        return redirect('mostrar');
    }

    public function email(){
        if (!session()->has('data')){
            return redirect ('/');
        }
        // coger todos los datos de tbl_alumnos
        // $lista=DB::table('empleados')->get();
        // return $lista;
        // hace referencia a $lista y lo encia a mostrarvista
        // compact -> pasarle mas de una variable a lista
        return view('email');
    }

    public function send(Request $request)
    {
        $email=array(
            'name' => $request->input('name'),
            'content' => $request->input('content')
        );

        $correo=$request->input('email');

        Mail::to($correo)->send(new Email($email));
        return redirect()->back();
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
