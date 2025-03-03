<h3 class="page-header">Tipo de Entradas/Neuva de Entradas.</h3>

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




<ol class="breadcrumb">
  <li><a href="?c=principal">Neuorona</a></li>
  <li class="active">Nuevo Registro de Neuronas</li>
</ol>


        <form id="frm-principal-entradas" action="?c=entrada&a=Guardar" method="post" enctype="multipart/form-data" >
               
                    <div class="form-group col-md-5 mx-auto">
                    <div class="text-center">
                        <label for="inputEmail4">Nombre de la Entrada</label>
                        <input type="text" name="EntradaNombre"
                            value="<?php echo $pvd->EntradaNombre; ?>"
                            class="form-control" placeholder="Ingresa el Nombre de la Entrada">
                    </div> </div>
                                        
                <div class="text-center">
              <button class="btn btn-success">Guardar</button>
            </div>

         </form>


<script>
    $(document).ready(function(){
        $("#frm-principal-entradas").submit(function(){
            return $(this).validate();
        });
    })
</script>
