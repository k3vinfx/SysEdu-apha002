<?php
require_once 'model/clientes.php';

class ClientesController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new clientes();
    }

    //Llamado plantilla principal
    public function Index(){
       require_once 'view/principal/header.php';
        require_once 'view/clientes/clientes.php';
       require_once 'view/footerx.php';
    }
   
  
    // Si no se encontró un usuario, redirigir a la página de inicio de sesión fallido
   
    }


?>