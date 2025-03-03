<h1 class="page-header">
    Nuevo Registro de Alternativa
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

 <!-- Load Leaflet from CDN -->
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

  <!-- Load Esri Leaflet from CDN -->
  <script src="https://unpkg.com/esri-leaflet@2.5.0/dist/esri-leaflet.js"
    integrity="sha512-ucw7Grpc+iEQZa711gcjgMBnmd9qju1CICsRaryvX7HJklK0pGl/prxKvtHwpgm5ZHdvAil7YPxI1oWPOWK3UQ=="
    crossorigin=""></script>

  <!-- Load Esri Leaflet Geocoder from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.css"
    integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
    crossorigin="">
  <script src="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.js"
    integrity="sha512-HrFUyCEtIpxZloTgEKKMq4RFYhxjJkCiF5sDxuAokklOeZ68U2NPfh4MFtyIVWlsKtVbK5GD2/JzFyAfvT5ejA=="
    crossorigin=""></script>

<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 m-auto">
            <div class="card-header bg-primary text-white">
            Alternativa
            </div>
            <div class="card">
                <form id="frm-nuevo" action="?c=alternativa&a=Guardar" method="post"  autocomplete="off"class="card-body p-2" enctype="multipart/form-data">
                    <?php echo isset($alert) ? $alert : ''; ?>
                    <div class="form-group">
                        <label for="nombre">Nombre de la Alternativa</label>
                        <input type="text" placeholder="Ingrese nombre" name="titulo" id="titulo" class="form-control">
                    </div>
                
                    


                    <div class="form-group">
              
                    <label id="lb_entrada_1">Categoria de la Alternativa</label>
                    <select class="custom-select selevt" name="categoria" id="categoria" >
                    <option  value="0">Seleccion </opcion>
                    <?php foreach ($this->model->MenuTipo() as $Tipo): ?>
                        <option  value="<?php echo $Tipo->Categoria_id; ?>">
                            <?php echo $Tipo->Categoria_nombre; ?> <!-- Reemplaza "Nombre" con el nombre real de la columna que deseas mostrar en el select -->
                        </option>       
                    <?php endforeach; ?>
                    </select>                 
                    </div>             


                    <div class="form-group">
                        <label for="telefono">Precio</label>
                        <input type="number" step="5" placeholder="Ingrese el Precio de la Alternativa" name="costo" id="costo" class="form-control" min="0" max="1000">
                    </div>
                    <div class="form-group">
                    <label id="lb_entrada_1">Carge Imagenes del Alternativa</label>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
                        Cargar Imagenes
                        </button>
                        </div>
                        <div class="modal" id="myModal1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Imagenes</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <label for="text1">Imagenes1:</label>
                                <input type="file" class="form-control" id="img1" name="img1" class="form-control mb-2" >  
                                <div id="file-info1" class="mt-2"></div>
                                <label for="textx1">Imagenes2:</label>
                                <input type="file" class="form-control" id="img2" name="img2" class="form-control mb-2" >  
                                <div id="file-info2" class="mt-2"></div>
                                <label for="text1">Imagenes3:</label>
                                <input type="file" class="form-control" id="img3" name="img3" class="form-control mb-2" > 
                                <div id="file-info3" class="mt-2"></div>
                                <label for="text1">Imagenes4:</label>
                                <input type="file" class="form-control" id="img4" name="img4" class="form-control mb-2" > 
                                <div id="file-info4" class="mt-2"></div> 
                                <label for="text1">Imagenes5:</label>
                                <input type="file" class="form-control" id="img5" name="img5" class="form-control mb-2" >  
                                <div id="file-info5" class="mt-2"></div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" id="saveChangesButtonImg">Guardar Cambios</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                         
                        </div>
                        </div>
                       
                    </div>


             
                    <div class="form-group">
                    <label id="lb_entrada_1">Categoria de la Alternativa</label>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Cargar Ubicación Mapa
                        </button>
                        </div>
                        <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Coordenadas</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <label for="text1">Latitud:</label>
                                <input type="text" id="text1" class="form-control mb-2">
                                <label for="text2">Longitud:</label>
                                <input type="text" id="text2" class="form-control mb-2">
                                <label for="text3">Dirección:</label>
                                <input type="text" id="text3" class="form-control mb-2">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" id="saveChangesButton">Guardar Cambios</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                            <div id="map" style="height: 300px;"></div>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="contacto">Ubicacion de la Alternativa</label>
                        <input type="text" placeholder="Ingrese ubicacion de la alternativa" name="ubicacion" id="ubicacion" class="form-control">
                        <input type="hidden"  name="latlong" id="latlong" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="direccion">Descripcion</label>
                        <input type="text" placeholder="Ingrese Direccion" name="descripcion" id="descripcion" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status" class="control-label">Estado</label>
                        <select name="estado" id="estado" class="custom-select selevt">
                        <option value="1" <?php echo isset($status) && $status == 1 ? 'selected' : '' ?>>Activo</option>
                        <option value="0" <?php echo isset($status) && $status == 0 ? 'selected' : '' ?>>Inactivo</option>
                        </select>
                    </div>
               
        

                    <input type="submit" value="Guardar Alternativa" class="btn btn-primary">
                    <a href="?c=principal" class="btn btn-danger">Regresar</a>
                </form>
            </div>
        </div>
    </div>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script>
    $(document).ready(function(){
            
        var map = L.map('map').setView([-16.489689,-68.119293], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var gcs = L.esri.Geocoding.geocodeService();
        var currentMarker;

        map.on('click', (e)=>{
        var lat = Number(e.latlng.lat.toFixed(6));
        var lng = Number(e.latlng.lng.toFixed(6));
        if (currentMarker) {
            map.removeLayer(currentMarker);
        }
        currentMarker = L.marker(e.latlng).addTo(map);
        
        gcs.reverse().latlng(e.latlng).run((err, res)=>{
            if(err) return;
          //  alert(res.latlng);

         //   document.getElementById("text1").value = lat;
            document.getElementById("text2").value = lng;

       
            let latLngStr = e.latlng;

          //  let latLngStr = "LatLng(-16.485331, -68.119304)";
            document.getElementById("text1").value = lat;
            document.getElementById("latlong").value = lat + "," + lng ;
          //  currentMarker = L.marker(res.latlng).addTo(map).bindPopup(res.address.Match_addr).openPopup();
          //  currentMarker.bindPopup(res.address.Match_addr).openPopup();
          var popupContent = "";
          var inputContent = "";
            if (res.address.Match_addr) {
                popupContent += res.address.Match_addr + "<br>";
             //   popupContentInfo += res.address.Match_addr ;
            }
            if (res.address.Street) {
                popupContent += "Calle: " + res.address.Street + "<br>";
                inputContent += "Calle: " + res.address.Street + ", ";
  
            }
            if (res.address.Neighborhood) {
                popupContent += "Barrio: " + res.address.Neighborhood + "<br>";
           //    inputContent += "Barrio: " + res.address.Neighborhood + ", ";
       }
            // ... (puedes agregar más detalles aquí)

            // Mostrar la información en el popup
            currentMarker.bindPopup(popupContent).openPopup();

            document.getElementById("text3").value = res.address.Match_addr;

            });
        });
        // Objeto para mantener el registro de los archivos seleccionados
        var archivosSeleccionados = {};
        function esExtensionValida(nombreArchivo) {
            // Define las extensiones de archivo permitidas
            var extensionesPermitidas = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            
            // Comprueba si la extensión del archivo actual está permitida
            return extensionesPermitidas.test(nombreArchivo);
        }


                
        function actualizarRegistroYUI(inputElement, infoElementId) {
            var files = $(inputElement)[0].files;
            var fileInfo = "";

            if (files.length > 0) {
                var archivo = files[0].name;

                // Verificar si el archivo tiene una extensión de imagen válida
                if (!esExtensionValida(archivo)) {
                    fileInfo = "Formato no permitido. Seleccione un archivo de imagen (.jpg, .jpeg, .png, .gif).";
                    $(inputElement).val(''); // Limpiar el input file
                } else if (Object.values(archivosSeleccionados).includes(archivo)) {
                    // Comprobar si el archivo ya ha sido seleccionado en otro input
                    fileInfo = "Este archivo ya ha sido seleccionado.";
                    $(inputElement).val(''); // Deseleccionar el archivo actual
                } else {
                    // Actualizar el registro con el nuevo archivo
                    var inputId = $(inputElement).attr('id');
                    archivosSeleccionados[inputId] = archivo;
                    fileInfo = `Archivo seleccionado: ${archivo}`;
                }
            } else {
                fileInfo = "No se ha seleccionado ningún archivo.";
            }

            $('#' + infoElementId).html(fileInfo); // Actualizar la interfaz de usuario
        }

        // Manejadores de eventos para los cambios de archivos
        $('#img1').on('change', function() { actualizarRegistroYUI(this, 'file-info1'); });
        $('#img2').on('change', function() { actualizarRegistroYUI(this, 'file-info2'); });
        $('#img3').on('change', function() { actualizarRegistroYUI(this, 'file-info3'); });
        $('#img4').on('change', function() { actualizarRegistroYUI(this, 'file-info4'); });
        $('#img5').on('change', function() { actualizarRegistroYUI(this, 'file-info5'); });



        $('#img1').on('change', function() {
            var files = $(this)[0].files;
            var fileInfo = "";
            var jsonFiles = []; 
            
            if (files.length === 0) { 
                fileInfo = "No se ha seleccionado ningún archivo.";
            } else {
            //    for (var i = 0; i < files.length; i++) {
            //       fileInfo += `- ${files[i].name}<br>`;
            //        jsonFiles.push({
            //          id: i,
            //          data: files[i].name
            //         });
            //       fileInfo = `Se han seleccionado ${files.length} archivo(s):<br>`;     
            //    }
            //  var jsonFilesString = JSON.stringify(jsonFiles); // Convertir el array de objetos a una cadena JSON
            //  document.getElementById("meta_data").value = jsonFilesString;
            //  var visualName = "Imagen_Seleccionada_" + new Date().getTime();
            //  fileInfo = `Se ha seleccionado el archivo:<br><strong>${visualName}</strong>`;
            //  console.log(jsonFilesString);

                fileInfo = `Se han seleccionado ${files.length} archivo(s):<br>`;     
            }
            $('#file-info1').html(fileInfo); // Actualizar el contenido del elemento con la información del archivo
        });
        $('#img2').on('change', function() {
            var files = $(this)[0].files;
            var fileInfo = "";
            var jsonFiles = []; 
            
            if (files.length === 0) { 
                fileInfo = "No se ha seleccionado ningún archivo.";
            } else {
                fileInfo = `Se han seleccionado ${files.length} archivo(s):<br>`;     
            }
            $('#file-info2').html(fileInfo); // Actualizar el contenido del elemento con la información del archivo
        });
        $('#img3').on('change', function() {
            var files = $(this)[0].files;
            var fileInfo = "";
            var jsonFiles = []; 
            
            if (files.length === 0) { 
                fileInfo = "No se ha seleccionado ningún archivo.";
            } else {
                fileInfo = `Se han seleccionado ${files.length} archivo(s):<br>`;     
            }
            $('#file-info3').html(fileInfo); // Actualizar el contenido del elemento con la información del archivo
        });
        $('#img4').on('change', function() {
            var files = $(this)[0].files;
            var fileInfo = "";
            var jsonFiles = []; 
            
            if (files.length === 0) { 
                fileInfo = "No se ha seleccionado ningún archivo.";
            } else {
                fileInfo = `Se han seleccionado ${files.length} archivo(s):<br>`;     
            }
            $('#file-info4').html(fileInfo); // Actualizar el contenido del elemento con la información del archivo
        });
        $('#img5').on('change', function() {
            var files = $(this)[0].files;
            var fileInfo = "";
            var jsonFiles = []; 
            
            if (files.length === 0) { 
                fileInfo = "No se ha seleccionado ningún archivo.";
            } else {
                fileInfo = `Se han seleccionado ${files.length} archivo(s):<br>`;     
            }
            $('#file-info5').html(fileInfo); // Actualizar el contenido del elemento con la información del archivo
        });



        $('#myModal').on('shown.bs.modal', function () {
                map.invalidateSize();
            });

        document.getElementById("saveChangesButton").addEventListener("click", function() {
            var txt=  document.getElementById("text3").value ;
            document.getElementById("ubicacion").value = txt;
           
            // Aquí puedes agregar el código para modificar el contenido en tu archivo original.

            if (txt && txt.trim() !== "") { // Asegurarse de que txt no sea null, undefined o una cadena vacía
                $('#myModal').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();   
          }

        });

        // Obtiene el botón que abre el modal
        var modal = document.getElementById("myModal1");

        // Obtiene el botón que abre el modal


        $('#saveChangesButtonImg').on('click', function(e) {
            e.preventDefault(); // Esto evita que el botón realice su acción por defecto.
            // Aquí iría el código para manejar los cambios, como validar y guardar los datos.
            
            // Para cerrar el modal manualmente si todo está correcto:
             $('#myModal1').modal('hide');
             $('.modal-backdrop').remove();
             $('body').removeClass('modal-open'); // Esto devuelve el scroll al body si se había quitado.
        });


        var modal = document.getElementById("myModal");

            // Obtiene el botón que abre el modal
            var btn = document.getElementById("openModalButton");

            // Obtiene el elemento <span> que cierra el modal
            var span = document.getElementsByClassName("close")[0];

            // Cuando el usuario hace clic en el botón, abre el modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // Cuando el usuario hace clic en <span> (x), cierra el modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // Cuando el usuario hace clic en cualquier lugar fuera del modal, lo cierra
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

        // Función para guardar los cambios
        document.getElementById("saveChangesButton").onclick = function() {
            var text1Value = document.getElementById("text1").value;
            var text2Value = document.getElementById("text2").value;

            // Aquí puedes agregar el código para modificar el contenido en tu archivo original.
            console.log("Text1: " + text1Value + ", Text2: " + text2Value);
        }

        $("#frm-nuevo").submit(function(){
            return $(this).validate();
        });
    })
</script>
