<?php

require 'conexion.php';

insertar($conexion);

function insertar($conexion){

    $nombre = $_REQUEST['nombre'];
    $apellidop = $_REQUEST['apellidop'];
    $apellidom = $_REQUEST['apellidom'];
    $codigo = $_REQUEST['codigo'];
    $edad = $_REQUEST['edad'];
    $sexo = $_REQUEST['sexo'];
    $telefono = $_REQUEST['telefono'];
    $residencia = $_REQUEST['residencia'];
    $carrera = $_REQUEST['carrera'];
    $cu = $_REQUEST['cu'];

    $query = "INSERT INTO usuario(nombre, apellidop, apellidom,
    codigo, edad, sexo, telefono, residencia, carrera, cu) 
    VALUES ('$nombre','$apellidop', '$apellidom', '$codigo', '$edad', '$sexo', 
    '$telefono', '$residencia', '$carrera', '$cu')";

    /*$query = "INSERT INTO usuario(nombre, apellidop, apellidom,
    codigo, edad, sexo, telefono, residencia, carrera, cu) 
    VALUES ('$_REQUEST[nombre]','$_REQUEST[apellidop]', '$_REQUEST[apellidom]', '$_REQUEST[codigo]', '$_REQUEST[edad]', '$_REQUEST[sexo]', 
    '$_REQUEST[telefono]', '$_REQUEST[residencia]', '$_REQUEST[carrera]', '$_REQUEST[cu]')";*/
    login($conexion);

    $consulta=pg_query($conexion,$query);
    pg_close();
}

function login($conexion){
    
    $contra = $_REQUEST['contra'];
    $codigo = $_REQUEST['codigo'];

    $query = "INSERT INTO login_datos(codigo, pass)
    VALUES ('$codigo', '$contra')";

    $consulta=pg_query($conexion,$query);
    pg_close();

    header("location: loggin.html");
}

?>