<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar empleados</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/css.css')}}"> -->
</head>
<body><br>
<h1 style="text-align: center; margin-bottom: 3%;">Lista de los empleados actuales</h1>
<h2 style="text-align: right; margin-right: 3%; float: right"> Bienvenido {{session('data')['email']}}</h2>

<div style="float: left; margin-left:3%">
    <a href="logout" class="btn btn-info">Cerrar sesión del administrador</a>
</div>
<form method='get' action="{{url('crear')}}">
    <button type='submit' style="margin-left:3%" class="btn btn-success">Dar de alta a un nuevo empleado</button>
</form>
<br>
<div class="card">
    <div class="card-body">
        <table class="table table-light">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Email</th>
                    <th>Fecha de contratacion</th>
                    <th>Sueldo</th>
                    <th>Complementos del empleado</th>
                    <th>Actualizar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
            @foreach($lista as $empleado)
                <tr>
                    <td>{{$empleado->nombre_empleados}}</td>
                    <td>{{$empleado->apellido1_empleados}}</td>
                    <td>{{$empleado->apellido2_empleados}}</td>
                    <td>{{$empleado->email_empleado}}</td>
                    <td>{{$empleado->fecha_empleado}}</td>
                    <td>{{$empleado->sueldo_empleado}}</td>
                    <td>{{$empleado->complementos_empleado}}</td>
                    <td>
                        <form method="get" action="{{url('/actualizar/'.$empleado->id)}}">      
                        <button type='submit' class="btn btn-primary" onclick="return confirm('¿Está seguro que quiere actualizar?');">Actualizar</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{url('/borrar/'.$empleado->id)}}">
                        {{csrf_field()}}
                        <!-- metodo para borrar -->
                        {{method_field('DELETE')}}
                        <button type='submit' class="btn btn-danger" onclick="return confirm('¿Borrar?');">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach   
            </tbody>
        </table>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>  
</body>
</html>
