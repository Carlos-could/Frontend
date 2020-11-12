<?php
   include "inc/funciones/funciones.php";
   include "inc/layout/header.php";

   $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

   if (!$id) {
     die('No es valido');
   }

   $resultado = obtenerContacto($id);
   $contacto = $resultado->fetch_assoc();
?>


<header>

        <h1>Editar Contacto</h1>
</header>

<div class="container">
    <section class="sec_1">
        <div class="box_1 add_contact">
            <form id="contacto" action="#">
              <legend>Edite el contacto</legend>
                <?php include "inc/layout/formulario.php"; ?>
            </form>
        </div>
    </section>

</div>
<section class="sec_volver">
    <a href="index.php" class="btn btn-volver"> <- volver</a>
</section>
<?php include "inc/layout/footer.php"; ?>
