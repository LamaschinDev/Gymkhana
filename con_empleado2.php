<?php

require 'conexion.php';

eliminar($conexion);

function eliminar($conexion){
$codigo = $_REQUEST['eliminar'];

$query="DELETE FROM usuario WHERE codigo='$codigo'";
$consulta=pg_query($conexion,$query);
pg_close();

header("location: empleado.php");

}

?>