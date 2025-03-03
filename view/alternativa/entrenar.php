

<h1 class="page-header">Sistema de Red Neuronal - Modulo Entrenamiento:</h1>

<div class="well well-sm text-right">


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=principal&a=NuevoEntrenamiento">Nuevo Entrenamiento</a>
    <a class="btn btn-primary" href="?c=principal&a=Nuevo">Grafico de Entrenamiento</a>
</div>



<br>


<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Código Peso</th>
            <th style="width:180px;">Nombre de la Neurona</th>
            <th style="width:120px;">Entradad 01</th>
            <th style="width:120px;">Entradad 02</th>
            <th style="width:120px;">Entradad 03</th>
            <th style="width:120px;">Entradad 04</th>
            <th style="width:120px;">Entradad 05</th>
            <th style="width:120px;">Entradad 06</th>

            <th style="width:120px;">Acciones </th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->ListarEntrenamiento() as $r): ?>
        <tr>
            <td><?php echo $r->Pesos_Id; ?></td>
            <td><?php echo $r->Neurona_Nombre; ?></td>
            <td><?php echo $r->Peso_01; ?></td>
            <td><?php echo $r->Peso_02; ?></td>
            <td><?php echo $r->Peso_03; ?></td>
            <td><?php echo $r->Peso_04; ?></td>
            <td><?php echo $r->Peso_05; ?></td>
            <td><?php echo $r->Peso_06; ?></td>
         
            <td>
                <a href="?c=principal&a=Crud&idProducto=<?php echo $r->idProducto; ?>">Editar</a>
         
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&idProducto=<?php echo $r->Neurona_Id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


<div class="modal fade-lg" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Encabezado del modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Nueva Nuerona</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Contenido del modal (aquí puedes agregar tu formulario) -->
                <div class="modal-body">
                   

       
                </div>

                <!-- Pie del modal (botones de guardar, cerrar, etc.) -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Guardar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
    </div>

    <script>
    $(document).ready(function(){
        $("#frm-nueva-neurona").submit(function(){
            return $(this).validate();
        });
    })
</script>

