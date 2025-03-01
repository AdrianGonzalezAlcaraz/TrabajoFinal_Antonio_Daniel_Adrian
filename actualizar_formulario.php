<?php
// requerimos la conexion
require_once 'Conexion.php'; 
//inclimos la cabecera
include "header.php"; 
$id = $_GET['id'];
echo $id;
$sql = "SELECT * FROM productos WHERE id_producto = $id ";
$registros = mysqli_query($conexion,$sql);
$registro = mysqli_fetch_row($registros);
?>
<div class="container my-5 ">
    <div class="col">
        <div class="col text-center ">
            <div class="card bg-dark">
                <div class="card-header display-6" style="color: blue">
                Formulario Actualizar Producto
                </div>
                <div class="p-4 text-light" >
                    <!-- formulario -->
                    <form class="p-4" method= "POST" action="actualiza_codigo.php?idmodifica=<?php echo $id; ?>&nombreimagen=<?php echo $registro[4]; ?>" enctype="multipart/form-data">
                            
                            <div class="my-3">
                                <label for="" class="form-label">Identificador</label>
                                <input type="number" class="form-control" name="identificador" id="identificador" placeholder="Introduce producto" autofocus required value="<?php echo $registro[0]?>"/>  
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre"  required value="<?php echo $registro[1]?>"/>  
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Descripcion</label>
                                <textarea class="form-control" name= "descripcion" id="descripcion" rows="3"><?php echo $registro[2]?></textarea>
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Precio</label>
                                <input type="number" class="form-control" name="precio" id="precio" required value="<?php echo $registro[3]?>"/>  
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Imagen Antigua</label>
                                <?php echo'<img width="100px" height="100px" src="imagen/'.$registro[4].'">';?>
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Imagen Nueva</label>
                                <input type="file" class="form-control" name="imagen" id="imagen" required/>  
                            </div>
                            <div class="d-grid">
                                <input type="submit" class="btn btn-primary" value="Actualizar">
                            </form>
                     <!-- enlace y icono de regreso a la pagina principal. una flecha hacia atras -->
                    <a href="index.php"><i class="bi bi-arrow-return-left"style="font-size:3em"></i></a>
                </div>
            </div>
        </div>
    </div>
</duv>
<?php
//incluimos el pie
include "footer.php";
?>