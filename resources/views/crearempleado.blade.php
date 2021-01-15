<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <h1>CREAR EMPLEADO</h1>
  @if ($errors->any())
       <div class="alert-danger alert-dismissible" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div> 
    <form  action="{{url('recibir')}}" method="post" enctype="multipart/form-data">
    <!-- evitar ataques -->
    @csrf
    <!-- {{csrf_field()}} -->
    
        <label>Nombre</label>
        <!-- {{-- {{<input type="text" name="__token" value=csrf_token()> }} --}} -->
        <input type="text" name="nombre_empleados" required>

        <label>Primer Apellido</label>
        <input type="text" name="apellido1_empleados" required>

        <label>Segundo Apellido</label>
        <input type="text" name="apellido2_empleados" required>

        <label>Fecha de contratacion</label>
        <input type="date" name="fecha_empleado" required>

        <label>Sueldo</label>
        <input type="text" name="sueldo_empleado" required>

        <label>Complementos</label>
        <input type="text" name="complementos_empleado" required>
        <br>
        <label>Email</label>
        <input type="email" name="email_empleado" required>

    <input type="submit" name="enviar" value="Enviar">
</form>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
