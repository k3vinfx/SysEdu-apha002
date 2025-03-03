<?php
require_once 'model/login.php';

class LoginController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new login();
    }

    //Llamado plantilla principal
    public function Index(){
       //require_once 'view/header.php';
        require_once 'view/inicio/login.php';
       require_once 'view/footerx.php';
    }
    public function LoginError(){
        $login = new login();
        require_once 'view/inicio/login.php';
        require_once 'view/footerx.php';

      //  $alert = '<div class="alert alert-danger" role="alert">
       // Ingrese su usuario y su clave
       // </div>';
    
        ?>
        <script>
            alert("Error de CorreoElectronico o Contraseña.");
        </script><?php 
    }   
    public function Login(){
       // Obtener los datos del formulario (correo electrónico y contraseña)
   // Crear una instancia de la clase "login" (si aún no está creada)

    $login = new login();


    if(isset($_REQUEST['CorreoElectronico'])){
    // Llamar a la función "Login()" del modelo "login" con los datos proporcionados
    $login = $this->model->Login($_REQUEST['CorreoElectronico'],$_REQUEST['Contrasena']);
    
    if ($_SESSION["logged_in"]) {
        // Si la sesión está en "true", se ha iniciado sesión correctamente
        // Realizar el procedimiento deseado aquí, por ejemplo:
        // Guardar el usuario en una variable de sesió
        // Redirigir a la página de productos o al procedimiento deseado
        header('Location: index.php?c=principal');
    } else {
        header('Location: index.php?c=login&a=LoginError');
      //  header('Location: index.php?c=inicio&a=LoginError');

        

    // Si no se encontró un usuario, redirigir a la página de inicio de sesión fallido
   
    }

    }
 
       
    }

    public function Guardar(){
        $login = new login();

        $login->CorreoElectronico = $_REQUEST['CorreoElectronico'];


        $this->model->Registrar($prod);

        header('Location: index.php?c=producto');
    }

}
?>