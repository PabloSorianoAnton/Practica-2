<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleado</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/css.css')}}">
</head>
<body>
<form method='get' action="{{url('mostrar')}}">
    <button type='submit' style="margin-left:3%; margin-top: 2%;" class="btn btn-success">Volver atrás</button>
</form>
<div style="float: left; margin-left:20%; margin-top: 2%;">
    <a href="logout"  style="color: white;" class="btn btn-info">Cerrar sesión del administrador</a>
</div>
<br>

    @if ($errors->any())
       <div style="float: right; width: 30%; margin-right: 30%; height: 70px;" class="alert-danger alert-dismissible" role="alert">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div style="width: 60%; margin-left: 20%; margin-top: 5%; margin-bottom: 3%;">
        <h1 style="text-align: center;">Nuevo empleado</h1>
        <form  action="{{url('recibir')}}" method="post" enctype="multipart/form-data">
        <!-- evitar ataques -->
        @csrf
        <!-- {{csrf_field()}} -->
            <div style="float: left; width: 45%;">
                <label>Nombre</label>
                <!-- {{-- {{<input type="text" name="__token" value=csrf_token()> }} --}} -->
                <br>
                <input style="width: 70%;" type="text" name="nombre_empleados" required>
                <br>
                <label>Primer Apellido</label>
                <br>
                <input style="width: 70%;" type="text" name="apellido1_empleados" required>
                <br>
                <label>Segundo Apellido</label>
                <br>
                <input style="width: 70%;" type="text" name="apellido2_empleados" required>
                <br>
                <label>Email</label>
                <br>
                <input style="width: 70%;" type="email" name="email_empleado" required>
            </div>
            <div style="float: right; width: 44%;">
                <label>Fecha de contratacion</label>
                <br>
                <input style="width: 70%; height:124px;" type="date" name="fecha_empleado" required>
                <br>
                <label>Sueldo</label>
                <br>
                <input style="width: 70%;" type="text" name="sueldo_empleado" required>
                <br>
                <label>Complementos</label>
                <br>
                <input style="width: 70%;" type="text" name="complementos_empleado" required>
                <br>
            </div>
        <input type="submit" name="enviar" value="Registrar empleado">
        </form>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
