

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<div class="container-fluid">
<h2 class="page-header">
    Entrenamiento
</h2>

    <!-- Content Row -->
    <div class="row">
        
        <div class="col-lg-12 m-auto">
            <div class="card-header bg-primary text-white">
            Alternativa
            </div>
            <div class="card">
            <form id="frm-principal-neurona" action="?c=principal&a=EntrenarX" method="post" class="card-body p-2"  enctype="multipart/form-data">
      
                <?php echo isset($alert) ? $alert : ''; ?>

               <input type="text" name="Neurona_Id" value="<?php echo $pvd->Neurona_Id; ?>" />
               <input type="hidden" name="entrada_1" value="1" />
            
               </br>
               <div class="row">
               <div class="form-row col-md-12">
                  <div class="form-group col-md-4">
                      <label id="lb_entrada_1">Compañia</label>

                     <select class="custom-select selevt"  >
                     <option   value="0"><?php echo $pvd->Cantidad_Personas; ?></opcion>
                       
                    </select> 

                    <select class="custom-select selevt" name="entrada_2" id="entrada_2">
                    <option value="0">Seleccione</option>
                    <?php
                    for ($i = 20; $i <= 95; $i += 5) {
                        $valor = $i / 100; // Divide por 100 para obtener el valor decimal
                        $valor_formateado = number_format($valor, 2); // Formatea el valor con dos decimales
                        echo "<option value=\"$valor_formateado\">$valor_formateado</option>";
                    }
                    ?>
                    </select>


                    </div> 
                      <div class="form-group col-md-2">
               
            
                    <label id="lb_entrada_1">Horario</label>
                    <select class="custom-select selevt"  >
                     <option   value="0"><?php echo $pvd->Horario; ?></opcion>
                       
                    </select>
                    <select class="custom-select selevt" name="entrada_3" id="entrada_3">
                    <option value="0">Seleccione</option>
                    <?php
                    for ($i = 20; $i <= 95; $i += 5) {
                        $valor = $i / 100; // Divide por 100 para obtener el valor decimal
                        $valor_formateado = number_format($valor, 2); // Formatea el valor con dos decimales
                        echo "<option value=\"$valor_formateado\">$valor_formateado</option>";
                    }
                    ?>
                    </select>

                    </div>  
                    
                 
                    <div class="form-group col-md-3">
                
                    <label for="inputEmail4">Edad</label>
                   
                    <select class="custom-select selevt"  >
                     <option   value="0"><?php echo $pvd->Edad; ?></opcion>
                       
                    </select>
                    <select class="custom-select selevt" name="entrada_4" id="entrada_4">
                    <option value="0">Seleccione</option>
                    <?php
                    for ($i = 20; $i <= 95; $i += 5) {
                        $valor = $i / 100; // Divide por 100 para obtener el valor decimal
                        $valor_formateado = number_format($valor, 2); // Formatea el valor con dos decimales
                        echo "<option value=\"$valor_formateado\">$valor_formateado</option>";
                    }
                    ?>
                    </select>

                   
                
                </div>
                <div class="form-group col-md-3">  
                    <label id="lb_entrada_1">Costo</label>
                    <select class="custom-select selevt"  >
                        <option   value="0"><?php echo $pvd->Costo; ?></opcion>
                        
                    </select>
                    <select class="custom-select selevt" name="entrada_5" id="entrada_5">
                    <option value="0">Seleccione</option>
                    <?php
                    for ($i = 20; $i <= 95; $i += 5) {
                        $valor = $i / 100; // Divide por 100 para obtener el valor decimal
                        $valor_formateado = number_format($valor, 2); // Formatea el valor con dos decimales
                        echo "<option value=\"$valor_formateado\">$valor_formateado</option>";
                    }
                    ?>
                    </select>
                  </div>  

                  </div>  
                  </div>  
               <div class="row">
                   <div class="form-group col-md-4">

                        <label id="lb_entrada_1">Sexo</label>
                        <select class="custom-select selevt">
                            <option value="0"><?php echo $pvd->Sexo; ?></option>
                        </select>
                        <select class="custom-select selevt" name="entrada_6" id="entrada_6">
                            <option value="0">Seleccione</option>
                            <?php
                            for ($i = 20; $i <= 95; $i += 5) {
                                $valor = $i / 100; // Divide por 100 para obtener el valor decimal
                                $valor_formateado = number_format($valor, 2); // Formatea el valor con dos decimales
                                echo "<option value=\"$valor_formateado\">$valor_formateado</option>";
                            }
                            ?>
                        </select>
                   
                    </div>

                   <div class="form-group col-md-4">
              
                        <label id="lb_entrada_2">Respuesta del Entrenamiento</label>
                        <select class="custom-select selevt" name="entrada_7" id="entrada_7">
                            <option value="0">Seleccione</option>
                            <?php
                            for ($i = 20; $i <= 95; $i += 5) {
                                $valor = $i / 100; // Divide por 100 para obtener el valor decimal
                                $valor_formateado = number_format($valor, 2); // Formatea el valor con dos decimales
                                echo "<option value=\"$valor_formateado\">$valor_formateado</option>";
                            }
                            ?>
                        </select>
                  
                     </div>
                </div>


      
              

             
                   
            
                <div class="text-center">
                <button class="btn btn-success">Actualizar</button>
            </div>
          </div>
   
       </form>
       </div>
     </div>
    </div>


</div>


<script>
    $(document).ready(function(){
        $("#frm-principal-neurona").submit(function(){
            return $(this).validate();
        });
    })
</script>
