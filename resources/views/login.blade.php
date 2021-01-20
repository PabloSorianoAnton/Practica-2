<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Administrador</title>
    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/css.css')}}">
    <!-- <link rel="stylesheet" href="./css/css.css"> -->
</head>
<body>

<div style="width: 50%; margin-left: 25%; margin-top: 15%; ">
    <h1 style="text-align: center;">Inicio de sesión del administrador</h1>
    <form  action="{{url('recibirlogin')}}" method="post" style="text-align: left;">
        {{csrf_field()}}
        <label>Email:</label>
        <br>
        <input style="width: 100%;" type="email" name="email" id="email" required><br>
        <br>
        <label>Contraseña:</label>
        <br>
        <input style="width: 100%;" type="password" name="password" id="password" required><br>

        <input type="submit" name="enviar" value="Enviar"> 
        <!-- <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="box">
                    <h1>Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p> <input type="text" name="" placeholder="Username"> <input type="password" name="" placeholder="Password"> <a class="forgot text-muted" href="#">Forgot password?</a> <input type="submit" name="" value="Login" href="#">
                    <div class="col-md-12">
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
    </form>
</div>
</body>
</html>
