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
<!-- /.container-fluid -->


    <script>
    $(document).ready(function(){
        $("#frm-nueva-neurona").submit(function(){
            return $(this).validate();
        });
    })
</script>

