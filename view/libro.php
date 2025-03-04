
<script>

$(document).ready(function () {
    $('#table_length').hide();
})
</script>


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 text-center">Libros</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-striped table-bordered text-center" id="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Libro</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($this->model->MenuLista() as $r): ?>
                        <tr>
                            <td><?php echo $r->Titulo; ?></td>
                            <td>
                              
                                <button class="btn btn-primary d-flex align-items-center justify-content-center ver-lecciones" data-toggle="modal" data-target="#leccionesModal">
                                    <i class='fas fa-book mr-2'></i> Ver Lecciones
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="leccionesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lecciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Aquí irán las lecciones...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 12px;
        text-align: center;
    }
    .btn {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    @media (max-width: 768px) {
        table {
            font-size: 14px;
        }
        th, td {
            padding: 8px;
        }
        .btn {
            padding: 10px;
            font-size: 14px;
        }
    }
</style>

<script>

$(document).ready(function () {
    setTimeout(function () {
 
        $('#table_paginate').hide();
        $('#table_filter').hide();
        $('#table_info').hide();
      
        $('#table_length').hide();
    }, 100); // Ajusta el tiempo si es necesario
})
</script>
