<h1 class="page-header">
    Nuevo Entrenamiento+
</h1>


<script>
        $(document).ready(function () {

            viewProcesar();
            function viewProcesar() {
              $('#lb_entrada_1').hide();
              $('#lb_entrada_2').hide();
              $('#lb_entrada_3').hide();
              $('#lb_entrada_4').hide();
              $('#lb_entrada_5').hide();
              $('#lb_entrada_6').hide();

              $('#lb_salida_1').hide();
              $('#lb_salida_2').hide();
              $('#lb_salida_3').hide();
              $('#lb_salida_4').hide();
              $('#lb_salida_5').hide();
              $('#lb_salida_6').hide();

              $('#entrada_1').hide();
              $('#entrada_2').hide();
              $('#entrada_3').hide();
              $('#entrada_4').hide();
              $('#entrada_5').hide();
              $('#entrada_6').hide();

              $('#salida_1').hide();
              $('#salida_2').hide();
              $('#salida_3').hide();
              $('#salida_4').hide();
              $('#salida_5').hide();
              $('#salida_6').hide();
              
        
            }




            $("#nom_entradas").on("change", function () {
                var valorSeleccionado = parseInt($(this).val());

                if (valorSeleccionado == 1) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $('#entrada_1').show();
                    $('#entrada_2').hide();
                    $('#entrada_3').hide();
                    $('#entrada_4').hide();
                    $('#entrada_5').hide();
                    $('#entrada_6').hide();

                    $('#lb_entrada_1').show();
                    $('#lb_entrada_2').hide();
                    $('#lb_entrada_3').hide();
                    $('#lb_entrada_4').hide();
                    $('#lb_entrada_5').hide();
                    $('#lb_entrada_6').hide();


                } 
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




            $("#num_salida").on("change", function () {
                var valorSeleccionado = parseInt($(this).val());
                <?php foreach ($this->model->Obtener() as $neurona): ?>

                if (valorSeleccionado == 1) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $('#salida_1').show();
                    $('#salida_2').hide();
                    $('#salida_3').hide();
                    $('#salida_4').hide();
                    $('#salida_5').hide();
                    $('#salida_6').hide();

                    $('#lb_salida_1').show();
                    $('#lb_salida_2').hide();
                    $('#lb_salida_3').hide();
                    $('#lb_salida_4').hide();
                    $('#lb_salida_5').hide();
                    $('#lb_salida_6').hide();


                } 
                if (valorSeleccionado == 2) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $('#salida_2').show();
                    $('#salida_3').hide();
                    $('#salida_4').hide();
                    $('#salida_5').hide();
                    $('#salida_6').hide();

                    $('#lb_salida_2').show();
                    $('#lb_salida_3').hide();
                    $('#lb_salida_4').hide();
                    $('#lb_salida_5').hide();
                    $('#lb_salida_6').hide();

                } 

                if (valorSeleccionado == 3) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $('#salida_3').show();
                    $('#salida_4').hide();
                    $('#salida_5').hide();
                    $('#salida_6').hide();

                    $('#lb_salida_3').show();
                    $('#lb_salida_4').hide();
                    $('#lb_salida_5').hide();
                    $('#lb_salida_6').hide();

                } 

                if (valorSeleccionado == 4) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $('#salida_4').show();
                    $('#salida_5').hide();
                    $('#salida_6').hide();

                    $('#lb_salida_4').show();
                    $('#lb_salida_5').hide();
                    $('#lb_salida_6').hide();
                }  

                if (valorSeleccionado == 5) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $('#salida_5').show();
                    $('#salida_6').hide();

                    $('#lb_salida_5').show();
                    $('#lb_salida_6').hide();
                } 

                if (valorSeleccionado == 6) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $('#lb_salida_6').show();
                    $('#salida_6').show();
                } 

                
            });



        });
    </script>




<ol class="breadcrumb">
  <li><a href="?c=principal">Neuorona</a></li>
  <li class="active">Nuevo Registro de Neuronas</li>
