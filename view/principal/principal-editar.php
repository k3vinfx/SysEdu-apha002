<h1 class="page-header">
    Editar Registro
</h1>


<script>
        $(document).ready(function () {
            // Obtener el valor seleccionado en entrada_X al cargar la página
            var valorSeleccionado = $("#entrada_X").val();

            
            console.log('Respuesta del servidoSSSr:', valorSeleccionado);

            // Realizar una solicitud AJAX para obtener los datos al cargar la página
            $.ajax({
                url: '?c=principal&a=NuevoPreparado&X=' + valorSeleccionado,
                method: 'POST',
                dataType: 'json',
                success: function (data) {
                    // Limpia el select actual
      

                    // Agrega una opción predeterminada
                        console.log('Respuesta del servidor:', data);
                    // Llena el select con los datos obtenidos

                    $.each(data, function (key, value) {
                        $('#Id_Recomendacion').append('<option value="' + value.Recomendacion_id + '">' + value.Recomendacion_titulo + '</option>');
                     });

                    },
                error: function (xhr, status, error) {
                    console.log('Error al obtener los datos:');
                    console.log('XHR:', xhr);
                    console.log('Status:', status);
                    console.log('Error:', error);
                }
            });

            // Agregar el evento change para manejar futuros cambios en entrada_X
            $("#entrada_X").change(function () {
                var valorSeleccionado = $(this).val();
                // Resto del código AJAX para manejar cambios en entrada_X
            });
            viewProcesar();
            function viewProcesar() {
              $('#lb_entrada_1').show();
              $('#lb_entrada_2').show();
              $('#lb_entrada_3').show();
              $('#lb_entrada_4').show();
              $('#lb_entrada_5').show();
              $('#lb_entrada_6').show();


        
            }  $("#entrada_6").change(function() {
                    // Obtén el valor seleccionado en el select
                    var valorSeleccionado = $(this).val();
                    var valor1 = $("#entrada_1").val();
                    var valor2 = $("#entrada_2").val();
                    var valor3 = $("#entrada_3").val();
                    var valor4 = $("#entrada_4").val();
                    var valor5 = $("#entrada_5").val();
                    var valor6 = $("#entrada_6").val();


                });

      
      
       

                  

                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $("#entrada_5").change(function() {
                    // Obtén el valor seleccionado en el select
                    var valorSeleccionado = $(this).val();
                    var valor1 = $("#entrada_1").val();
                    var valor2 = $("#entrada_2").val();
                    var valor3 = $("#entrada_3").val();
                    var valor4 = $("#entrada_4").val();
                    var valor5 = $("#entrada_5").val();
        
                    var aux = "" ;  
                    if (valor2==1){
                            valor2= "M";

                    }if(valor2==2){
                        valor2= "F";

                    }
                    var miSelect = $("#Id_Recomendacion");
                    // Obtener la opción seleccionada
                    var opcionSeleccionada = miSelect.find("option:selected");
                    // Obtener el valor del texto de la opción seleccionada
                    var textoSeleccionado = opcionSeleccionada.text().trim();

                    var miSelect1 = $("#entrada_3");
                    // Obtener la opción seleccionada
                    var opcionSeleccionada1 = miSelect1.find("option:selected");
                    // Obtener el valor del texto de la opción seleccionada
                    var textoSeleccionado1 = opcionSeleccionada1.text().trim();


                    var miSelect2 = $("#entrada_4");
                    // Obtener la opción seleccionada
                    var opcionSeleccionada2 = miSelect2.find("option:selected");
                    // Obtener el valor del texto de la opción seleccionada
                    var textoSeleccionado2 = opcionSeleccionada2.text().trim();


                    var miSelect3 = $("#entrada_X");
                    // Obtener la opción seleccionada
                    var opcionSeleccionada3 = miSelect3.find("option:selected");
                    // Obtener el valor del texto de la opción seleccionada
                    var textoSeleccionado3 = opcionSeleccionada3.text().trim();


                    var miSelect4 = $("#entrada_5");
                    // Obtener la opción seleccionada
                    var opcionSeleccionada4 = miSelect4.find("option:selected");
                    // Obtener el valor del texto de la opción seleccionada
                    var textoSeleccionado4 = opcionSeleccionada4.text().trim();

              aux = "/CAT:" +textoSeleccionado3 + "/ALT:"+textoSeleccionado +"/PER:" + valor1+  "/S:" + valor2 + "/H:"+ 
              textoSeleccionado1+ "/E:"+textoSeleccionado2 +
              "/P:"+textoSeleccionado4;  

                    // Actualiza el valor del campo Id_Recomendacion con el valor seleccionado
                   // $("input[name='NeuronaNombre']").val(valorSeleccionado);
             
                   $("input[name='NeuronaNombre']").val(aux);  
             });
         

         
        });
    </script>




