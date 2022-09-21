<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta</title>     
    <link rel="stylesheet" href="css\bootstrap.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js\formValidation.js"></script>
</head>
<body>
<?php include("nav.php"); ?>
<br><br>

<?php 
    $id = "";
    $nombre = "";
    $codigo = "";
    $clasificacion = "";
    $titulos = "";
    $finales = "";

    $ruta = "alta.php";

    if(isset($_GET['id'])) {  
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];
        $codigo = $_GET['codigo'];
        $clasificacion = $_GET['clasificacion'];
        $titulos = $_GET['titulos'];
        $finales = $_GET['finales'];
    
        $ruta = "modificacion.php";
    }
?>

<div class="container">
    <div class="row">
        <div class="col-xs-1-12">
             <div class="card">
             <?php 
                if(isset($_GET['id'])) {?>  
                    <div id="card-titulo" class="card-header">
                        Modificar Equipo
                    </div>       
                <?php } else {?>
                    <div id="card-titulo" class="card-header">
                        Alta Equipo
                    </div>
                <?php }?>
                <div class="card-body">
                    <form method="get" action="<?php echo $ruta?>">
                        <fieldset>
                            <input value="<?php echo $id?>" name="id" type="hidden" class="form-control" id="id" aria-describedby="id" placeholder="id">
                            <div class="form-group">
                                <label for="nombrepais" class="form-label mt-4">Nombre del Pais</label>
                                <input value="<?php echo $nombre?>" name="nombre" type="text" class="form-control" id="nombrepais" aria-describedby="paisHelp" placeholder="Ingrese el pais">
                            </div>
                            <div class="form-group">
                                <label for="codfifa" class="form-label mt-4">Codigo FIFA</label>
                                <input value="<?php echo $codigo?>" name="codigo" type="text" class="form-control" id="codfifa" placeholder="Ingrese el codigo de la FIFA">
                            </div>
                            <div class="form-group">
                                <label for="posrank" class="form-label mt-4">Clasificacion FIFA</label>
                                <input value="<?php echo $clasificacion?>" name="clasificacion" type="number" class="form-control" id="posrank" placeholder="Ingrese posicion en el ranking">
                            </div>
                            <div class="form-group">
                                <label for="titulosg" class="form-label mt-4">Titulos Ganados</label>
                                <input value="<?php echo $titulos?>" name="titulos" type="number" class="form-control" id="titulosg" placeholder="Ingrese cantidad de titulos ganados">
                            </div>
                            <div class="form-group">
                                <label for="finalesj" class="form-label mt-4">Finales Jugadas</label>
                                <input value="<?php echo $finales?>" name="finales" type="number" class="form-control" id="finalesj" placeholder="Ingrese cantidad de finales jugadas">
                            </div>
                            <br>

                            <?php 
                            if(isset($_GET['id'])) {?>  
                                <button id="send-boton" type="submit" class="btn btn-primary" onclick="return formValidation()">Modificar</button>
                            
                            <?php } else {?>
                                <button id="send-boton" type="submit" class="btn btn-primary" onclick="return formValidation()">Enviar</button>
                            <?php }?>
                        </fieldset>
                        <br>
                        <div id="cont-errors" class="alert alert-dismissible alert-danger">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>Oh snap!: </strong><span id="errors" class="errors"></span>
                        </div>

                        <?php
                        if(isset($_GET['mensaje'])) {

                            $mensaje = $_GET['mensaje'];

                            echo " <div id='cont-errors' class='alert alert-dismissible alert-danger'>
                            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                            <strong>Oh snap!: </strong><span id='errors' class='errors'> $mensaje </span>
                        </div>";
                        }
                        ?>
                    </form>
                </div>
                <div class="card-footer text-muted"><br></div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#cont-errors").hide();
</script>
</body>
</html>