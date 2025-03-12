<?php

class libro
{

	private $pdo;

	

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
			$stm = $this->pdo->prepare("SELECT * FROM `libro` ORDER BY `Titulo` ASC");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function ListaUnidades()
	{
		try {
			// Verificar si se recibe correctamente el ID del libro
			if (!isset($_POST['idLibro'])) {
				echo json_encode(["error" => "Falta el parámetro idLibro."]);
				return;
			}
	
			$idLibro = $_POST['idLibro'];
	
			// DEBUG: Mostrar el ID recibido
			error_log("ID recibido en ListaUnidades: " . $idLibro);
	
			// Asegurar que el ID sea numérico para evitar SQL Injection
			if (!is_numeric($idLibro)) {
				echo json_encode(["error" => "El ID del libro debe ser numérico."]);
				return;
			}
	
			// Preparar la consulta SQL
			$stm = $this->pdo->prepare("SELECT direccion AS ruta, nombreUnidad AS nombre FROM unidad WHERE fkLibro = ?");
	
			// DEBUG: Comprobar si la consulta se preparó correctamente
			if (!$stm) {
				echo json_encode(["error" => "Error en la preparación de la consulta SQL."]);
				return;
			}
	
			// Ejecutar la consulta con el parámetro ID del libro
			if (!$stm->execute([$idLibro])) {
				// Capturar errores de SQL
				$errorInfo = $stm->errorInfo();
				echo json_encode(["error" => "Error en la ejecución de la consulta: " . $errorInfo[2]]);
				return;
			}
	
			// Obtener los resultados
			$resultado = $stm->fetchAll(PDO::FETCH_OBJ);
	
			// DEBUG: Ver qué devuelve la consulta
			error_log("Resultados obtenidos: " . print_r($resultado, true));
	
			if (!empty($resultado)) {
				echo json_encode($resultado);
			} else {
				echo json_encode(["error" => "No hay lecciones disponibles para este libro."]);
			}
		} catch (Exception $e) {
			echo json_encode(["error" => "Excepción en la consulta: " . $e->getMessage()]);
		}
	}
	
	
	public function ActualizarClienteEstado($id)
	{ 
	 // var_dump($id);die;
	 try
	 {
	   $stm = $this->pdo
		 ->prepare("UPDATE clientes SET Cliente_Estado = 1 WHERE Cliente_Id= ?");
 
	   $stm->execute(array($id));
	   return true;
	 } catch (Exception $e)
	 {
	   return false;
	   // die($e->getMessage());
	 }
	}


	public function ActualizarPago($data)
	{
		try
		{
			$fechaHoy = new DateTime();
			$fechaFormateada = $fechaHoy->format('d-m-Y');
			$AUX = 1;
			$sql = "UPDATE pagos_servicio SET
			Pago_Incio        = ?,
			Pago_Fin = ?,
			estado        = ?	
			
			WHERE Pago_id   = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array( 
                        $fechaFormateada,
						$data->valor_2,
						$AUX,
						$data->valor_1
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}}
		


}
