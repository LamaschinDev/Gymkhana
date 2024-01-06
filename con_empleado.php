<?php

require 'conexion.php';

function tabla($conexion){
    echo "<br>";
    $query="SELECT * FROM usuario";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->nombre." ";
                echo $obj->apellidop." ";
                echo $obj->apellidom." / ";
                echo $obj->codigo." / ";
                echo $obj->edad." / ";
                echo $obj->sexo." / ";
                echo $obj->telefono." / ";
                echo $obj->residencia." / ";
                echo $obj->carrera." / ";
                echo $obj->cu." / ";
                echo $obj->peso." / ";
                echo $obj->altura." / ";
                echo $obj->rutina." / ";
                echo $obj->entrenador." / ";
                echo $obj->horario." / ";
                echo "<br>";
                echo "<br>";
            }
        }
    }
}


?>

<!DOCTYPE html>

<html lang="en">

    <body>
        <a href="loggin.html" class="btn-neon">
            <span id="span1"></span>
            <span id="span2"></span>
            <span id="span3"></span>
            <span id="span4"></span>
            Salir
        </a>
    </body>
</html>