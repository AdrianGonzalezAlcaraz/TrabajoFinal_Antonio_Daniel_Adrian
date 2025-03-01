<?php
//inclimos la cabecera
include "header.php"; 
?>
<?php
    try{
        //requerimos el archivo
    require_once 'Conexion.php'; 
    //variables que recogen los datos del formulario
    $id = $_POST['identificador'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $temporal = $_FILES['imagen'];
    $directorioTemporal = $temporal['tmp_name'];
    $nombreArchivo = $_FILES['imagen']['name'];
    $tipo =["jpg","gif","png"];
    $max_file_size = 5000;
    $arrayArchivo = pathinfo($nombreArchivo);
    $extension = $arrayArchivo['extension'];
    $rutaCompleta = 'C:/xampp/htdocs/bustrap/imagen/'. basename($nombreArchivo);
    move_uploaded_file($directorioTemporal, $rutaCompleta);
    $imagen = file_get_contents($rutaCompleta);
    if(in_array($extension,$tipo ) && isset($_POST['descripcion'])) {
        if( $temporal['size'] > $max_file_size) {
            $sql = "INSERT INTO productos (id_producto, nombre, descripcion , precio, fotografia) VALUES($id,'$nombre','$descripcion',$precio, '$nombreArchivo')";
            if(mysqli_query($conexion,$sql)) {
               header("location: alta_ok.php");
            }
        }
    } else {
        header("location: error.php");
    }

    } catch(Exception $e) {
        header("location: error.php");
    }
?>
<?php
//incluimos el pie
include "footer.php";
?>