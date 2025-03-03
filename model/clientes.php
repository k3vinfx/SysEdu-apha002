<?php

class clientes
{

  private $pdo;

  public $id;
  public $nombre;
  public $descripcion;
  public $estado;

  public function __CONSTRUCT()
  {
    try
    {
      $this->pdo = Database::Conectar();
    }
    catch(Exception $e)
    {
      die($e->getMessage());
    }
  }
 
  public function Listado()
  {
    try
    {
      $result = array();

      $stm = $this->pdo->prepare("SELECT * FROM clientes");
      $stm->execute();

      return $stm->fetchAll(PDO::FETCH_OBJ);
    }
    catch(Exception $e)
    {
      die($e->getMessage());
    }
  }
  

  
}
