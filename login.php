<?php

require 'conexion.php';

session_start();
$usuario = $_REQUEST['user'];
$pass = $_POST['pass'];

$query = "SELECT * FROM login_datos where codigo='$usuario' AND pass='$pass'";
$consulta=pg_query($conexion,$query);
$cantidad=pg_num_rows($consulta);

if($cantidad>0){
    $_SESSION["codigo"]="$usuario";
    header("location: usuario.php");
}
else{
    
    $query = "SELECT * FROM empleado where usuario='$usuario' AND pass='$pass'";
    $consulta=pg_query($conexion,$query);
    $cantidad=pg_num_rows($consulta);

    if($cantidad>0){
        $_SESSION['codigo']=$usuario;
        header("location: empleado.php");
    }
    else{
        $query = "SELECT * FROM entrenador where apodo='$usuario' AND pass='$pass'";
        $consulta=pg_query($conexion,$query);
        $cantidad=pg_num_rows($consulta);

        if($cantidad>0){
            $_SESSION['codigo']=$usuario;
            header("location: entrenador.php");
        }
        else{
            $query = "SELECT * FROM administrador where usuario='$usuario' AND pass='$pass'";
            $consulta=pg_query($conexion,$query);
            $cantidad=pg_num_rows($consulta);
        
            if($cantidad>0){
                $_SESSION['codigo']=$usuario;
                header("location: administrador.php");
            }
            else{
                header("location: loggin.html");
            }
        }
    }
}

?>