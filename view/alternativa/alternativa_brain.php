 <!-- Begin Page Content -->

<style>

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}.custom-tooltip {
    position: relative;
    display: inline-block;
}

.tooltip-content {
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    visibility: hidden;
    width: max-content;
    background-color: black;
    color: white;
    text-align: center;
    padding: 5px 10px;
    border-radius: 6px;
    z-index: 1;
    opacity: 0;
    transition: opacity 0.3s, visibility 0.3s;
}

.custom-tooltip:hover .tooltip-content {
    visibility: visible;
    opacity: 1;
}
</style>

<?php
// Obtener el ID y el título de la recomendación de la URL
if(isset($_GET['Recomendacion_id']) && isset($_GET['titulo'])) {
    $recomendacion_id = $_GET['Recomendacion_id'];
    $titulo = $_GET['titulo'];
    $cat = $_GET['cat_id'];
    $catNombre = $_GET['cat_nombre'];
    // Mostrar la información en un div

} else {
    // Manejar el caso en que los parámetros no estén presentes en la URL

}
?>

<div class="container-fluid">
<div id="snackbar"></div>
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-6">
		<h1 class="h3 mb-0 text-gray-800">Entrenamiento de la Alternativa  <?php echo $titulo; ?> <?php echo $catNombre; ?></h1>
  	<a href="?c=principal&a=Nuevo&Cate_id=<?php echo $cat; ?>&catNombre=<?php echo $catNombre; ?>&tituloRef=<?php echo $titulo; ?>" class="btn btn-primary">Nuevo</a>
	</div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<ul class="nav nav-tabs" id="myTab" role="tablist">

  <li class="nav-item" role="presentation">
    <button class="nav-link" id="personas-tab" data-bs-toggle="tab" data-bs-target="#personas-tab-pane" type="button" role="tab" aria-controls="personas-tab-pane" aria-selected="false">Cat Personas</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="sexo-tab" data-bs-toggle="tab" data-bs-target="#sexo-tab-pane" type="button" role="tab" aria-controls="sexo-tab-pane" aria-selected="false">Cat Sexo</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="horarios-tab" data-bs-toggle="tab" data-bs-target="#horarios-tab-pane" type="button" role="tab" aria-controls="horarios-tab-pane" aria-selected="false">Cat Horarios</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="edades-tab" data-bs-toggle="tab" data-bs-target="#edades-tab-pane" type="button" role="tab" aria-controls="edades-tab-pane" aria-selected="false">Cat Edades</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="costo-tab" data-bs-toggle="tab" data-bs-target="#costo-tab-pane" type="button" role="tab" aria-controls="costo-tab-pane" aria-selected="false">Cat Costo</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="general-tab-pane" role="tabpanel" aria-labelledby="general-tab" tabindex="0">
  <h1 class="h3 mb-0 text-gray-800">Personas</h1>
     <table class="table table-striped table-bordered" >
         <thead class="thead-dark">

                    <tr>
                        <th >Id</th>
                        <th >Criterio</th>
                        <th >Categoria</th>    
                        <th >Cantidad de veces entrenado</th>   
           
                    </tr>
                </thead>
                <tbody>
             <?php foreach($this->model->ListarEntrenamientoCriterio_1() as $r): ?>
          <tr>
            <td><?php echo $r->Criterio_id; ?></td>
            <td><?php echo $r->Criterio_nombre; ?></td>
            <td><?php echo $r->Criterio_categoria; ?></td> 

                <td>
            <?php
            if ($r->Contador != null && $r->Contador != '') {
                echo $r->Contador;
            } else {
                echo '<span style="color: red; font-style: italic;">Nunca fue entrenado</span>';
            }
            ?>
           </td>  

          </tr>
           <?php endforeach; ?>
         </tbody>
         </table>
   </div>
  <div class="tab-pane fade" id="personas-tab-pane" role="tabpanel" aria-labelledby="personas-tab" tabindex="0">
  <h1 class="h3 mb-0 text-gray-800">Personas</h1>
   <table class="table table-striped table-bordered">
					<thead class="thead-dark">

                    <tr>
                        <th >Id</th>
                        <th >Criterio</th>
                        <th >Categoria</th> 
                        <th >Cantidad de veces entrenado</th>
                     
                    </tr>
                </thead>
                <tbody>
             <?php foreach($this->model->ListarEntrenamientoCriterio_1() as $r): ?>
          <tr>
            <td><?php echo $r->Criterio_id; ?></td>
            <td><?php echo $r->Criterio_nombre; ?></td>
            <td><?php echo $r->Criterio_categoria; ?></td>   
            
            <td>
            <?php
            if ($r->Contador != null && $r->Contador != '') {
                echo $r->Contador;
            } else {
                echo '<span style="color: red; font-style: italic;">Nunca fue entrenado</span>';
            }
            ?>
           </td>  

           

          </tr>
           <?php endforeach; ?>
         </tbody>
     </table>
  </div>
  <div class="tab-pane fade" id="sexo-tab-pane" role="tabpanel" aria-labelledby="sexo-tab" tabindex="0">
  <h1 class="h3 mb-0 text-gray-800">Sexo</h1>
   <table class="table table-striped table-bordered">
					<thead class="thead-dark">

                    <tr>
                        <th >Id</th>
                        <th >Criterio</th>
                        <th >Categoria</th>    
                        <th >Cantidad de veces entrenado</th> 
                         
                    </tr>
                </thead>
                <tbody>
             <?php foreach($this->model->ListarEntrenamientoCriterio_2() as $r): ?>
          <tr>
            <td><?php echo $r->Criterio_id; ?></td>
            <td><?php echo $r->Criterio_nombre; ?></td>
            <td><?php echo $r->Criterio_categoria; ?></td>
            <td>
            <?php
            if ($r->Contador != null && $r->Contador != '') {
                echo $r->Contador;
            } else {
                echo '<span style="color: red; font-style: italic;">Nunca fue entrenado</span>';
            }
            ?>
           </td>   
   
        
          </tr>
           <?php endforeach; ?>
         </tbody>
     </table></div>
  <div class="tab-pane fade" id="horarios-tab-pane" role="tabpanel" aria-labelledby="horarios-tab" tabindex="0">
   <h1 class="h3 mb-0 text-gray-800">Horarios</h1>
    <table class="table table-striped table-bordered">
					<thead class="thead-dark">

                    <tr>
                        <th >Id</th>
                        <th >Criterio</th>
                        <th >Categoria</th>    
                        <th >Cantidad de veces entrenado</th>
                                   
                    </tr>
                </thead>
                <tbody>
             <?php foreach($this->model->ListarEntrenamientoCriterio_3() as $r): ?>
          <tr>
            <td><?php echo $r->Criterio_id; ?></td>
            <td><?php echo $r->Criterio_nombre; ?></td>
            <td><?php echo $r->Criterio_categoria; ?></td> 
            <td>
            <?php
            if ($r->Contador != null && $r->Contador != '') {
                echo $r->Contador;
            } else {
                echo '<span style="color: red; font-style: italic;">Nunca fue entrenado</span>';
            }
            ?>
           </td>
   
         
                
          </tr>
           <?php endforeach; ?>
         </tbody>
     </table></div>
  <div class="tab-pane fade" id="edades-tab-pane" role="tabpanel" aria-labelledby="edades-tab" tabindex="0">
  <h1 class="h3 mb-0 text-gray-800">Edades</h1>
    <table class="table table-striped table-bordered">
					<thead class="thead-dark">

                    <tr>
                        <th >Id</th>
                        <th >Criterio</th>
                        <th >Categoria</th>  
                        <th >Cantidad de veces entrenado</th>  
                            
                    </tr>
                </thead>
                <tbody>
             <?php foreach($this->model->ListarEntrenamientoCriterio_4() as $r): ?>
          <tr>
            <td><?php echo $r->Criterio_id; ?></td>
            <td><?php echo $r->Criterio_nombre; ?></td>
            <td><?php echo $r->Criterio_categoria; ?></td>
            <td>
            <?php
            if ($r->Contador != null && $r->Contador != '') {
                echo $r->Contador;
            } else {
                echo '<span style="color: red; font-style: italic;">Nunca fue entrenado</span>';
            }
            ?>
           </td>              
          </tr>
           <?php endforeach; ?>
         </tbody>
     </table>  
  </div>
  <div class="tab-pane fade" id="costo-tab-pane" role="tabpanel" aria-labelledby="costo-tab" tabindex="0">
  <h1 class="h3 mb-0 text-gray-800">Costos</h1>
    <table class="table table-striped table-bordered">
					<thead class="thead-dark">

                    <tr>
                        <th >Id</th>
                        <th >Criterio</th>
                        <th >Categoria</th>   
                        <th >Cantidad de veces entrenado</th>  
                          
                    </tr>
                </thead>
                <tbody>
             <?php foreach($this->model->ListarEntrenamientoCriterio_5() as $r): ?>
          <tr>
            <td><?php echo $r->Criterio_id; ?></td>
            <td><?php echo $r->Criterio_nombre; ?></td>
            <td><?php echo $r->Criterio_categoria; ?></td> 
            <td>
            <?php
            if ($r->Contador != null && $r->Contador != '') {
                echo $r->Contador;
            } else {
                echo '<span style="color: red; font-style: italic;">Nunca fue entrenado</span>';
            }
            ?>
           </td> 
       
          </tr>
           <?php endforeach; ?>
         </tbody>
     </table></div>

