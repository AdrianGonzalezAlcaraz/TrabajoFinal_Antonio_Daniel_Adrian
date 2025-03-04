<?php
//inclimos la cabecera
include "header.php"; 
?>
<div class="container my-5 ">
    <div class="col">
        <div class="col text-center ">
            <div class="card bg-dark">
                <div class="card-header display-6" style="color: blue">
                Producto Actualizado
                <br>
                Volver a la pagina principal
                </div>
                <div class="p-4 text-light">
                    <!-- enlace y icono de regreso a la pagina principal. una flecha hacia atras -->
                    <a href="index.php"><svg id="i-backwards" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 2 L2 16 16 30 16 16 30 30 30 2 16 16 Z" /></svg></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
//incluimos el pie
include "footer.php";
?>