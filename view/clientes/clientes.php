<!-- Begin Page Content -->


<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-6">
		<h1 class="h3 mb-0 text-gray-800">Clientes</h1>
	
	</div>
    
	<div class="row">
		<div class="col-lg-12">

			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">

                    <tr>
                        <th >Código</th>
                        <th >Nombres</th>
                        <th >Apellidos</th>
                        <th >País</th>
                        <th >Edad</th>
                        <th >Celular</th>
                        <th >Sexo</th>
                        <th >Email</th>
                        <th >Estado</th>
            
                
                    </tr>
                </thead>
                <tbody>

    <?php foreach($this->model->Listado() as $r): ?>
        <tr>
            <td><?php echo $r->Cliente_Id ; ?></td>
            <td><?php echo $r->Cliente_Nombres; ?></td>
            <td><?php echo $r->Cliente_Apellidos; ?></td>
            <td><?php echo $r->Cliente_Pais; ?></td>
            <td><?php echo $r->Cliente_Edad; ?></td>
            <td><?php echo $r->Cliente_Celular; ?></td>
           
             <td><?php if ($r->Cliente_Sexo == 1) {
                echo "M";
            } else {
                echo "F";
            }?></td>
                        <td><?php echo $r->Cliente_Email; ?></td>
           <td><?php if ($r->Cliente_Estado == 1) {
                echo "Activo";
            } else {
                echo "Inactivo";
            }?></td>
       
          
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

