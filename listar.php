<?php
require_once 'Conexion.php'; 
include "header.php"; 
$sql = "SELECT * FROM productos";
$registros = mysqli_query($conexion,$sql);
?>
<div class="container my-5 ">
    <div class="row">
        <div class="col text-center ">
            <div class="card bg-info">
                <div class="card-header display-6" style="color: purple">
                Lista de productos
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
                                </tr>
                                <?php
                                }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="p-4 text-light">
                <a href="index.php"><svg id="i-backwards" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 2 L2 16 16 30 16 16 30 30 30 2 16 16 Z" />
</svg></a>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>