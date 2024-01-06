<?php include('con_usuario.php'); ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="usuario.css">
    <link rel="stylesheet" href="Registro.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/3c5fbd6b96.js" crossorigin="anonymous"></script>
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
            <h3 class="titulo"><?=usuario($conexion); ?></h3>
                <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="fa-sharp fa-solid fa-credit-card"></i>  Código: <?=codigo($conexion); ?></li>
                    <li><i class="fa-sharp fa-solid fa-calendar"></i>  Edad: <?=edad($conexion); ?></li>
                    <li><i class="fa-sharp fa-solid fa-user"></i>  Sexo: <?=sexo($conexion); ?></li>
                    <li><i class="fa-sharp fa-solid fa-phone"></i>  telefono: <?=telefono($conexion); ?></li>
                    <li><i class="fa-sharp fa-solid fa-up-down"></i>  Estatura: <?=estatura($conexion); ?></li>
                    <li><i class="fa-sharp fa-solid fa-stopwatch"></i>  Horario: <?=horario($conexion); ?></li>
                </ul>
                <ul class="lista-datos">
                    <li><i class="fa-sharp fa-solid fa-location-dot"></i>  Residencia: <?=residencia($conexion); ?></li>
                    <li><i class="fa-sharp fa-solid fa-pen"></i>  Carrera: <?=carrera($conexion); ?></li>
                    <li><i class="fa-sharp fa-solid fa-school"></i>  Centro universitario: <?=cu($conexion); ?></li>
                    <li><i class="fa-sharp fa-solid fa-person-walking"></i>  Entrenador: <?=entrenador($conexion); ?></li>
                    <li><i class="fa-sharp fa-solid fa-weight-hanging"></i>  Peso: <?=peso($conexion); ?></li>
                    <li><i class="fa-sharp fa-solid fa-dumbbell"></i>  Rutina: <?=rutina($conexion); ?></li>
                </ul>
                            <!-- Buttom -->
            </div>
            <div class="redes-sociales">
                <a href="" class="boton-redes facebook fab fa-facebook-f"><i class="icon-facebook"></i></a>
                <a href="" class="boton-redes twitter fab fa-twitter"><i class="icon-twitter"></i></a>
                <a href="" class="boton-redes instagram fab fa-instagram"><i class="icon-instagram"></i></a>
            </div>
        </div>

        <br><br>
        <section id="Buttom" class="Buttom">
            <div class="contenido-Entrenador">
                    <a href="RegistroEntrenador.php" class="btn-neon">
                        <span id="span1"></span>
                        <span id="span2"></span>
                        <span id="span3"></span>
                        <span id="span4"></span>
                        Editar Entrenador
                    </a>
            </div>
        </section>
    </section>

    
</body>

</html>