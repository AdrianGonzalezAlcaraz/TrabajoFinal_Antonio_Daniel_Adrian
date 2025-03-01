<?php
//inclimos la cabecera
include "header.php"; 
?>
<div class="container my-5 ">
    <div class="row">
        <div class="col text-center ">
            <div class="card bg-info">
                <div class="card-header display-6" style="color: white">
                Tabla de base de datos
                </div>
                <div class="p-4">
                    <!-- creamos la tabla -->
                    <div class="table-responsive">
                        <table class="table table-dark" >
                            <thead>
                                <!-- fila prioncipal -->
                                <tr>
                                    <th scope="col">Alta de producto</th>
                                    <th scope="col">Baja de producto</th>
                                    <th scope="col">Actualizacion del producto</th>
                                    <th scope="col">Listado de producto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- filas secundarias -->
                                <tr>
                                    <td scope="row"><a href="alta.php"><i class="bi bi-align-middle " style="color:green; font-size:3em"></i></a></td>
                                    <td><a href="baja.php"><i class="bi bi-trash-fill"  style="color:red; font-size:3em"></i></a></td>
                                    <td><a href="actualizar.php"><i class="bi bi-arrow-clockwise" style=" font-size:3em"></i></a></td>
                                    <td><a href="listar.php"><i class="bi bi-eye" style="color:purple; font-size:3em"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
//incluimos el pie
include "footer.php";
?>