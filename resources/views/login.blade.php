<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form  action="{{url('recibirlogin')}}" method="post">
 {{csrf_field()}}
        <label>Email:</label>
        <input type="email" name="correo" id="correo" required><br>

        <label>Contraseña:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" name="enviar" value="Enviar"> 
</body>
</html>