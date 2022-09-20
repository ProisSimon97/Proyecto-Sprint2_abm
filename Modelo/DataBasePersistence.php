<?php

class DataBasePersistence {

  public $servername = "localhost";
  public $username = "root";
  public $password = "root";
  public $dbname = "worldcupdb";
  public $conn;
  

  public function conectar() {
   
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }
   
  public function desconectar() {
    $this->conn->close();
  }
}

?>