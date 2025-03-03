<h1 class="page-header">
    Nueva Categoria
</h1>


<script>
        $(document).ready(function () {

            viewProcesar();
            function viewProcesar() {
              $('#lb_entrada_1').show();
              $('#lb_entrada_2').show();
              $('#lb_entrada_3').hide();
              $('#lb_entrada_4').hide();
              $('#lb_entrada_5').hide();
              $('#lb_entrada_6').hide();

              $('#entrada_1').show();
              $('#entrada_2').show();
              $('#entrada_3').hide();
              $('#entrada_4').hide();
              $('#entrada_5').hide();
              $('#entrada_6').hide();
      
        
            }


            $("#num_entrada").on("change", function () {
                var valorSeleccionado = parseInt($(this).val());

                if (valorSeleccionado == 2) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    
                    $('#entrada_2').show();
                    $('#entrada_3').hide();
                    $('#entrada_4').hide();
                    $('#entrada_5').hide();
                    $('#entrada_6').hide();
                    
                    $('#lb_entrada_2').show();
                    $('#lb_entrada_3').hide();
                    $('#lb_entrada_4').hide();
                    $('#lb_entrada_5').hide();
                    $('#lb_entrada_6').hide();

                } 
      

                if (valorSeleccionado == 3) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $('#entrada_3').show();
                    $('#entrada_4').hide();
                    $('#entrada_5').hide();
                    $('#entrada_6').hide();

                    $('#lb_entrada_3').show();
                    $('#lb_entrada_4').hide();
                    $('#lb_entrada_5').hide();
                    $('#lb_entrada_6').hide();

                } 

                if (valorSeleccionado == 4) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $('#entrada_4').show();
                    $('#entrada_5').hide();
                    $('#entrada_6').hide();

                    $('#lb_entrada_4').show();
                    $('#lb_entrada_5').hide();
                    $('#lb_entrada_6').hide();
                }  

                if (valorSeleccionado == 5) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $('#entrada_5').show();
                    $('#entrada_6').hide();

                    $('#lb_entrada_5').show();
                    $('#lb_entrada_6').hide();
                } 

                if (valorSeleccionado == 6) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $('#lb_entrada_6').show();
                    $('#entrada_6').show();
                }               
            });


        });
    </script>


<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card-header bg-primary text-white">
            Nuevo Registro
            </div>
            <div class="card">
                <form id="frm-nuevo" action="?c=categorias&a=Guardar" method="post"  autocomplete="off"class="card-body p-2" enctype="multipart/form-data">
                    <?php echo isset($alert) ? $alert : ''; ?>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" placeholder="Ingrese nombre" name="nombre" id="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="contacto">Descripción</label>
                        <input type="text" placeholder="Ingrese la descripción" name="descripcion" id="descripcion" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label id="lb_entrada_1">Estado</label>
                        <select class="custom-select selevt" name="estado" id="estado" required>
                            <option value="0">Seleccion </opcion>
                            <option value="1">ACTIVO</option>
                            <option value="2">INACTIVO</option>
                        </select>                 
                    </div>             
        

                    <input type="submit" value="Guardar" class="btn btn-primary">
                    <a href="?c=categorias&a=Listar" class="btn btn-danger">Regresar</a>
                </form>
            </div>
        </div>
    </div>


</div>



<script>
    $(document).ready(function(){
        $("#frm-nuevo").submit(function(){
            return $(this).validate();
        });
    })
</script>
