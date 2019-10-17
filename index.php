<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Librerias/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
        <link href="Librerias/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>
    <body >
        <form class="grander">
            <div class="login grande">
                <div class="logoizq imagen">
                    <img class="" alt="" />
                </div>
                <div class="derecha" id="input">
                    <img style="" class="imagen2" alt="" />
                    <input type="text" name="usaurio" id="usuario" class="inputlogin" placeholder="Usuario">
                    <input type="password" name="contrasena" id="contrasena" class="inputlogin" placeholder="Contrasena">
                    <div><button id="entrar" type="button" onclick="Login()">Entrar</button> </div>
                </div>
            </div>
        </form>
        <script src="Librerias/jquery.js" type="text/javascript"></script>
        <script src="Librerias/bootstrap.min.js" type="text/javascript"></script>
        <script src="Librerias/sweetalert.min.js" type="text/javascript"></script>
        <!-- <script src="JS/login.js" type="text/javascript"></script> -->
    </body>
</html>
