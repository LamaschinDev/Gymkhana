<?php

require 'conexion.php';

session_start();

$codigo = $_SESSION["codigo"];

$peso = $_REQUEST['peso'];
$estatura = $_REQUEST['estatura'];
$entrenador = $_REQUEST['entrenador'];
$horario = $_REQUEST['horario'];
$rutina = $_REQUEST['rutina'];

$query = "UPDATE usuario SET peso='$peso', altura='$estatura',
        entrenador='$entrenador', horario='$horario', rutina='$rutina' WHERE codigo='$codigo'";
$consulta=pg_query($conexion,$query);
pg_close();

header("location: usuario.php");
?>