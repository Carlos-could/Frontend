<?php

function obtenerContactos() {
  include 'bd.php';
  try {
    return $conn->query("SELECT id, nombre, empresa, telefono FROM contactos");
  } catch (Exception $e) {
    echo "Echo!!" . $e->getMessage() . "<br>";
    return false;
  }
}

// obtiene un contacto toma un id
function obtenerContacto($id) {
  include 'bd.php';
  try {
    return $conn->query("SELECT id, nombre, empresa, telefono FROM contactos WHERE id= $id");
  } catch (Exception $e) {
    echo "Echo!!" . $e->getMessage() . "<br>";
    return false;
  }
}
