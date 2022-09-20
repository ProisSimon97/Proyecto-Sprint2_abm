<?php

include("DataBasePersistence.php");
include("Equipo.php");

class EquipoPersistence extends DataBasePersistence {

    public function guardarEquipo() {
        $this->conectar();
        $nombre = $_GET["nombre"];
        $codigo = $_GET["codigo"];
        $rank = $_GET["clasificacion"];
        $titulos = $_GET["titulos"];
        $finales = $_GET["finales"];

        $sql = "INSERT INTO equipos (nombre, codigo_fifa, clasificacion_fifa, titulos_ganados, finales_jugadas)
          VALUES ('$nombre', '$codigo', '$rank', '$titulos', '$finales')";

        $this->conn->query($sql);

        $this->desconectar();
    }

    public function recuperarEquipos() {
      $this->conectar();

      $sql = "SELECT * FROM equipos";
      $result = $this->conn->query($sql);
      $lista = array();

      if ($result->num_rows > 0) {
            
        while ($row = $result->fetch_assoc()) {
          $equipo = new Equipo();

          $equipo->id = $row["idequipo"];
          $equipo->nombre = $row["nombre"];
          $equipo->codigo = $row["codigo_fifa"];
          $equipo->clasificacion = $row["clasificacion_fifa"];
          $equipo->titulos = $row["titulos_ganados"];
          $equipo->finales = $row["finales_jugadas"];
                
          array_push($lista, $equipo);
        }
      }
      $this->desconectar();

      return $lista;
    }


    public function borrarEquipo($id) {
      $this->conectar();

      $sql = "DELETE FROM equipos WHERE idequipo = $id";

      $this->conn->query($sql);
      $this->desconectar();
    }

    public function modificarEquipo($id) {
      $this->conectar();
      
      $nombre = $_GET["nombre"];
      $codigo = $_GET["codigo"];
      $rank = $_GET["clasificacion"];
      $titulos = $_GET["titulos"];
      $finales = $_GET["finales"];

      $sql = "UPDATE equipos SET nombre='$nombre', codigo_fifa='$codigo', clasificacion_fifa='$rank', titulos_ganados='$titulos',
        finales_jugadas='$finales' WHERE idequipo=$id";

      $this->conn->query($sql);
      $this->desconectar();
    }
}
?>