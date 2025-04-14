<!-- Begin Page Content -->


<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-6">
		<h1 class="h3 mb-0 text-gray-800">Tareas</h1>
	
	</div>
    
	<div class="row">
		<div class="col-lg-12">

			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">

                    <tr>
                        <th >Libro</th>
                        <th >Unidad</th>
                        <th >Tarea</th>
                        <th >Fecha Entrega</th>
                        <th >Entregado</th>
                        <th >Acciones</th>  
                
                    </tr>
                </thead>
                <tbody>

    <?php foreach($this->model->ListadoTarea() as $r): ?>
        <tr>
            <td><?php echo $r->Libro ; ?></td>
            <td><?php echo $r->Unidad; ?></td>
            <td><?php echo $r->Tarea; ?></td>
            <td><?php echo $r->FechaEntrega; ?></td>
            <td><?php echo $r->estado_entrega; ?></td>
                 
       
       
          
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>

</div>
</div>


</div>


<!-- Modal para Entregar Tarea -->
<div class="modal fade" id="modalEntregarTarea" tabindex="-1" role="dialog" aria-labelledby="modalEntregarTareaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEntregarTareaLabel">Entregar Tarea</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frmEntregarTarea" action="guardar_entrega.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="idTarea" id="idTarea">
                    
                    <div class="form-group">
                        <label for="fechaEntregada">Fecha de Entrega</label>
                        <input type="datetime-local" class="form-control" id="fechaEntregada" name="fechaEntregada" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="rutaSubidu">Archivo</label>
                        <input type="file" class="form-control-file" id="rutaSubidu" name="rutaSubidu" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="descripcionTare">Descripción</label>
                        <textarea class="form-control" id="descripcionTare" name="descripcionTare" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Entrega</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


    <script>

$(document).ready(function(){
    // Validación del formulario
    $("#frm-nueva-neurona").submit(function(){
        return $(this).validate();
    });
    
    // Manejar el clic en el botón de entregar tarea
    $(".entregar-tarea").click(function(){
        var idTarea = $(this).data('idtarea');
        $("#idTarea").val(idTarea);
        
        // Establecer fecha y hora actual como predeterminada
        var now = new Date();
        now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
        document.getElementById('fechaEntregada').value = now.toISOString().slice(0, 16);
    });
    
    // Validación del formulario de entrega
    $("#frmEntregarTarea").validate({
        rules: {
            fechaEntregada: "required",
            rutaSubidu: "required",
            descripcionTare: "required"
        },
        messages: {
            fechaEntregada: "Por favor ingrese la fecha de entrega",
            rutaSubidu: "Por favor seleccione un archivo",
            descripcionTare: "Por favor ingrese una descripción"
        }
    });
});
</script>