</div>
<!-- /.container-fluid -->


    <script>

$(document).ready(function(){
  $('.nav-link').on('click', function (e) {
        // Evita el comportamiento predeterminado del enlace
        e.preventDefault();
        
        // Obtiene el identificador de la pestaña a la que se hizo clic
        var targetTabId = $(this).attr('data-bs-target');
        
        // Oculta todos los paneles de pestañas
        $('.tab-pane').removeClass('show active');
        
        // Muestra solo el panel de la pestaña seleccionada
        $(targetTabId).addClass('show active');
    });

    $('.estado-checkbox').change(function(){
        var id = $(this).data('id');
        var titulo = $(this).data('titulo');
        if($(this).is(":checked")) {
        
            $.ajax({
            url: '?c=alternativa&a=Estado_Activar&Recomendacion_id=' + id,
            method: 'GET', // Método GET o POST según corresponda
            dataType: 'json', // Tipo de datos esperado de la respuesta
            success: function(response) {
            if (response.success) {
                // Redirige al usuario a la página principal de alternativa
                 Swal.fire(
                          '¡Actualizado!',
                          'Se activo la Alternativa :' + ' '+titulo ,
                           'success'
                        );
                        setTimeout(function(){
                            window.location.href = 'index.php?c=alternativa';
                        }, 5000);
              
            } else {
                alert('Error: ' + response.message);
            }
    },
    error: function(xhr, status, error) {
        console.error(xhr.responseText);
        alert('Error en la solicitud AJAX');
    }
           
        });

        } else {
              $.ajax({
            url: '?c=alternativa&a=Estado_Desactivar&Recomendacion_id=' + id,
            method: 'GET', // Método GET o POST según corresponda
            dataType: 'json', // Tipo de datos esperado de la respuesta
            success: function(response) {
        if (response.success) {
            Swal.fire(
                          '¡Actualizado!',
                          'Se desactivo la Alternativa :' + ' '+titulo ,
                          'success'
                        );

                        setTimeout(function(){
                            window.location.href = 'index.php?c=alternativa';
                        }, 5000);
            // Redirige al usuario a la página principal de alternativa

              
        } else {
            alert('Error: ' + response.message);
        }
    },
    error: function(xhr, status, error) {
        console.error(xhr.responseText);
        alert('Error en la solicitud AJAX');
    }
        
        });

        }
    });
});
</script>

