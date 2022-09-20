<?php 
    include("Modelo/EquipoPersistence.php");

    $base = new EquipoPersistence();

  if (isset($_GET['nombre'])) {
    $base->modificarEquipo($_GET['id']);
    header('Location: listado.php');
  }
?>