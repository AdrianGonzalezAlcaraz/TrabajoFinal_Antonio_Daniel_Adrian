<?php
// requerimos la conexion
require_once 'Conexion.php'; 
//inclimos la cabecera
include "header.php"; 
$sql = "SELECT * FROM productos";
$registros = mysqli_query($conexion,$sql);
?>
<div class="container my-5 ">
    <div class="row">
        <div class="col text-center ">
            <div class="card bg-info">
                <div class="card-header display-6" style="color: purple">
                Lista de productos para eliminar
                </div>
                <div class="p-4">
                    <div class="table-responsive">
                        <table class="table table-dark" >
                            <thead>
                                <tr>
                                    <th scope="col">Identificador</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Actualizar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                 while($registro = mysqli_fetch_row($registros)){
                                    
                                ?>
                                <tr>
                                    <th scope="col"><?php echo $registro[0];?></th>
                                    <th scope="col"><?php echo $registro[1];?></th>
                                    <th scope="col"><?php echo $registro[2];?></th>
                                    <th scope="col"><?php echo $registro[3]."€";?></th>
                                    <th scope="col"><?php echo "<img width='50px' src=imagen/$registro[4]>";?></th>
                                    <th><?php echo "<a href='actualizar_formulario.php?id=$registro[0]'>"?> <i class="bi bi-brush" style="color:blue; font-size:2em"></i></a></th>
                                </tr>
                                <?php
                                }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="p-4 text-light">
                <a href="index.php"><i class="bi bi-arrow-return-left"style="font-size:5em"></i></a>
            </div>
        </div>
    </div>
</div>
<?php
//incluimos el pie
include "footer.php";
?>