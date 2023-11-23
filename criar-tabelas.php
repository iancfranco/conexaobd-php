<?php
include_once "conexao.php";
class BancoDados{
  public static function criarTabela(){
    try{
      $conectarDB = new Connection();
      $conectar = $conectarDB->connect();

      $mysql = "CREATE TABLE IF NOT EXISTS usuarios (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        senha VARCHAR(30) NOT NULL
      )";
      $conectar->query($mysql);
      return "Tabela criada."
      $conectarDB->disconnect();
    } 
    catch (Exception $e){
      return "Erro: " . $e->getMessage();
      $conectarDB->disconnect();
    }
  }
}
