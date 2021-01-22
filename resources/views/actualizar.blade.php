<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Empleados</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/css.css')}}">
</head>
<body>
<form method='get' action="{{url('mostrar')}}">
    <button type='submit' style="margin-left:3%; margin-top: 2%;" class="btn btn-success">Volver atrás</button>
</form>
<div style="float: left; margin-left:20%; margin-top: 2%; ">
    <a href="logout"  style="color: white;" class="btn btn-info">Cerrar sesión del administrador</a>
</div>
<br>

@if ($errors->any())
       <div class="alert-danger alert-dismissible" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div style="width: 60%; margin-left: 20%; margin-top: 5%;"> 
<h1 style="text-align: center;">Datos del empleado</h1>
    <form  action="{{url('modificar/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
    <!-- evitar ataques -->
    @csrf
    <!-- {{csrf_field()}} -->
    {{method_field('PUT')}}
    <div style="float: left; width: 45%;">
        <label>Nombre</label>
        <!-- {{-- {{<input type="text" name="__token" value=csrf_token()> }} --}} -->
        <br>
        <input style="width: 70%;" type="text" name="nombre_empleados" value="{{$empleado->nombre_empleados}}" required>
        <br>
        <label>Primer apellido</label>
        <br>
        <input style="width: 70%;" type="text" name="apellido1_empleados" value="{{$empleado->apellido1_empleados}}" required>
        <br>
        <label>Segundo a</label>
        <br>
        <input style="width: 70%;" type="text" name="apellido2_empleados" value="{{$empleado->apellido2_empleados}}" required>
        <br>
        <label>Email</label>
        <br>
        <input style="width: 70%;" type="email" name="email_empleado" value="{{$empleado->email_empleado}}" disabled>
    </div>
    <div style="float: right; width: 44%;">
        <label>Fecha del empleado</label>
        <br>
        <input style="width: 70%; height:124px;" type="date" name="fecha_empleado" value="{{$empleado->fecha_empleado}}" required>
        <br>
        <label>Sueldo</label>
        <br>
        <input style="width: 70%;" type="text" name="sueldo_empleado" value="{{$empleado->sueldo_empleado}}" required>
        <br>
        <label>Complementos</label>
        <br>
        <input style="width: 70%;" type="text" name="complementos_empleado" value="{{$empleado->complementos_empleado}}" required>
        <br>
    </div>
        <input type="submit" name="enviar" value="Actualizar empleado">
    </form>
</div>
<script src="{{asset('js/app.js')}}"></script>    
</body>
</html>
