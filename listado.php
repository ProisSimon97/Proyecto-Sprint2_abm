<?php include("Vista/vlistado.php"); ?>

<?php
  include("Modelo/EquipoPersistence.php");

  $base = new EquipoPersistence();

  $equipos = $base->recuperarEquipos();
?>


<?php if (isset($_GET['mensaje'])) {?>
<div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Equipo</strong> creado con exito!
</div>
<?php }?>

<div class="container">
    <div class="row">
        <div class="col-xs-1-12">
            <div class="card">
                <div class="card-header">
                    Listado de Equipos
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th> 
                        <th scope="col">Nombre</th>
                        <th scope="col">Codigo FIFA</th>
                        <th scope="col">Clasificacion</th>
                        <th scope="col">Titulos Ganados</th>
                        <th scope="col">Finales Jugadas</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Borrar</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        foreach($equipos as $equipo) { ?>

                            <tr class="table-secondary">
                            <th scope="row"><?php echo $equipo->id?></th>
                            <td><?php echo $equipo->nombre ?></td>
                            <td><?php echo $equipo->codigo ?></td>
                            <td><?php echo $equipo->clasificacion ?></td>
                            <td><?php echo $equipo->titulos ?></td>
                            <td><?php echo $equipo->finales ?></td>
                            <td>
                                <a href="fmodificacion.php?id=<?php echo $equipo->id;?>&nombre=<?php echo $equipo->nombre;?>&codigo=<?php echo $equipo->codigo;?>&clasificacion=<?php echo $equipo->clasificacion;?>&titulos=<?php echo $equipo->titulos;?>&finales=<?php echo $equipo->finales;?>">
                                <button type="button" class="btn btn-success"><i class="bi bi-pencil-square" style="color:white"></i>
                                </button>
                                </a>
                            </td>
                            <td >
                                <a onclick="return validation()" href="baja.php?id=<?php echo $equipo->id; ?>">
                                <button type="button" class="btn btn-danger" ><i style="color:withe" class="bi bi-x-circle"></i>
                                </button>
                                </a>
                            </td>
                            </tr>
 
                    <?php } ?>
                    </tbody>
                    </table>
                </div>
                <div class="card-footer text-muted"><br></div>
            </div>
        </div>
    </div>
</div>

<script>
    function validation() {
        return confirm("Desea eliminar a este equipo?");
    }
</script>