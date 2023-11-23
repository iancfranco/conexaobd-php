<?php
  class ConectarBD{
    private $servidor = "localhost";
    private $usuario = "root";
    private $passwd = "";
    private $banco = "bd_teste";
    public function conectar()
    {
      $connection = mysqli_connect($this->servidor, $this->usuario, $this->passwd, $this->banco);
      if (mysqli_connect_errno()){
        echo "Erro ao conectar ao banco de dados: " . mysqli_connect_error();
      }
      mysqli_set_charset($connection, "uft8");
      return $connection;
    }
  }