<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card-header bg-primary text-white">
            Nuevo R.N.N.
            </div>
            <div class="card">
        <form id="frm-principal-neurona" action="?c=principal&a=Guardar" method="post" class="card-body p-2" enctype="multipart/form-data" >
        <?php echo isset($alert) ? $alert : ''; ?>
            <input type="hidden" name="Neurona_Idx" value="1 "/>
             <input type="hidden" name="NeuronaNombre" />
                 
                <div class="form-row">
                <div class="form-group col-md-4">
                      <label id="lb_entrada_1">Selecione una Categoria</label>
                             <select class="custom-select selevt"  name="entrada_X" id="entrada_X" >
                    <option   value="<?php echo $pvd->Categoria; ?>"><?php echo $pvd->Categoria_Nomb; ?></opcion>
                         <?php foreach ($this->model->MenuTipoCategoria() as $Tipo): ?>
                        <option  value="<?php echo $Tipo->Categoria_id; ?>">
                            <?php echo $Tipo->Categoria_nombre; ?> <!-- Reemplaza "Nombre" con el nombre real de la columna que deseas mostrar en el select -->
                        </option>       
                        <?php endforeach; ?>
                    </select> 
                    </div> 

                      <div class="form-group col-md-4">
                    
              
                    <label id="lb_entrada_1">Alternativa Turistica</label>
                    <select class="custom-select selevt" name="Id_Recomendacion" id="Id_Recomendacion" >
                    <option   value="0"><?php echo $pvd->Nombre_Recomendacion; ?></opcion>
                    
                    </select>                 
                    </div>  
                    
                 
                    <div class="form-group col-md-4">
                
                    <label for="inputEmail4">Cantidad de Personas</label>
                    <select class="custom-select selevt"  name="entrada_1" id="entrada_1" >
                    <option   value="0"><?php echo $pvd->Cantidad_Personas; ?></opcion>
                    <?php foreach ($this->model->MenuTipoGrupo() as $Tipo): ?>
                        <option  value="<?php echo $Tipo->Entrada_Id; ?>">
                            <?php echo $Tipo->Entrada_Nombre; ?> <!-- Reemplaza "Nombre" con el nombre real de la columna que deseas mostrar en el select -->
                        </option>       
                    <?php endforeach; ?>
                    </select> 
                    </div>
                    </div>                
                    <div class="form-row">
                    <div class="form-group col-md-3">
                    <label id="lb_entrada_1">Selecione el Sexo</label>
                    <select class="custom-select selevt" name="entrada_2" id="entrada_2" >
                    <option   value="0"><?php echo $pvd->Sexo; ?></opcion>
                    <option value="1">Masulino</option>
                    <option value="2">Femenino</option>
                     </select>                 
                    </div>  


                    <div class="form-group col-md-3">
                    <label id="lb_entrada_3">Selecione el Horario</label>
                    <select class="custom-select selevt" name="entrada_3" id="entrada_3" >
                    <option value="0">Seleccion </opcion>
                    <option value="1">MAÑANA</option>
                    <option value="2">MEDIO DIA</option>
                    <option value="3">TARDE</option>
                    <option value="4">NOCHE</option>
                    </select>                 
                    </div>  

                    <div class="form-group col-md-3">
                    <label id="lb_entrada_1">Selecione el Edad</label>
                    <select class="custom-select selevt" name="entrada_4" id="entrada_4" >
                    <option  value="0">Seleccion </opcion>
                    <option value="1">18 - 21</option>
                    <option value="2">22 - 25</option>
                    <option value="3">25 - 30</option>
                    <option value="4">30 - 35</option>
                    <option value="5">35 - 40</option>
                    <option value="6">40 - 45</option>
                    <option value="7">45 - 50</option>
                    <option value="8">50 - 60</option>
                    <option value="9">60 - 70</option>
                    </select>                 
                    </div>        
                

                    <div class="form-group col-md-3">
                    <label id="lb_entrada_1">Selecione el Costo</label>
                    <select class="custom-select selevt" name="entrada_5" id="entrada_5" >
                    <option value="0">Seleccion </opcion>
                    <option value="1">Muy Económico</option>
                    <option value="2">Económico</option>
                    <option value="3">Moderado</option>
                    <option value="4">Alto</option>
                    <option value="5">Muy Alto</option>
                    </select>                 
                    </div> 

                     </div>
          
          

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
