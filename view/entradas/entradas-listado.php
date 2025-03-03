

<h3 class="page-header">Tipo de Entradas/Listado de Entradas.</h3>

<div class="well well-sm text-right">

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=principal&a=Nuevo">Nueva Entrada</a>
    <a class="btn btn-primary" href="?c=principal&a=Nuevo">Grafico de Nodos</a>
</div>



<br>


<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:80px;">Código Entrada</th>
            <th style="width:100px;">Entrada Nombre</th>
            <th style="width:120px;">Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Entrada_Id; ?></td>
            <td><?php echo $r->Entrada_Nombre; ?></td>

            <td>
                <a href="?c=principal&a=Crud&idProducto=<?php echo $r->idProducto; ?>">Editar</a>
  
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&idProducto=<?php echo $r->idProducto; ?>">Eliminar</a>
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

