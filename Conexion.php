<?php
//variables de configuracion de conexion
$servidor = "localhost";
$usuario = "root";
$pass = "";
//variable de conexion
$conexion = mysqli_connect($servidor,$usuario,$pass);
//selecionamos la base de datos productosbd
mysqli_select_db($conexion,"productosbd");
?>