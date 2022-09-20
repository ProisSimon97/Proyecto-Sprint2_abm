<?php 
  include("Modelo/EquipoPersistence.php");

  $base = new EquipoPersistence();

  if (isset($_GET['nombre'])) {
    $base->guardarEquipo();
    header('Location: listado.php?mensaje="bien"');
  }
