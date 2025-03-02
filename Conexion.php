<?php
//variables de configuracion de conexion
$servidor = "sql308.infinityfree.com";
$usuario = "if0_38430047";
$pass = "mSEGfEmUhwi";
//variable de conexion
$conexion = mysqli_connect($servidor,$usuario,$pass);
//selecionamos la base de datos productosbd
mysqli_select_db($conexion,"if0_38430047_db_productos");
?>