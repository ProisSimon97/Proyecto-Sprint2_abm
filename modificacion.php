<?php 
  include("Modelo/EquipoPersistence.php");

  $base = new EquipoPersistence();


  if (!preg_match ("/^[a-zA-z]*$/", $_GET['nombre']) ) {  
    header('Location: fmodificacion.php?mensaje=El campo "Nombre del Pais" debe estar formado solo por letras&id='. $_GET["id"] . '&nombre='. $_GET["nombre"] .'&codigo='. $_GET["codigo"] .'&clasificacion='. $_GET["clasificacion"] .'&titulos='. $_GET["titulos"] .'&finales='. $_GET["finales"] .''); 
    exit();
  }    

  if (!preg_match ("/^[a-zA-z]*$/", $_GET['codigo']) ) {   
    header('Location: fmodificacion.php?mensaje=El campo "Codigo FIFA" debe estar formado solo por letras&id='. $_GET["id"] . '&nombre='. $_GET["nombre"] .'&codigo='. $_GET["codigo"] .'&clasificacion='. $_GET["clasificacion"] .'&titulos='. $_GET["titulos"] .'&finales='. $_GET["finales"] .''); 
    exit();
  }   

  if (!preg_match ("/^[0-9]*$/", $_GET['clasificacion']) ) {  
    header('Location: fmodificacion.php?mensaje=El campo "Clasificacion FIFA" debe estar formado solo por numeros&id='. $_GET["id"] . '&nombre='. $_GET["nombre"] .'&codigo='. $_GET["codigo"] .'&clasificacion='. $_GET["clasificacion"] .'&titulos='. $_GET["titulos"] .'&finales='. $_GET["finales"] .''); 
    exit();
  }   

  if (!preg_match ("/^[0-9]*$/", $_GET['titulos']) ) {  
    header('Location: fmodificacion.php?mensaje=El campo "Titulos Ganados" debe estar formado solo por numeros&id='. $_GET["id"] . '&nombre='. $_GET["nombre"] .'&codigo='. $_GET["codigo"] .'&clasificacion='. $_GET["clasificacion"] .'&titulos='. $_GET["titulos"] .'&finales='. $_GET["finales"] .''); 
    exit();
  }   

  if (!preg_match ("/^[0-9]*$/", $_GET['finales']) ) {  
    header('Location: fmodificacion.php?mensaje=El campo "Finales Jugadas" debe estar formado solo por numeros&id='. $_GET["id"] . '&nombre='. $_GET["nombre"] .'&codigo='. $_GET["codigo"] .'&clasificacion='. $_GET["clasificacion"] .'&titulos='. $_GET["titulos"] .'&finales='. $_GET["finales"] .''); 
    exit();
  }   

  elseif (isset($_GET['nombre'])) {
    $base->modificarEquipo($_GET['id']);
    header('Location: listado.php?mensaje=modificado');
  }
?>