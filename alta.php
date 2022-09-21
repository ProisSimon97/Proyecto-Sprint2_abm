<?php 
  include("Modelo/EquipoPersistence.php");

  $base = new EquipoPersistence();

  if (!preg_match ("/^[a-zA-z]*$/", $_GET['nombre']) ) {  
    header('Location: falta.php?mensaje=El campo "Nombre del Pais" debe estar formado solo por letras'); 
    exit();
  }    

  if (!preg_match ("/^[a-zA-z]*$/", $_GET['codigo']) ) {  
    header('Location: falta.php?mensaje=El campo "Codigo FIFA" debe estar formado solo por letras'); 
    exit();
  }   

  if (!preg_match ("/^[0-9]*$/", $_GET['clasificacion']) ) {  
    header('Location: falta.php?mensaje=El campo "Clasificacion FIFA" debe estar formado solo por numeros'); 
    exit();
  }   

  if (!preg_match ("/^[0-9]*$/", $_GET['titulos']) ) {  
    header('Location: falta.php?mensaje=El campo "Titulos Ganados" debe estar formado solo por numeros'); 
    exit();
  }   

  if (!preg_match ("/^[0-9]*$/", $_GET['finales']) ) {  
    header('Location: falta.php?mensaje=El campo "Finales Jugadas" debe estar formado solo por numeros'); 
    exit();
  }   

  elseif (isset($_GET['nombre'])) {
    $base->guardarEquipo();
    header('Location: listado.php?mensaje=dado de alta');
  }
