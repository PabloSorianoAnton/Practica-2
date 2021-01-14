<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body><br>
<form method='get' action="{{url('crear')}}">
    <button type='submit' class="btn btn-success">Crear</button>
</form><br>
<div class="card">
    <div class="card-body">
        <table class="table table-light">
            <thead class="thead-dark">
                <tr>
                    <th>foto</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>edad</th>
                    <th>correo</th>
                    <th>password</th>
                    <th>actualizar</th>
                    <th>borrar</th>
                </tr>
            </thead>
            <tbody>
            @foreach($lista as $alumno)
                <tr>
                    <td style="padding: auto; text-align: center"><img src="{{asset('storage').'/'.$alumno->foto}}" width="100"></td>
                    <td>{{$alumno->nombre}}</td>
                    <td>{{$alumno->apellido}}</td>
                    <td>{{$alumno->edad}}</td>
                    <td>{{$alumno->correo}}</td>
                    <td>{{$alumno->password}}</td>
                    <td>
                        <form method="get" action="{{url('/actualizar/'.$alumno->id)}}">
                                
                        <button type='submit' class="btn btn-primary" onclick="return confirm('¿Está seguro que quiere actualizar?');">Actualizar</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{url('/borrar/'.$alumno->id)}}">
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
