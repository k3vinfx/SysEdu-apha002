<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/libro.php';

class LibroController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new Libro();
    }

    //Llamado plantilla principal
    public function Index(){
        //require_once 'view/header.php';
        $login = new Libro();
        require_once 'view/header.php';
        require_once 'view/libro.php';
        require_once 'view/footerx.php';
    }


  
       //Llamado a la vista proveedor-nuevo
    public function LoginError(){
        $login = new Libro();

        //Llamado de las vistas.
        require_once 'view/inicio/login.php';
         require_once 'view/inicio/login.php';
       
    }
        //Registrate

     public function Registrate(){
        $login = new Libro();
             //Llamado de las vistas.
        require_once 'view/Registro/nuevo_usuario.php';
          
    }

    public function ListaUnidades()
    {
        $idLibro = $_POST['idLibro'];
        $unidades = $this->model->ListaUnidades($idLibro);

        foreach ($unidades as $unidad) {
            echo "<p>{$unidad->nombreUnidad}</p>";
        }
    }
}
