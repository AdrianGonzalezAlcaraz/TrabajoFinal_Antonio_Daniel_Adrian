<?php
require_once 'conexion.php';
$id = $_GET['id'];
$sql = "DELETE FROM productos WHERE id_producto = '" . $id . "'";
if(mysqli_query($conexion, $sql)){
}
echo "<script>location.href='baja_ok.php'</script>"; 
?>