<?php

class tareas
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

      $stm = $this->pdo->prepare("SELECT * FROM tarea");
      $stm->execute();

      return $stm->fetchAll(PDO::FETCH_OBJ);
    }
    catch(Exception $e)
    {
      die($e->getMessage());
    }
  }

  public function ListadoTarea()
  {
    try
    {
      $result = array();

      $stm = $this->pdo->prepare("SELECT 
        us.idUsuario as idUsuario, 
        lb.Titulo as Libro, 
        un.nombreUnidad as Unidad, 
        ta.Nombre as Tarea,
        ta.FechaEntrega,
        CASE 
            WHEN (SELECT d.fechaEntregada 
                  FROM detalleTarea d 
                  WHERE d.fkUsuario = us.idUsuario AND d.fkTarea = ta.idTarea
                  LIMIT 1) IS NULL 
            THEN 'Aún no entregada'
            ELSE CONCAT('Entregado - ', DATE_FORMAT(
                  (SELECT d.fechaEntregada 
                  FROM detalleTarea d 
                  WHERE d.fkUsuario = us.idUsuario AND d.fkTarea = ta.idTarea
                  LIMIT 1), '%d/%m/%Y %H:%i'))
        END as estado_entrega
    FROM 
        usuario us 
    INNER JOIN 
        detalleUsuario du ON du.fkUsuario = us.idUsuario 
    INNER JOIN 
        libro lb ON lb.idLibro = du.fkLibro
    INNER JOIN 
        unidad un ON un.fkLibro = lb.idLibro
    INNER JOIN 
        tarea ta ON ta.fkUnidad = un.idUnidad
    WHERE 
        us.idUsuario = '1';");
      $stm->execute();

      return $stm->fetchAll(PDO::FETCH_OBJ);
    }
    catch(Exception $e)
    {
      die($e->getMessage());
    }
  }



  

  
}
