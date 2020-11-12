<div class="campos">
    <div class="campo">
        <label for="nombre">Tu nombre</label>
        <input type="text"
           id="nombre"
           class="u-full-width"
           value="<?php echo ($contacto['nombre']) ? $contacto['nombre'] : ""; ?>"
        >
    </div>

    <div class="campo">
        <label for="empresa">Tu empresa</label>
        <input
           type="text"
           id="empresa"
           class="u-full-width"
           value="<?php echo ($contacto['empresa']) ? $contacto['empresa'] : ""; ?>"
        >
    </div>
    <div class="campo">
        <label for="telefono">Tu teléfono</label>
        <input
           type="tel"
           id="telefono"
           class="u-full-width"
           value="<?php echo ($contacto['telefono']) ? $contacto['telefono'] : ""; ?>"
        >
    </div>
</div>
<div class="campo enviar">
   <?php
      $textoBtn = ($contacto['telefono']) ? 'Guardar' : 'Añadir';
      $accion = ($contacto['telefono']) ? 'editar' : 'crear';
   ?>
   <input type="hidden" id="accion" value="<?php echo $accion; ?>">
   <?php if ( isset( $contacto['id'] )) { ?>
      <input type="hidden" id="id" value="<?php echo $contacto['id']; ?>">
   <?php } ?>
   <input type="submit" value="<?php echo $textoBtn; ?>">
</div>
