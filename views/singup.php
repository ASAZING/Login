<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup</title>
</head>
<?php require 'header-sinup.php'?>

<body>
    <h2>Crear su cuenta</h2>
    <form action="../models/register.php" method="post" class="form-singup">
        <div class="container-singup">
            <input type="text" name="name" placeholder="Nombre" required class="input-48">
            <input type="text" name="lastname" placeholder="Apellido" required class="input-48">
            <input type="email" name="email" id="email" placeholder="Correo electronico" required>
            <input type="password" name="pass" id="pass" placeholder="Contraseña" required>
           
            <div class="container-check">
                <label class="container text-15">Certifico que soy mayor de 18 años y acepto el <a
                        href="#">Contrato de usuarios</a> y la <a href="">Politica de privacidad.</a>
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
            </div>
            <input class="bg-btn-purple btn-big" type="submit" value="Crear cuenta">
        </div>

        </div>
        <h1 class="text-black"> <a href="">Inicar sesión</a> en su cuenta de</h1>
        <h1 class="text-black"><a href="">Registrase</a> como una empresa</h1>
    </form>
    <br>
    <h1>Llegó el momento de crear una cuenta en Web &nbsp;&nbsp; Iniciar Sesión</h1>
    <br>
</body>

</html>