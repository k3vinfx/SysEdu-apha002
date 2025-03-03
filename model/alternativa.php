<?php

class alternativa
{

	private $pdo;

    public $idProducto;
    public $NeuronaNombre;
    public $NeuronaPesosIdFk;
    public $NeuronaEntrada_1;
	public $NeuronaEntrada_2;
    public $NeuronaEntrada_3;
	public $NeuronaEntrada_4;
	public $NeuronaEntrada_5;
	public $NeuronaEntrada_6;
	public $NeuronaSalida_1;
	public $NeuronaSalida_2;
	public $NeuronaEstado;
	

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
			 a.Recomendacion_categoria AS ID_CAT ,
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

			$stm = $this->pdo->prepare("SELECT * FROM recomendacion");
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
	public function ListarEntrenamientoCriterio_1()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT 
			cri.Criterio_id, 
			cri.Criterio_nombre, 
			cri.Criterio_categoria, 
			cri.Criterio_tipificador,
			(
				SELECT 
					SUM(1)
				FROM 
					mvc_php.criterio_rnn crt1 
				INNER JOIN 
					mvc_php.neurona nue ON crt1.Criterio_tipificador = nue.Neurona_Entrada_2_FK
				WHERE 
					crt1.Criterio_categoria = 'Personas' 
					AND crt1.Criterio_tipificador = cri.Criterio_tipificador
			) AS Contador,
			(
				SELECT 
					nue.Neurona_Id
				FROM 
					mvc_php.neurona nue
				INNER JOIN 
					mvc_php.criterio_rnn crt2 ON crt2.Criterio_tipificador = nue.Neurona_Entrada_2_FK
				WHERE 
					crt2.Criterio_categoria = 'Personas' 
					AND crt2.Criterio_tipificador = cri.Criterio_tipificador
				LIMIT 1  -- Asegura que solo devuelve un resultado, ajusta según la lógica de negocio
			) AS Id_tipo
		FROM 
			mvc_php.criterio_rnn cri
		WHERE 
			cri.Criterio_categoria = 'Personas'");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function ListarEntrenamientoCriterio_2()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT 
			cri.Criterio_id, 
			cri.Criterio_nombre, 
			cri.Criterio_categoria, 
			cri.Criterio_tipificador,
			(SELECT 
				SUM(1)
			 FROM 
				mvc_php.criterio_rnn crt 
			 INNER JOIN 
				mvc_php.neurona nue ON crt.Criterio_tipificador = nue.Neurona_Entrada_3_FK
			 WHERE 
				crt.Criterio_categoria = 'Sexo' 
				AND crt.Criterio_tipificador = cri.Criterio_tipificador
			) AS Contador
		FROM 
			mvc_php.criterio_rnn cri
		   where         cri.Criterio_categoria = 'Sexo'");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function ListarEntrenamientoCriterio_3()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT 
			cri.Criterio_id, 
			cri.Criterio_nombre, 
			cri.Criterio_categoria, 
			cri.Criterio_tipificador,
			(SELECT 
				SUM(1)
			 FROM 
				mvc_php.criterio_rnn crt 
			 INNER JOIN 
				mvc_php.neurona nue ON crt.Criterio_tipificador = nue.Neurona_Entrada_4_FK
			 WHERE 
				crt.Criterio_categoria = 'Horario' 
				AND crt.Criterio_tipificador = cri.Criterio_tipificador
			) AS Contador
		FROM 
			mvc_php.criterio_rnn cri
		   where         cri.Criterio_categoria = 'Horario'");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function ListarEntrenamientoCriterio_4()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT 
			cri.Criterio_id, 
			cri.Criterio_nombre, 
			cri.Criterio_categoria, 
			cri.Criterio_tipificador,
			(SELECT 
				SUM(1)
			 FROM 
				mvc_php.criterio_rnn crt 
			 INNER JOIN 
				mvc_php.neurona nue ON crt.Criterio_tipificador = nue.Neurona_Entrada_5_FK
			 WHERE 
				crt.Criterio_categoria = 'Edades' 
				AND crt.Criterio_tipificador = cri.Criterio_tipificador
			) AS Contador
		FROM 
			mvc_php.criterio_rnn cri
		   where         cri.Criterio_categoria = 'Edades'");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function ListarEntrenamientoCriterio_5()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT 
			cri.Criterio_id, 
			cri.Criterio_nombre, 
			cri.Criterio_categoria, 
			cri.Criterio_tipificador,
			(SELECT 
				SUM(1)
			 FROM 
				mvc_php.criterio_rnn crt 
			 INNER JOIN 
				mvc_php.neurona nue ON crt.Criterio_tipificador = nue.Neurona_Entrada_6_FK
			 WHERE 
				crt.Criterio_categoria = 'Costo' 
				AND crt.Criterio_tipificador = cri.Criterio_tipificador
			) AS Contador
		FROM 
			mvc_php.criterio_rnn cri
		   where         cri.Criterio_categoria = 'Costo'");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function ObtenerX($idX)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT a.Recomendacion_id as ID,
			 a.Recomendacion_titulo AS TITULO, b.Categoria_id AS IDCAT, 
			 b.Categoria_nombre AS categorias,
			 a.Recomendacion_estado AS ESTADO, a.Recomendacion_fecha_creacion AS FECHA,
			 a.Recomendacion_ubicacion_tour AS ubicacion,
			  a.Recomendacion_costo  AS COSTO ,
			 a.Recomendacion_descripcion as descr
			 FROM recomendacion a INNER JOIN categoria b ON a.Recomendacion_categoria = b.Categoria_id 
			 where a.Recomendacion_id = ?");
			$stm->execute(array($idX));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idProducto)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT Neurona_Id,Neurona_Nombre,Neurona_Entrada_1_FK,Neurona_Entrada_2_FK,Neurona_Entrada_3_FK,
			Neurona_Entrada_4_FK,Neurona_Entrada_5_FK,Neurona_Entrada_6_FK,
			(Neurona_Entrada_1_FK+Neurona_Entrada_2_FK+Neurona_Entrada_3_FK+Neurona_Entrada_4_FK+Neurona_Entrada_5_FK+Neurona_Entrada_6_FK) AS TOTAL, 
			(Select b.Entrada_Nombre FROM neurona a inner join entrada b ON a.Neurona_Entrada_1_FK=b.Entrada_Id) AS ENTRADA1, 
			(Select b.Entrada_Nombre FROM neurona a inner join entrada b ON a.Neurona_Entrada_2_FK=b.Entrada_Id) AS ENTRADA2,
			(Select b.Entrada_Nombre FROM neurona a inner join entrada b ON a.Neurona_Entrada_3_FK=b.Entrada_Id) AS ENTRADA3, 
			(Select b.Entrada_Nombre FROM neurona a inner join entrada b ON a.Neurona_Entrada_4_FK=b.Entrada_Id) AS ENTRADA4,
		    (Select b.Entrada_Nombre FROM neurona a inner join entrada b ON a.Neurona_Entrada_5_FK=b.Entrada_Id) AS ENTRADA5,
			(Select b.Entrada_Nombre FROM neurona a inner join entrada b ON a.Neurona_Entrada_6_FK=b.Entrada_Id) AS ENTRADA6,
            (Select b.Peso_01 FROM neurona a inner join pesos b ON a.Neurona_Entrada_1_FK=b.Pesos_Fk_Neurona) AS ENTRENAMIENTO1,
            (Select b.Peso_02 FROM neurona a inner join pesos b ON a.Neurona_Entrada_2_FK=b.Pesos_Fk_Neurona) AS ENTRENAMIENTO2,
            (Select b.Peso_03 FROM neurona a inner join pesos b ON a.Neurona_Entrada_3_FK=b.Pesos_Fk_Neurona) AS ENTRENAMIENTO3,
            (Select b.Peso_04 FROM neurona a inner join pesos b ON a.Neurona_Entrada_3_FK=b.Pesos_Fk_Neurona) AS ENTRENAMIENTO4,
            (Select b.Peso_05 FROM neurona a inner join pesos b ON a.Neurona_Entrada_3_FK=b.Pesos_Fk_Neurona) AS ENTRENAMIENTO5,
            (Select b.Peso_06 FROM neurona a inner join pesos b ON a.Neurona_Entrada_3_FK=b.Pesos_Fk_Neurona) AS ENTRENAMIENTO6,
            Neurona_Estado 	
            FROM neurona a where Neurona_Id=?");
			$stm->execute(array($idProducto));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Desactivar($data)
	{
		try
		{
			$stm = $this->pdo
        ->prepare("UPDATE recomendacion SET Recomendacion_estado = 0 WHERE recomendacion.Recomendacion_id = ?");

			$stm->execute(array($data));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Activar($data)
	{
		try
		{
			$stm = $this->pdo
        ->prepare("UPDATE recomendacion SET Recomendacion_estado = 1 WHERE recomendacion.Recomendacion_id = ?");

			$stm->execute(array($data));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}



	public function Eliminar($data)
	{
		try
		{
			$stm = $this->pdo
        ->prepare("UPDATE recomendacion SET Recomendacion_estado = 0 WHERE recomendacion.Recomendacion_id = ?");

			$stm->execute(array($data));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE recomendacion SET
			Recomendacion_titulo           = ?,
			Recomendacion_ubicacion_tour   = ?,	
			Recomendacion_categoria        = ?,
			Recomendacion_costo            = ?,
			Recomendacion_descripcion      = ?,	
			Recomendacion_ruta_carga       = ?,
			Recomendacion_estado           = ?
			WHERE Recomendacion_id          = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array( 
                   		$data->valor_1,
						$data->valor_2,
						$data->valor_3,
						$data->valor_4,
						$data->valor_5,
						$data->valor_6,
						$data->valor_7,
						$data->valor_id
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Registrar_img(alternativa $data)
	{
		try
		{
			$entrada_2 = "0"; // Asigna null si no se proporciona un valor
			
		    	$ultimoIdInsertado = $_SESSION['ultimoIdInsertado'];
			 	$sql = "INSERT INTO recomendacion_img 
				(Recomendacion_FK,
				Recomendacion_img1,
				Recomendacion_img2,
				Recomendacion_img3,
				Recomendacion_img4,
				Recomendacion_img5
 				)
		        VALUES (?, ?, ?, ?, ?, ?)";
				$this->pdo->prepare($sql)
				->execute([
					$ultimoIdInsertado,
					$data->archivo1,
					$data->archivo2,
					$data->archivo3,
					$data->archivo4,
					$data->archivo5

				]);			
			
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(alternativa $data)
	{
		try
		{
			if (isset($_POST['costo'])) {
				$entrada_2 = $_POST['costo'];
			} else {
				$entrada_2 = "0"; // Asigna null si no se proporciona un valor
			}
			    $entrada_3 = "current_timestamp()";
				$sql = "INSERT INTO recomendacion 
				(Recomendacion_titulo,
				Recomendacion_ubicacion_tour,
				Recomendacion_categoria,
				Recomendacion_costo,
				Recomendacion_descripcion,
				Recomendacion_latlong,
 				Recomendacion_estado)
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->titulo,
                    $data->ubicacion,
                    $data->categoria,
					$entrada_2,
					$data->descripcion,
					$data->latlong,
					$data->estado

                )
			);
			$_SESSION['ultimoIdInsertado'] = $this->pdo->lastInsertId();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
