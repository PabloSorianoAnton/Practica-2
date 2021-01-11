<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <h1>CREAR ALUMNO</h1>
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
    
        <label>Foto</label>
        <input type="file" name="foto" id="foto">

        <label>Nombre</label>
        <!-- {{-- {{<input type="text" name="__token" value=csrf_token()> }} --}} -->
        <input type="text" name="nombre" required>

        <label>Apellido</label>
        <input type="text" name="apellido" required>

        <label>Email</label>
        <input type="email" name="correo" required>

    <label>Edad</label>
    <input type="number" name="edad" required>
    <label>Password</label>
    <input type="password" name="password" required>
    <input type="password2" name="password2" required>
    <input type="submit" name="enviar" value="Enviar">
</form>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
