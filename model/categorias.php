<?php

class categorias
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
  public function MenuLista()
  {
    try
    {

      $result = array();
      $stm = $this->pdo->prepare("SELECT a.Recomendacion_id as ID, a.Recomendacion_titulo AS TITULO,
       b.Categoria_nombre AS categorias, a.Recomendacion_costo  AS COSTO ,
       a.Recomendacion_estado AS ESTADO, a.Recomendacion_descripcion as DESCRIPCION, 
       a.Recomendacion_ruta_carga AS CARGA,
       a.Recomendacion_fecha_creacion AS FECHA
      FROM recomendacion a
      INNER JOIN categoria b ON a.Recomendacion_categoria = b.Categoria_id;");
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e)
    {
      die($e->getMessage());
    }
  }

  public function MenuTipo()
  {
    try
    {
      $result = array();
      $stm = $this->pdo->prepare("SELECT * FROM categoria");
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e)
    {
      die($e->getMessage());
    }
  }

  public function Listar()
  {
    try
    {
      $result = array();

      $stm = $this->pdo->prepare("SELECT 
                                    Categoria_id,
                                    Categoria_nombre,
                                    Categoria_descripcion,
                                    Categoria_estado,
                                    CASE 
                                      WHEN Categoria_estado = 1 THEN 'ACTIVO'
                                      WHEN Categoria_estado <> 1 THEN 'INACTIVO'
                                    END estado
                                  FROM categoria
                                  WHERE Categoria_estado <> 0
                                  ORDER BY Categoria_id DESC");
      $stm->execute();

      return $stm->fetchAll(PDO::FETCH_OBJ);
    }
    catch(Exception $e)
    {
      die($e->getMessage());
    }
  }
  public function ListarEntrenamiento()
  {
    try
    {
      $result = array();

      $stm = $this->pdo->prepare("SELECT * FROM pesos");
      $stm->execute();

      return $stm->fetchAll(PDO::FETCH_OBJ);
    }
    catch(Exception $e)
    {
      die($e->getMessage());
    }
  }
  

  public function Obtener($id)
  {
    try
    {
      $stm = $this->pdo->prepare("SELECT 
                                    Categoria_id,
                                    Categoria_nombre,
                                    Categoria_descripcion,
                                    Categoria_estado,
                                    CASE 
                                      WHEN Categoria_estado = 1 THEN 'ACTIVO'
                                      WHEN Categoria_estado <> 1 THEN 'INACTIVO'
                                    END estado
                                  FROM categoria
                                  WHERE Categoria_id = ?");
      $stm->execute(array($id));
      return $stm->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e)
    {
      die($e->getMessage());
    }
  }

  public function Eliminar($id)
  { 
    // var_dump($id);die;
    try
    {
      $stm = $this->pdo
        ->prepare("UPDATE categoria SET Categoria_estado = 0 WHERE Categoria_id= ?");

      $stm->execute(array($id));
      return true;
    } catch (Exception $e)
    {
      return false;
      // die($e->getMessage());
    }
  }

  public function Actualizar($id, $data)
  { 
    try
    {
      $sql = "UPDATE categoria SET
      Categoria_nombre        = ?,
      Categoria_descripcion   = ?, 
      Categoria_estado        = ?
      WHERE Categoria_id      = ?";

      $this->pdo->prepare($sql)
           ->execute(
            array( 
            $data['nombre'],
            $data['descripcion'],
            $data['estado'],
            $id
          )
        );
      return true;
    } catch (Exception $e)
    {
      return false;
      // die($e->getMessage());
    }
  }

  public function Registrar($data)
  {
    try
    {
          
          $sql = "INSERT INTO categoria 
          (Categoria_nombre,
          Categoria_descripcion,
          Categoria_estado)
              VALUES (?, ?, ?)";

      $this->pdo->prepare($sql)
           ->execute(
          array(
            $data['nombre'],
            $data['descripcion'],
            $data['estado']
          )

          
        );
      return true;
    } catch (Exception $e)
    {
      return false;
      // die($e->getMessage());
    }
  }
}
