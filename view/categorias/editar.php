<h1 class="page-header">
    Editar Categoria
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


<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card-header bg-primary text-white">
            Categoria
            </div>
            <div class="card">
                <form id="frm-editar" action="?c=categorias&a=Editar" method="post"  autocomplete="off"class="card-body p-2" enctype="multipart/form-data">
                    <?php echo isset($alert) ? $alert : ''; ?>

                    <input type="hidden" name="id_categoria" value="<?php echo $pvd->Categoria_id; ?>" />
                  
                     <div class="form-group">
                        <label for="inputEmail4">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="<?php echo $pvd->Categoria_nombre;?>" class="form-control"  placeholder="Ingresa el Nombre">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Descripcion</label>
                        <input type="text" placeholder="Ingrese la descripcion" name="descripcion" id="descripcion" class="form-control" 
                         value="<?php echo $pvd->Categoria_descripcion;?>">
                    </div>
                    
                    <div class="form-group">
                        <label id="lb_entrada_1">Categoria</label>
                        <select class="custom-select"  name="estado" id="estado" >
                        <?php foreach ($cat as $c): 
                            if($c['id'] == $pvd->Categoria_estado ){ 
                                $selected = 'selected';
                            }else{
                                $selected = '';
                            }
                            // var_dump($selected);die;
                        ?>
                            <option  value="<?php echo $c['id'] ; ?>" <?php echo $selected?>><?= $c['nombre'] ?></option>       
                        <?php endforeach; ?>
                        </select>
                    </div>

                    <input type="submit" value="Editar Alternativa" class="btn btn-primary">
                    <a href="?c=principal" class="btn btn-danger">Regresar</a>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        $("#frm-editar").submit(function(){
            return $(this).validate();
        });
    })
</script>
