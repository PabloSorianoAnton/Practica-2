<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<h1>ACTUALIZAR ALUMNO</h1>
<!-- {{$alumno->nombre}} -->

<div> 
    <form  action="{{url('modificar/'.$alumno->id)}}" method="post" enctype="multipart/form-data">
    <!-- evitar ataques -->
    @csrf
    <!-- {{csrf_field()}} -->
    {{method_field('PUT')}}

        <label>Foto</label>
        <input type="file" name="foto" id="foto" value="{{$alumno->foto}}">
        
        <label>Nombre</label>
        <!-- {{-- {{<input type="text" name="__token" value=csrf_token()> }} --}} -->
        <input type="text" name="nombre" value="{{$alumno->nombre}}" required>

        <label>Apellido</label>
        <input type="text" name="apellido" value="{{$alumno->apellido}}" required>

        <label>Email</label>
        <input type="email" name="correo" value="{{$alumno->correo}}" required>

    <label>Edad</label>
    <input type="number" name="edad" value="{{$alumno->edad}}" required>
    <label>Password</label>
    <input type="text" name="password" value="{{$alumno->password}}" required>
    <input type="submit" name="enviar" value="Enviar">
</form>
</div>
<script src="{{asset('js/app.js')}}"></script>    
</body>
</html>
