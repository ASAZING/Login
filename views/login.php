<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

</head>

<?php require 'header.php'?>

<body>

    <h2>Iniciar sesión en <span class="negrita">web</span></h2>
    <form class="form-login" action="../models/auth.php" method="post">
        <div class="container-login">
            <input type="email" name="email" id="email" placeholder="Correo electronico" required>
            <input type="password" name="pass" id="pass" placeholder="Contraseña" required>

            <div class="input-48">
                <label class="container text-12">Mantener mi sesión abierta en este computador
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
            </div>
            <input class="bg-btn-dblue btn-normal input-48" type="submit" value="INICIAR SESIÓN">
        </div>
    </form>
    <br>
    <h1>¿Has olvidado la contraseña? ¿No tiene una cuenta?</h1>
    <h1>Politicas de privacidad</h1>
    <br>
    <h1>¿Tiene algún problema con la autentificacion de 2 factores?</h1>

</body>

</html>