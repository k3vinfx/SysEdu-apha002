<?php
require_once 'model/alternativa.php';

class AlternativaController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new alternativa();
    }

    //Llamado plantilla alternativa
    public function Index(){
       require_once 'view/header.php';
       require_once 'view/alternativa/alternativa.php';
       require_once 'view/footerx.php';
    } 
    public function NuevoEntrenamiento(){
        $pvd = new alternativa();

        require_once 'view/header.php';
        require_once 'view/alternativa/alternativa-entrenamiento.php';
        require_once 'view/footerx.php';
    }

    public function Entrenar(){
        $pvd = new alternativa();

        require_once 'view/header.php';
        require_once 'view/alternativa/entrenar.php';
        require_once 'view/footerx.php';
    }

    public function Crud(){
        $pvd = new alternativa();

        if(isset($_REQUEST['Recomendacion_id'])){
            $pvd = $this->model->ObtenerX($_REQUEST['Recomendacion_id']);
        }
        require_once 'view/header.php';      
        require_once 'view/alternativa/editar.php';
        require_once 'view/footerx.php';
    }

    public function Crud_Brain(){
        $pvd = new alternativa();

        if(isset($_REQUEST['Recomendacion_id'])){
            $pvd = $this->model->ObtenerX($_REQUEST['Recomendacion_id']);
        }
        require_once 'view/header.php';      
        require_once 'view/alternativa/alternativa_brain.php';
        require_once 'view/footerx.php';
    }

    public function Crud_Aux(){
        $pvd = new alternativa();

        if(isset($_REQUEST['Neurona_Id'])){
            $pvd = $this->model->Obtener($_REQUEST['Neurona_Id']);
        }
        require_once 'view/header.php';      
        require_once 'view/alternativa/alternativa-editar-entrenamiento.php';
        require_once 'view/footerx.php';
    }

    public function NuevoIN(){
        $pvd = new alternativa();
        $alert = '<div class="alert alert-primary" role="alert">
                         Registrado
                    </div>';
        require_once 'view/header.php';
        require_once 'view/alternativa/nuevo.php';
        require_once 'view/footerx.php';
    }

    public function Nuevo(){
        $pvd = new alternativa();
      
        require_once 'view/header.php';
        require_once 'view/alternativa/nuevo.php';
        require_once 'view/footerx.php';
    }


    public function Guardar(){

        $pvd = new alternativa();
        $pvd_img = new alternativa();
   

        //Captura de los datos del formulario (vista).
        $pvd->titulo = $_REQUEST['titulo'];
        $pvd->ubicacion = $_REQUEST['ubicacion'];
        $pvd->categoria = $_REQUEST['categoria'];
        $pvd->costo = $_REQUEST['costo'];
        $pvd->descripcion = $_REQUEST['descripcion'];
        $pvd->estado = $_REQUEST['estado'];
        $pvd->latlong = $_REQUEST['latlong'];
            //Registro al modelo proveedor.
        $this->model->Registrar($pvd);



       
        $archivo1 = $_FILES['img1'];

        // Verifica si se subió correctamente el archivo
        if ($archivo1['error'] === UPLOAD_ERR_OK) {
            // Accede a la información del archivo
            $ultimoIdInsertado = $_SESSION['ultimoIdInsertado'];
           // $nombreArchivo = $archivo1['name'];
           // $tipoArchivo = $archivo1['type'];
           // $tamanioArchivo = $archivo1['size'];
           // $rutaTemporal = $archivo1['tmp_name'];
            $nombreOriginal = pathinfo($archivo1['name'], PATHINFO_FILENAME);
            $extensionArchivo = pathinfo($archivo1['name'], PATHINFO_EXTENSION);
            $rutaTemporal = $archivo1['tmp_name'];
            // Genera un nuevo nombre de archivo único usando la fecha y hora
            $nuevoNombreArchivo = $ultimoIdInsertado . '_01_' .  time() . '.' . $extensionArchivo;
            // Haz lo que necesites con el archivo, como moverlo a una ubicación deseada
            // Por ejemplo:
            $nuevaRuta = "beta/img/" . $nuevoNombreArchivo;
            move_uploaded_file($rutaTemporal, $nuevaRuta);
            // Asigna la ruta del archivo a tu objeto o modelo
            $nuevaRuta = "img/" . $nuevoNombreArchivo;
            $pvd_img->archivo1 = $nuevaRuta;
        } else {
            // Manejar errores de carga de archivos si es necesario
            echo "Error al subir el archivo.";
        }

        $archivo2 = $_FILES['img2'];

        // Verifica si se subió correctamente el archivo
        if ($archivo2['error'] === UPLOAD_ERR_OK) {
            // Accede a la información del archivo
            $ultimoIdInsertado = $_SESSION['ultimoIdInsertado'];
            $nombreOriginal = pathinfo($archivo2['name'], PATHINFO_FILENAME);
            $extensionArchivo = pathinfo($archivo2['name'], PATHINFO_EXTENSION);
            $rutaTemporal = $archivo2['tmp_name'];
            // Genera un nuevo nombre de archivo único usando la fecha y hora
            $nuevoNombreArchivo = $ultimoIdInsertado . '_02_' .  time() . '.' . $extensionArchivo;
              // Haz lo que necesites con el archivo, como moverlo a una ubicación deseada
            // Por ejemplo:
            $nuevaRuta = "beta/img/" . $nuevoNombreArchivo;
            move_uploaded_file($rutaTemporal, $nuevaRuta);
            $nuevaRuta = "img/" . $nuevoNombreArchivo;
            // Asigna la ruta del archivo a tu objeto o modelo
            $pvd_img->archivo2 = $nuevaRuta;
        } else {
            // Manejar errores de carga de archivos si es necesario
            echo "Error al subir el archivo.";
        }

        $archivo3 = $_FILES['img3'];
        // Verifica si se subió correctamente el archivo
        if ($archivo3['error'] === UPLOAD_ERR_OK) {
            // Accede a la información del archivo
            $ultimoIdInsertado = $_SESSION['ultimoIdInsertado'];
            $nombreOriginal = pathinfo($archivo3['name'], PATHINFO_FILENAME);
            $extensionArchivo = pathinfo($archivo3['name'], PATHINFO_EXTENSION);
            $rutaTemporal = $archivo3['tmp_name'];
            // Genera un nuevo nombre de archivo único usando la fecha y hora
            $nuevoNombreArchivo = $ultimoIdInsertado . '_03_' .  time() . '.' . $extensionArchivo;
              // Haz lo que necesites con el archivo, como moverlo a una ubicación deseada
            // Por ejemplo:
            $nuevaRuta = "beta/img/" . $nuevoNombreArchivo;
            move_uploaded_file($rutaTemporal, $nuevaRuta);
            $nuevaRuta = "img/" . $nuevoNombreArchivo;
            // Asigna la ruta del archivo a tu objeto o modelo
            $pvd_img->archivo3 = $nuevaRuta;
        } else {
            // Manejar errores de carga de archivos si es necesario
            echo "Error al subir el archivo.";
        }
        $archivo4 = $_FILES['img4'];
        // Verifica si se subió correctamente el archivo
        if ($archivo4['error'] === UPLOAD_ERR_OK) {
            // Accede a la información del archivo
            $ultimoIdInsertado = $_SESSION['ultimoIdInsertado'];
            $nombreOriginal = pathinfo($archivo4['name'], PATHINFO_FILENAME);
            $extensionArchivo = pathinfo($archivo4['name'], PATHINFO_EXTENSION);
            $rutaTemporal = $archivo4['tmp_name'];
            // Genera un nuevo nombre de archivo único usando la fecha y hora
            $nuevoNombreArchivo = $ultimoIdInsertado . '_04_' .  time() . '.' . $extensionArchivo;
              // Haz lo que necesites con el archivo, como moverlo a una ubicación deseada
            // Por ejemplo:
            $nuevaRuta = "beta/img/" . $nuevoNombreArchivo;
            move_uploaded_file($rutaTemporal, $nuevaRuta);
            $nuevaRuta = "img/" . $nuevoNombreArchivo;
            // Asigna la ruta del archivo a tu objeto o modelo
            $pvd_img->archivo4 = $nuevaRuta;
        } else {
            // Manejar errores de carga de archivos si es necesario
            echo "Error al subir el archivo.";
        }

        $archivo5 = $_FILES['img5'];
        // Verifica si se subió correctamente el archivo
        if ($archivo5['error'] === UPLOAD_ERR_OK) {
            // Accede a la información del archivo
            $ultimoIdInsertado = $_SESSION['ultimoIdInsertado'];
            $nombreOriginal = pathinfo($archivo5['name'], PATHINFO_FILENAME);
            $extensionArchivo = pathinfo($archivo5['name'], PATHINFO_EXTENSION);
            $rutaTemporal = $archivo5['tmp_name'];
            // Genera un nuevo nombre de archivo único usando la fecha y hora
            $nuevoNombreArchivo = $ultimoIdInsertado . '_05_' .  time() . '.' . $extensionArchivo;
              // Haz lo que necesites con el archivo, como moverlo a una ubicación deseada
            // Por ejemplo:
            $nuevaRuta = "beta/img/" . $nuevoNombreArchivo;
            move_uploaded_file($rutaTemporal, $nuevaRuta);
            $nuevaRuta = "img/" . $nuevoNombreArchivo;
            // Asigna la ruta del archivo a tu objeto o modelo
            $pvd_img->archivo5 = $nuevaRuta;
        } else {
            // Manejar errores de carga de archivos si es necesario
            echo "Error al subir el archivo.";
        }

        $this->model->Registrar_img($pvd_img);

        header('Location: index.php?c=alternativa&a=NuevoIN');
        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
       
    }


    public function Editar(){
        $pvd = new alternativa();
        $pvd->valor_id = $_REQUEST['id_recomendacion'];
        $pvd->valor_1 = $_REQUEST['nombre'];
        $pvd->valor_2 = $_REQUEST['ubicacion'];
        $pvd->valor_3 = $_REQUEST['categoria'];
        $pvd->valor_4 = $_REQUEST['costo'];
        $pvd->valor_5 = $_REQUEST['descripcion'];
        $pvd->valor_6 = $_REQUEST['archivo'];
        $pvd->valor_7 = $_REQUEST['estado'];
     

        $this->model->Actualizar($pvd);

        header('Location: index.php?c=alternativa');
    }



    public function Estado_Activar(){
        $recomendacion_id = $_REQUEST['Recomendacion_id'];
        $this->model->Activar($recomendacion_id);
    
        // Puedes enviar cualquier dato adicional que desees en la respuesta
        $response = array(
            'success' => true,
            'message' => 'Recomendación activada exitosamente',
            'recomendacion_id' => $recomendacion_id
        );
    
        // Devuelve la respuesta como un objeto JSON
        echo json_encode($response);
       
    }
    public function Estado_Desactivar(){
  

   
      $recomendacion_id = $_REQUEST['Recomendacion_id'];
      $this->model->Desactivar($recomendacion_id);
  
      // Puedes enviar cualquier dato adicional que desees en la respuesta
      $response = array(
          'success' => true,
          'message' => 'Recomendación desactivada exitosamente',
          'recomendacion_id' => $recomendacion_id
      );
  
      // Devuelve la respuesta como un objeto JSON
      echo json_encode($response);

    }




}
