<!-- Begin Page Content -->


<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-6">
		<h1 class="h3 mb-0 text-gray-800">Categorias</h1>
		<a href="?c=categorias&a=abrirNuevo" class="btn btn-primary">Nuevo</a>
	</div>
    <?php
        // var_dump($this->model->Listar());
    ?>
	<div class="row">
		<div class="col-lg-12">

			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">

                    <tr>
                        <th >Código Nodo</th>
                        <th >Nombre</th>
                        <th >Descripción</th>
                        <th >Estado</th>              
                        <th >Acciones</th>
                    </tr>
                </thead>
                <tbody>

    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Categoria_id; ?></td>
            <td><?php echo $r->Categoria_nombre; ?></td>
            <td><?php echo $r->Categoria_descripcion; ?></td>
            <td><?php echo $r->estado; ?></td>
            <td>
                <a href="?c=categorias&a=abrirEditar&Categoria_id=<?php echo $r->Categoria_id; ?>"class="btn btn-success"><i class='fas fa-edit'></i></a>
         
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=categorias&a=Eliminar&idProducto=<?php echo $r->Categoria_id; ?>" class="btn btn-danger"><i class='fas fa-trash-alt'></i></a>
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


    <script>
    $(document).ready(function(){
        $("#frm-nueva-neurona").submit(function(){
            return $(this).validate();
        });
    })
</script>

