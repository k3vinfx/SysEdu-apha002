



<style>
  html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
}
.container-fluid {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.modal-content {
    max-height: 80vh;
    overflow-y: auto;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>

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
                              
                          
                                <button class="btn btn-primary d-flex align-items-center justify-content-center ver-lecciones" 
                                        data-idx="<?php echo $r->idLibro; ?>" 
                                        data-toggle="modal" 
                                        data-target="#leccionesModal">
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

<!-- Modal --><div class="modal fade" id="leccionesModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lecciones</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div>
                    <button id="prevPage" class="btn btn-secondary">⬅️ Anterior</button>
                    <span>Página: <span id="pageNum">1</span> / <span id="pageCount"></span></span>
                    <button id="nextPage" class="btn btn-secondary">Siguiente ➡️</button>
                </div>
                <canvas id="pdfCanvas" style="width: 100%; border: 1px solid #ccc;"></canvas>
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

    let pdfDoc = null,
    pageNum = 1,
    pageRendering = false,
    pdfCanvas = document.getElementById('pdfCanvas'),
    ctx = pdfCanvas.getContext('2d');

function renderPage(num) {
    pageRendering = true;
    pdfDoc.getPage(num).then(function (page) {
        let viewport = page.getViewport({ scale: 1.5 });
        pdfCanvas.height = viewport.height;
        pdfCanvas.width = viewport.width;

        let renderContext = {
            canvasContext: ctx,
            viewport: viewport,
        };

        let renderTask = page.render(renderContext);
        renderTask.promise.then(function () {
            pageRendering = false;
            document.getElementById("pageNum").textContent = num;
        });
    });

    document.getElementById("pageCount").textContent = pdfDoc.numPages;
}


// Botón de página anterior
document.getElementById("prevPage").addEventListener("click", function () {
    if (pageNum > 1) {
        pageNum--;
        renderPage(pageNum);
    }
});

// Botón de página siguiente
document.getElementById("nextPage").addEventListener("click", function () {
    if (pageNum < pdfDoc.numPages) {
        pageNum++;
        renderPage(pageNum);
    }
});


    setTimeout(function () {
 
        $('#table_paginate').hide();
        $('#table_filter').hide();
        $('#table_info').hide();
      
        $('#table_length').hide();
    }, 100); // Ajusta el tiempo si es necesario


    //let idLibro = $(this).data("id");


    $(".ver-lecciones").on("click", function () {
        let idLibro = $(this).data("idx"); // Obtener el ID del libro desde el botón



        $.ajax({
            url: "?c=libro&a=ListaUnidades",
            method: "POST",
            data: { idLibro: idLibro },
            success: function (data) {
                // Insertar la respuesta en el modal
            
                $("#leccionesModal .modal-body").html(`
                    <iframe src="${data}" width="100%" height="500px"></iframe>
                `);
            },
            error: function () {
                alert("Error al cargar las lecciones.");
            }
        });
    });

});


</script>
