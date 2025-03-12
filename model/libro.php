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
			if (!isset($_POST['idLibro'])) {
				echo json_encode(["error" => "Falta el parámetro idLibro."]);
				return;
			}

			$idLibro = $_POST['idLibro'];
			$stm = $this->pdo->prepare("SELECT direccion AS ruta, nombre FROM unidad WHERE fkLibro = ?");
			$stm->execute([$idLibro]);
			$resultado = $stm->fetchAll(PDO::FETCH_OBJ);

			if (!empty($resultado)) {
				echo json_encode($resultado);
			} else {
				echo json_encode([]);
			}
		} catch (Exception $e) {
			echo json_encode(["error" => "Error en la consulta."]);
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
