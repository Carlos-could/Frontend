<?php
include "inc/funciones/funciones.php";
include "inc/layout/header.php";
?>

<div class="container">
   <div class="row my-4 text-center">
           <h3 class="">Agenda de Contactos - CRUD</h3>
   </div>

    <div class="row">
        <div class="four columns add_contact">
           <h4 class="c-1">Ingreso de datos</h4>
            <form id="contacto" action="#" class="u-full-width">
                <legend></legend>
                <?php include "inc/layout/formulario.php"; ?>
            </form>
            <a href="como.php">Como se hizo</a>
        </div> <!-- 5 columnas-->

        <!-- <div class="box_2 quan_contact">
            <p class="total-contactos"> <span>13</span> Contactos</p>

        </div> -->


    <div class="eight columns contactos">
        <div class=" list_contact contenedor-contactos">
            <h4 class="c-1">Listado de contactos</h4>
            <input type="text" class="buscador u-full-width" placeholder="Buscar contactos" style="height:50px;">


            <div class="contenedor-tabla">
               <table id="listado-contactos" class="listado-contactos u-full-width">
                  <thead>
                     <tr>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Teléfono</th>
                        <th class="text-center">Acciones</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php $contactos = obtenerContactos();
                          if ($contactos->num_rows) {

                            foreach ($contactos as $contacto) { ?>
                            <tr>

                              <td><?php echo $contacto['nombre']; ?></td>
                              <td><?php echo $contacto['empresa']; ?></td>
                              <td><?php echo $contacto['telefono']; ?></td>

                              <td class="acciones">
                                <a class="btn-editar c-5" href="editar.php?id=<?php echo $contacto['id']; ?>">
                                  <i class="fas fa-pen-square btn-doscinco"></i>
                                </a>
                                <button data-id="<?php echo $contacto['id']; ?>" type="button" class="m-cero p-cero c-1 btn-borrar">
                                  <i class="fas fa-trash-alt btn-dos m-cero"></i>
                                </button>
                              </td>
                            </tr>
                            <?php }
                          } ?>

                  </tbody>
               </table>
            </div>
        </div>
    </div> <!-- 7 columnas-->
    </div> <!-- row-->
</div> <!-- Container -->
<?php include "inc/layout/footer.php"; ?>