</ol>

        <form id="frm-principal-neurona" action="?c=principal&a=Guardar" method="post" enctype="multipart/form-data" >

               <div class="form-row"> 
               <div class="form-group col-md-5">
                   <label for="inputEmail4">Nombre del Entranamientos</label>
                    <select class="form-control col-md-5"  name="nom_entradas">

                    <option class="form-control col-md-5" value="0">Seleccion </opcion>
                    <?php foreach ($this->model->MenuLista() as $neurona): ?>
                        <option class="form-control col-md-5" value="<?php echo $neurona->Neurona_Id; ?>">
                            <?php echo $neurona->Neurona_Nombre; ?> <!-- Reemplaza "Nombre" con el nombre real de la columna que deseas mostrar en el select -->
                        </option>
                        
                    <?php endforeach; ?>
                </select>
                </div>
                </div>
                <div class="form-row"> 
                    
                    <div class="form-group col-md-5">
                    <label for="inputEmail4">Cantidad de Entradas</label>
                    <input type="number" class="form-control"  name="num_entradas"
              
                    id="num_entrada" min="1" max="6" step="1"
                     placeholder="Ingresa un número">
                    </div>
                    <div class="form-group col-md-5">
                    <label for="inputEmail4">Cantidad de Salidas</label>
                    <input type="number" class="form-control"   name="num_salida"
                   
                    id="num_salida" min="1" max="6" step="1" 
                    placeholder="Ingresa un número">
                </div>
                </div>
  
                <div class="form-row">
                    <div class="form-group col-md-5">
                    <label id="lb_entrada_1">Nombre de 1er Entrada</label>
                    <input type="text" class="form-control" id="entrada_1" 
                    name="entrada_1" 
                    placeholder="Ingresa el nombre de la 1er Entrada"
                    value="<?php echo $pvd->NeuronaEntrada_1; ?>">
                    </div>
                    <div class="form-group col-md-5">
                    <label id="lb_salida_1">Nombre de 1er Salidas</label>
                    <input type="text" class="form-control" id="salida_1"
                    name="salida_1" 
                    placeholder="Ingresa el nombre de la 1er Salida"
                    value="<?php echo $pvd->NeuronaSalida_1; ?>">
                                        
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                    <label id="lb_entrada_2">Nombre de 2er Entrada</label>
                    <input type="text" class="form-control" id="entrada_2" 
                    name="entrada_2" 
                    placeholder="Ingresa el nombre de la 2er Entrada"
                    value="<?php echo $pvd->NeuronaEntrada_2; ?>"
                    >
                    </div>
                    <div class="form-group col-md-5">
                    <label id="lb_salida_2">Nombre de 2er Salidas</label>
                    <input type="text" class="form-control" id="salida_2" 
                    name="salida_2" 
                    placeholder="Ingresa el nombre de la 2er Salida"
                    value="<?php echo $pvd->NeuronaSalida_2; ?>"
                    >
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                    <label id="lb_entrada_3">Nombre de 3er Entrada</label>
                    <input type="text" class="form-control" id="entrada_3"
                    name="entrada_3" 
                    placeholder="Ingresa el nombre de la 3er Entrada"
                    value="<?php echo $pvd->NeuronaEntrada_3; ?>"
                    >
                    </div>
                    <div class="form-group col-md-5">
                    <label id="lb_salida_3">Nombre de 3er Salidas</label>
                    <input type="text" class="form-control" id="salida_3"
                    name="salida_3"  
                    placeholder="Ingresa el nombre de la 3er Salida"
                    value="<?php echo $pvd->NeuronaSalida_3; ?>"
                    >
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                    <label id="lb_entrada_4">Nombre de 4er Entrada</label>
                    <input type="text" class="form-control" id="entrada_4" 
                    name="entrada_4" 
                    placeholder="Ingresa el nombre de la 4er Entrada"
                    value="<?php echo $pvd->NeuronaEntrada_4; ?>"
                    >
                    </div>
                    <div class="form-group col-md-5">
                    <label id="lb_salida_4">Nombre de 4er Salidas</label>
                    <input type="text" class="form-control" id="salida_4"
                    name="salida_4"  
                    placeholder="Ingresa el nombre de la 4er Salida"
                    value="<?php echo $pvd->NeuronaSalida_4; ?>"
                    >
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                    <label id="lb_entrada_5">Nombre de 5er Entrada</label>
                    <input type="text" class="form-control" id="entrada_5" 
                    name="entrada_5" 
                    placeholder="Ingresa el nombre de la 5er Entrada"
                    value="<?php echo $pvd->NeuronaEntrada_5; ?>"
                    >
                    </div>
                    <div class="form-group col-md-5">
                    <label id="lb_salida_5">Nombre de 5er Salidas</label>
                    <input type="text" class="form-control" id="salida_5"
                    name="salida_5" 
                    placeholder="Ingresa el nombre de la 5er Salida"
                    value="<?php echo $pvd->NeuronaSalida_5; ?>"
                    >
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                    <label id="lb_entrada_6">Nombre de 6er Entrada</label>
                    <input type="text" class="form-control" id="entrada_6" 
                    name="entrada_6" 
                    placeholder="Ingresa el nombre de la 6er Entrada"
                    value="<?php echo $pvd->NeuronaEntrada_6; ?>"
                    >
                    </div>
                    <div class="form-group col-md-5">
                    <label id="lb_salida_6">Nombre de 6er Salidas</label>
                    <input type="text" class="form-control" id="salida_6" 
                    name="salida_6" 
                    placeholder="Ingresa el nombre de la 6er Salida"
                    value="<?php echo $pvd->NeuronaEntrada_6; ?>"
                    >
                </div>
                </div>
                <hr />

            <div class="text-center">
                <button class="btn btn-success">Guardar</button>
            </div>

         </form>


<script>
    $(document).ready(function(){
        $("#frm-principal-neurona").submit(function(){
            return $(this).validate();
        });
    })
</script>
