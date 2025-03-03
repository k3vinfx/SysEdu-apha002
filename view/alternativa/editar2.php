<h1 class="page-header">
    Entrenamiento
</h3>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>$(document).ready(function() {
  // Obtener el valor por defecto del select
  var valorPorDefecto1 = $('#entrada_1').val();
  var valorPorDefecto2 = $('#entrada_2').val();
  var valorPorDefecto3 = $('#entrada_3').val();
  var valorPorDefecto4 = $('#entrada_4').val();
  var valorPorDefecto5 = $('#entrada_5').val();
  var valorPorDefecto6 = $('#entrada_6').val();

  var cont=1;

 
  if(valorPorDefecto2>0){
    cont=2;
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
  if(valorPorDefecto3>0){
    cont=3;
              $('#lb_entrada_1').show();
              $('#lb_entrada_2').show();
              $('#lb_entrada_3').show();
              $('#lb_entrada_4').hide();
              $('#lb_entrada_5').hide();
              $('#lb_entrada_6').hide();

              $('#entrada_1').show();
              $('#entrada_2').show();
              $('#entrada_3').show();
              $('#entrada_4').hide();
              $('#entrada_5').hide();
              $('#entrada_6').hide();
  }
  if(valorPorDefecto4>0){
    cont=4;
              $('#lb_entrada_1').show();
              $('#lb_entrada_2').show();
              $('#lb_entrada_3').show();
              $('#lb_entrada_4').show();
              $('#lb_entrada_5').hide();
              $('#lb_entrada_6').hide();

              $('#entrada_1').show();
              $('#entrada_2').show();
              $('#entrada_3').show();
              $('#entrada_4').show();
              $('#entrada_5').hide();
              $('#entrada_6').hide();
  }
  if(valorPorDefecto5>0){
    cont=5;
              $('#lb_entrada_1').show();
              $('#lb_entrada_2').show();
              $('#lb_entrada_3').show();
              $('#lb_entrada_4').show();
              $('#lb_entrada_5').show();
              $('#lb_entrada_6').hide();

              $('#entrada_1').show();
              $('#entrada_2').show();
              $('#entrada_3').show();
              $('#entrada_4').show();
              $('#entrada_5').show();
              $('#entrada_6').hide();
  }
  if(valorPorDefecto6>0){
    cont=6;
              $('#lb_entrada_1').show();
              $('#lb_entrada_2').show();
              $('#lb_entrada_3').show();
              $('#lb_entrada_4').show();
              $('#lb_entrada_5').show();
              $('#lb_entrada_6').show();

              $('#entrada_1').show();
              $('#entrada_2').show();
              $('#entrada_3').show();
              $('#entrada_4').show();
              $('#entrada_5').show();
              $('#entrada_6').show();
  }
  console.log("Valor por defecto: " + cont);

  $('#num_entradas').val(4);





           
       

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



    <form id="frm-principal-neurona" action="?c=principal&a=Editar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="Neurona_Id" value="<?php echo $pvd->Neurona_Id; ?>" />

                <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Nombre del Entranamiento</label>
                    <input type="number" name="NeuronaNombre" id="NeuronaNombre"
                      value="<?php echo $pvd->Neurona_Nombre;?>"
                     class="form-control"  placeholder="Ingresa el Nombre de la Neurona"
                     id="num_entrada" min="0.10" max="0.99" step="0.01"
                    placeholder="Ingresa un número"> 
                     
                    </div>
 
                    
                    
                </div>
  
                   <div class="form-row">
                    <div class="form-group col-md-5">
                    <label id="lb_entrada_1">Nombre del Entranamiento</label>

                    <div class="form-row">
                    <select class="form-control col-md-5"  name="entrada_1" id="entrada_1" >

                    <option class="form-control col-md-5"   value="<?php echo $pvd->Neurona_Entrada_1_FK;?>"> <?php echo $pvd->ENTRADA1;?> </opcion>       
                    
                    </select>  
                    <input class="form-control col-md-5"  type="number" name="NeuronaNombre" id="NeuronaNombre"
                      value="<?php echo $pvd->Neurona_Nombre;?>"
                     class="form-control"  placeholder="Ingresa el Valor de la Neurona">  
                   </div>

                   
                    </div>
                    <div class="form-group col-md-5">
                    <label id="lb_entrada_2">Nombre del Entranamiento</label>
                    <select class="form-control col-md-5"  name="entrada_2" id="entrada_2" >
                    <option class="form-control col-md-5"  value="<?php echo $pvd->Neurona_Entrada_2_FK;?>"> <?php echo $pvd->ENTRADA2;?></opcion>
                  
                    </select>                 
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5">
                    <label id="lb_entrada_3">Nombre del Entranamiento</label>
                    <select class="form-control col-md-5"  name="entrada_3" id="entrada_3" >
                    <option class="form-control col-md-5"   value="<?php echo $pvd->Neurona_Entrada_3_FK;?>"> <?php echo $pvd->ENTRADA3;?></opcion>
                   
                    </select>                 
                    </div>
                    <div class="form-group col-md-5">
                    <label id="lb_entrada_4">Nombre del Entranamiento</label>
                    <select class="form-control col-md-5"  name="entrada_4" id="entrada_4" >
                    <option class="form-control col-md-5"   value="<?php echo $pvd->Neurona_Entrada_4_FK;?>"> <?php echo $pvd->ENTRADA4;?></opcion>
                  
                    </select>                 
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5">
                    <label id="lb_entrada_5">Nombre del Entranamiento</label>
                    <select class="form-control col-md-5"  name="entrada_5" id="entrada_5" >
                    <option class="form-control col-md-5"   value="<?php echo $pvd->Neurona_Entrada_5_FK;?>"> <?php echo $pvd->ENTRADA5;?> </opcion>
                  
                    </select>                 
                    </div>
                    <div class="form-group col-md-5">
                    <label id="lb_entrada_6">Nombre del Entranamiento</label>
                    <select class="form-control col-md-5"  name="entrada_6" id="entrada_6" >
                    <option class="form-control col-md-5"   value="<?php echo $pvd->Neurona_Entrada_6_FK;?>"> <?php echo $pvd->ENTRADA6;?> </opcion>
                   
                    </select>                 
                    </div>
                </div>

            <div class="text-center">
                <button class="btn btn-success">Actualizar</button>
            </div>

    </form>


<script>
    $(document).ready(function(){
        $("#frm-principal-neurona").submit(function(){
            return $(this).validate();
        });
    })
</script>
