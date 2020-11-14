<?php
include "inc/funciones/funciones.php";
include "inc/layout/header.php";

$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

if (!$id) {

}
?>


<header>

   $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

   if (!$id) {
     die('No es valido');
   }

   $resultado = obtenerContacto($id);
   $contacto = $resultado->fetch_assoc();
?>

<div class="container">
   <div class="row my-4">
      <h3 class="text-center">Edite el contacto</h3>
   </div>
   <div class="row flex-center">
      <div class="six columns">
         <form class="" id="contacto" action="#">
            <legend></legend>
            <?php include "inc/layout/formulario.php"; ?>
         </form>
      </div>
   </div>

   <div class="row">
      <div class="six columns">
         <a href="index.php" class="btn btn-volver"> <- volver</a>

      </div>
   </div>

</div>

<?php include "inc/layout/footer.php"; ?>
