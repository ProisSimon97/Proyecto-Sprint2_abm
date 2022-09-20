<?php 
include("Modelo/EquipoPersistence.php");

$base = new EquipoPersistence();
$base->borrarEquipo($_GET["id"]);

header('Location: listado.php')
?>