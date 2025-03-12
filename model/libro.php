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
			$idLibro = $_POST['idLibro']; // Obtener el ID del libro desde la solicitud AJAX
			$stm = $this->pdo->prepare("SELECT direccion FROM unidad WHERE fkLibro = ?");
			$stm->execute([$idLibro]);
			$resultado = $stm->fetch(PDO::FETCH_OBJ);
	
			// Verificar si hay un resultado y devolver la ruta
			if ($resultado && !empty($resultado->direccion)) {
				echo $resultado->direccion; // Enviar solo la URL del PDF
			} else {
				echo "error"; // Enviar un error si no hay PDF disponible
			}
		} catch (Exception $e) {
			die($e->getMessage());
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
