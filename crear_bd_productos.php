<?php
//Variables de la creacion de la conexion
$servidor = "localhost";
$usuario = "root";
$pass = "";
//Conectamos al servidor
$conexion = mysqli_connect($servidor,$usuario,$pass);
if(!$conexion) {
    //Error al conectarse al servidor
    echo "Ha habido un error al intentar conectarse con el servidor";
} else {
    //SQL para crear la base de datos productosbd
    $sql = "CREATE DATABASE IF NOT EXISTS productosbd";
    //se crea la base de datos
    mysqli_query($conexion,$sql) or die("Ocurrio un error al intentar crear la base de datos productosbd");
        echo "Se ha logrado crear la base de datos productosbd <br>";
        //selecionamos la base de datos
        mysqli_select_db($conexion,"productosbd");
        //SQL para crear la tabla productos
        $sql2 = "CREATE TABLE IF NOT EXISTS productos (id_producto INT PRIMARY KEY NOT NULL, nombre VARCHAR(20), descripcion VARCHAR(255), precio INT, fotografia BLOB)";
        //se crea la tabla
        mysqli_query($conexion,$sql2) or die("Ocurrio un error al intentar crear la tabla productos");
            echo "Se a logrado crear la tabla productos <br>";
        }
?>