<?php include('con_admin.php'); ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="usuario.css">
    <link rel="stylesheet" href="Registro.css">
    <link rel="stylesheet" href="administrador.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="RegistroEntrenador.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>

    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="perfil.png">
                </div>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo">ADMINISTRADOR</h3>
                <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>

            <div class="redes-sociales">
                <a href="" class="boton-redes facebook fab fa-facebook-f"><i class="icon-facebook"></i></a>
                <a href="" class="boton-redes twitter fab fa-twitter"><i class="icon-twitter"></i></a>
                <a href="" class="boton-redes instagram fab fa-instagram"><i class="icon-instagram"></i></a>
            </div>
        </div>
        <br>
        <div class="perfil-usuario-footer">
                <ul>
                <h2>USUARIOS REGISTRADOS</h2>
                <?=usuarios($conexion); ?>
                </ul>
                <form action="con_admin2.php" method="POST">
                    <input class="controls" type="text" name="eliminar" placeholder="Código de estudiante a eliminar">
                    <button class="ButtonB" type="submit">Eliminar</button>
                </form>
                <a href="Signup.html" class="ButtonB" type="submit">Agregar usuario</a>
            </div>
            <div class="perfil-usuario-footer">
                <ul>
                <h2>ENTRENADORES</h2>
                <?=entrenadores($conexion); ?>
                </ul>
            </div>
            <div class="perfil-usuario-footer">
                <ul>
                <h2>EMPLEADOS</h2>
                <?=empleados($conexion); ?>
                </ul>
            </div>

    </section>

    
</body>

</html>