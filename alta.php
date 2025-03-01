<?php
//inclimos la cabecera
include "header.php"; 
?>
<div class="container my-5 ">
    <div class="col">
        <div class="col text-center ">
            <div class="card bg-dark">
                <div class="card-header display-6" style="color: green">
                Formulario Alta Producto
                </div>
                <div class="p-4 text-light" >
                    <!-- formulario -->
                    <form class="p-4" method="POST" action="registrar.php" enctype="multipart/form-data" style="background-color:#10c4ec; color:black">
                        <div class="mb-3">
                            <!-- identificador -->
                            <label for="identificador" class="form-label">Identificador</label>
                            <input
                                type="Number"
                                class="form-control"
                                name="identificador"
                                id="identificador"
                                placeholder="escriba identificador"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <!-- nombre -->
                            <label for="nombre" class="form-label">Nombre</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nombre"
                                id="nombre"
                                placeholder="escriba nombre"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <!-- descripcion -->
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <textarea
                                type="file"
                                class="form-control"
                                name="descripcion"
                                id="descripcion"
                                >
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <!-- precio -->
                            <label for="precio" class="form-label">Precio</label>
                            <input
                                type="number"
                                class="form-control"
                                name="precio"
                                id="precio"
                                placeholder="10"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <!-- imagen -->
                            <label for="imagen" class="form-label">Imagen</label>
                            <input
                                type="file"
                                class="form-control"
                                name="imagen"
                                id="imagen"
                                accept="image/*"
                                required
                                />
                        </div>
                        <!-- boton para darle de alta al producto -->
                        <input type="submit" value="Alta Producto" class="btn btn-success">
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


