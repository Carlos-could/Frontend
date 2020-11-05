<?php include "inc/layout/header.php"; ?>

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
                     <tr>
                        <td class="">Carlos Moraan</td>
                        <td class="">Mundo Red</td>
                        <td class="">015902293086</td>
                        <td class="" style="display:flex; justify-content:space-around; align-items:center">
                           <a class="btn-editar c-5" href="editar.php?id=1" style="text-decoration:none">
                              <i class="fas fa-pen-square" style="font-size:2.5rem"></i>
                           </a>
                           <button data-id="1" type="button" class="btn-borrar m-cero p-cero c-1" style="border:none">
                              <i class="fas fa-trash-alt" style="font-size:2rem"></i>
                           </button>
                        </td>
                     </tr>
                     <tr>
                        <td>Carlos Moran</td>
                        <td>Mundo Red</td>
                        <td>015902293086</td>
                        <td class="" style="display:flex; justify-content:space-around; align-items:center">
                           <a class="btn-editar c-5" href="editar.php?id=1" style="text-decoration:none">
                              <i class="fas fa-pen-square" style="font-size:2.5rem"></i>
                           </a>
                           <button data-id="1" type="button" class="btn-borrar m-cero p-cero c-1" style="border:none">
                              <i class="fas fa-trash-alt" style="font-size:2rem"></i>
                           </button>
                        </td>
                     </tr>
                     <tr>
                        <td>Carlos Moran</td>
                        <td>Mundo Red</td>
                        <td>015902293086</td>
                        <td class="" style="display:flex; justify-content:space-around; align-items:center">
                           <a class="btn-editar c-5" href="editar.php?id=1" style="text-decoration:none">
                              <i class="fas fa-pen-square" style="font-size:2.5rem"></i>
                           </a>
                           <button data-id="1" type="button" class="btn-borrar m-cero p-cero c-1" style="border:none">
                              <i class="fas fa-trash-alt" style="font-size:2rem"></i>
                           </button>
                        </td>
                     </tr>

                  </tbody>
               </table>
            </div>
        </div>
    </div> <!-- 7 columnas-->
    </div> <!-- row-->
</div> <!-- Container -->
<?php include "inc/layout/footer.php"; ?>
