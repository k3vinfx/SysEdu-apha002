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
}
</style>

<div class="container-fluid">
<div id="snackbar"></div>
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-6">
		<h1 class="h3 mb-0 text-gray-800">Alternativa</h1>
		<a href="registro_cliente.php" class="btn btn-primary">Nuevo</a>
	</div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<div class="row">
		<div class="col-lg-12">

			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">

                    <tr>
                        <th >Código Nodo</th>
                        <th >Atracion Turistica</th>
                        <th >Categoria</th>
                        <th >Estado</th>
                        <th >Fecha</th>
                  
       
                        <th >Acciones</th>
      
                
                    </tr>
                </thead>
                <tbody>
        <?php foreach($this->model->MenuLista() as $r): ?>
        <tr>
            <td><?php echo $r->ID; ?></td>
            <td><?php echo $r->TITULO; ?></td>
            <td><?php echo $r->categorias; ?></td>
            <td>

            <?php $estado = $r->ESTADO;

            $nombre = $estado ? 'Activo' : 'Inactivo';
            $color = $estado ? 'success' : 'danger';
            ?>

            <i class="<?php echo $estado; ?> text-<?php echo $color; ?>" style="font-family: Arial;">  <?php echo $nombre; ?> </i>

            </td>
     
            <td><?php echo date('d-m-Y', strtotime($r->FECHA)); ?></td>
             <td>
                <a href="?c=alternativa&a=Crud&Recomendacion_id=<?php echo $r->ID; ?>"class="btn btn-success"><i class='fas fa-edit'></i></a>
                 <label class="switch">
                          <input type="checkbox" class="estado-checkbox" data-titulo="<?php echo $r->TITULO; ?>" data-id="<?php echo $r->ID; ?>" <?php echo ($estado == 1) ? 'checked' : ''; ?>>

                    <span class="slider round"></span>
                </label>
                <a href="?c=alternativa&a=Crud_Brain&Recomendacion_id=<?php echo $r->ID; ?>&titulo=<?php echo $r->TITULO;?>&cat_id=<?php echo $r->ID_CAT;?>&cat_nombre=<?php echo $r->categorias;?>"class="btn btn-primary"><i class='fas fa-brain'></i></a>
           
                </div>
            </td>

            
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>

</div>
</div>


</div>
<!-- /.container-fluid -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

$(document).ready(function(){
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

