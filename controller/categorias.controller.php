<?php
require_once 'model/categorias.php';

class CategoriasController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new categorias();
    }

    //Llamado plantilla alternativa
    public function Listar(){
       require_once 'view/alternativa/header.php';
       require_once 'view/categorias/listar.php';
       require_once 'view/footerx.php';
    }

    public function abrirNuevo(){
        // $pvd = new categorias();

        require_once 'view/alternativa/header.php';
        require_once 'view/categorias/nuevo.php';
        require_once 'view/footerx.php';
    }


    public function abrirEditar(){
        // $pvd = new categorias();
        // var_dump($_GET);die;
        if(isset($_GET['Categoria_id'])){
            $pvd = $this->model->Obtener(trim($_GET['Categoria_id']));
            $cat = [
                [
                    'id'        => 0,
                    'nombre'    => 'Seleccione'
                ],
                [
                    'id'        => 1,
                    'nombre'    => 'Activo'
                ],
                [
                    'id'        => 2,
                    'nombre'    => 'Inactivo'
                ],
            ];
        }
        require_once 'view/alternativa/header.php';      
        require_once 'view/categorias/editar.php';
        require_once 'view/footerx.php';
    }


    public function Entrenar(){
        $pvd = new categorias();

        require_once 'view/alternativa/header.php';
        require_once 'view/alternativa/entrenar.php';
        require_once 'view/footerx.php';
    }

    public function Crud(){
        $pvd = new categorias();

        if(isset($_REQUEST['Recomendacion_id'])){
            $pvd = $this->model->ObtenerX($_REQUEST['Recomendacion_id']);
        }
        require_once 'view/alternativa/header.php';      
        require_once 'view/alternativa/editar.php';
        require_once 'view/footerx.php';
    }
    public function Crud_Aux(){
        $pvd = new categorias();

        if(isset($_REQUEST['Neurona_Id'])){
            $pvd = $this->model->Obtener($_REQUEST['Neurona_Id']);
        }
        require_once 'view/alternativa/header.php';      
        require_once 'view/alternativa/alternativa-editar-entrenamiento.php';
        require_once 'view/footerx.php';
    }

    public function NuevoIN(){
        $pvd = new categorias();
        $alert = '<div class="alert alert-primary" role="alert">
                         Registrado
                    </div>';
        require_once 'view/alternativa/header.php';
        require_once 'view/alternativa/nuevo.php';
        require_once 'view/footerx.php';
    }

    public function Guardar(){
        // var_dump($_POST);die;
        //Captura de los datos del formulario (vista).
        $data = [
            'nombre'        => trim($_POST['nombre']),
            'descripcion'   => trim($_POST['descripcion']),
            'estado'        => trim($_POST['estado'])
        ];

        //Registro al modelo categorias.
        $respuesta = $this->model->Registrar($data);
        
        if($respuesta){
            header('Location: index.php?c=categorias&a=Listar'); // redirecciona a la pagina de listar
        }else{
            // mensaje de error 

        }
               
    }


    public function Editar(){
        $id = $_POST['id_categoria'];
        $data = [
            'nombre'        => trim($_POST['nombre']),
            'descripcion'   => trim($_POST['descripcion']),
            'estado'        => trim($_POST['estado'])
        ];

        $respuesta = $this->model->Actualizar($id, $data);

        if($respuesta){
            header('Location: index.php?c=categorias&a=Listar'); // redirecciona a la pagina de listar
        }else{
            // mensaje de error 

        }
    }

    public function Eliminar(){
        $respuesta = $this->model->Eliminar($_GET['idProducto']);
        if($respuesta){
            header('Location: index.php?c=categorias&a=Listar');
            $alert = '<div class="alert alert-danger" role="alert">
                             Eliminado
                        </div>';
        }else{
            // mensaje de error

        }
        
    }
}
