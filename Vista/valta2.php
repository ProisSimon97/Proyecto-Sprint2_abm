<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Equipo</title>
    <link rel="stylesheet" href="css\bootstrap.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js\formValidation.js"></script>
</head>
<body>
<?php include("Vista/nav.php"); ?>
 <br><br>

<?php if(isset($_GET['id'])) { ?> 
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12">
                <div class="card">
                    <div class="card-header">
                        Modificar Equipo
                    </div>
                    <div class="card-body">
                        <form method="get" action="modificacion.php">
                            <fieldset>
                                <input value="<?php echo $_GET['id']?>" name="id" type="hidden" class="form-control" id="id" aria-describedby="id" placeholder="id">
                                <div class="form-group">
                                    <label for="nombrepais" class="form-label mt-4">Nombre del Pais</label>
                                    <input value="<?php echo $_GET['nombre']?>" name="nombre" type="text" class="form-control" id="nombrepais" aria-describedby="paisHelp" placeholder="Ingrese el pais">
                                </div>
                                <div class="form-group">
                                    <label for="codfifa" class="form-label mt-4">Codigo FIFA</label>
                                    <input value="<?php echo $_GET['codigo']?>" name="codigo" type="text" class="form-control" id="codfifa" placeholder="Ingrese el codigo de la FIFA">
                                </div>
                                <div class="form-group">
                                    <label for="posrank" class="form-label mt-4">Clasificacion FIFA</label>
                                    <input value="<?php echo $_GET['clasificacion']?>" name="clasificacion" type="number" class="form-control" id="posrank" placeholder="Ingrese posicion en el ranking">
                                </div>
                                <div class="form-group">
                                    <label for="titulosg" class="form-label mt-4">Titulos ganados</label>
                                    <input value="<?php echo $_GET['titulos']?>" name="titulos" type="number" class="form-control" id="titulosg" placeholder="Ingrese cantidad de titulos ganados">
                                </div>
                                <div class="form-group">
                                    <label for="finalesj" class="form-label mt-4">Finales Jugadas</label>
                                    <input value="<?php echo $_GET['finales']?>" name="finales" type="number" class="form-control" id="finalesj" placeholder="Ingrese cantidad de finales jugadas">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary" onclick="">Modificar</button>
                            </fieldset>
                            <br>
                            <div class="alert alert-dismissible alert-danger">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <span id="errors" class="errors"></span><br><br>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted"><br></div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12">
                <div class="card">
                    <div class="card-header">
                        Alta Equipo
                    </div>
                    <div class="card-body">
                        <form method="get" action="alta.php">
                            <fieldset>
                                <div class="form-group">
                                    <label for="nombrepais" class="form-label mt-4">Nombre del Pais</label>
                                    <input name="nombre" type="text" class="form-control" id="nombrepais2" aria-describedby="paisHelp" placeholder="Ingrese el pais">
                                </div>
                                <div class="form-group">
                                    <label for="codfifa" class="form-label mt-4">Codigo FIFA</label>
                                    <input name="codigo" type="text" class="form-control" id="codfifa2" placeholder="Ingrese el codigo de la FIFA">
                                </div>
                                <div class="form-group">
                                    <label for="posrank" class="form-label mt-4">Clasificacion FIFA</label>
                                    <input name="clasificacion" type="number" class="form-control" id="posrank2" placeholder="Ingrese posicion en el ranking">
                                </div>
                                <div class="form-group">
                                    <label for="titulosg" class="form-label mt-4">Titulos ganados</label>
                                    <input name="titulos" type="number" class="form-control" id="titulosg2" placeholder="Ingrese cantidad de titulos ganados">
                                </div>
                                <div class="form-group">
                                    <label for="finalesj" class="form-label mt-4">Finales Jugadas</label>
                                    <input name="finales" type="number" class="form-control" id="finalesj2" placeholder="Ingrese cantidad de finales jugadas">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary" onclick="return formValidation()">Enviar</button>
                            </fieldset>
                            <br>
                            <div id="cont-errors" class="alert alert-dismissible alert-danger">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>Oh snap!: </strong><span id="errors" class="errors"></span>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted"><br></div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<script>
    $("#cont-errors").hide();
</script>
</body>
</html>