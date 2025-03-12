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
    #pdfControls {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 10px;
    }
    .control-btn {
        font-size: 1.2rem;
        padding: 8px 12px;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


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
                                <button class="btn btn-primary ver-lecciones" 
                                        data-idx="<?php echo $r->idLibro; ?>"
                                        data-toggle="modal"
                                        data-target="#listaPdfModal">
                                    <i class='fas fa-book'></i> Ver Lecciones
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

<!-- Modal Lista de PDFs -->
<div class="modal fade" id="listaPdfsModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Seleccionar Lección</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body text-center" id="listaPdfsContainer">
                <p>Cargando lecciones...</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="leccionesModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lecciones</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div id="pdfControls">
                    <button id="prevPage" class="btn btn-secondary control-btn">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                    <button id="zoomOut" class="btn btn-secondary control-btn">
                        <i class="fas fa-search-minus"></i>
                    </button>
                    <span>Página: <span id="pageNum">1</span> / <span id="pageCount"></span></span>
                    <button id="zoomIn" class="btn btn-secondary control-btn">
                        <i class="fas fa-search-plus"></i>
                    </button>
                    <button id="nextPage" class="btn btn-secondary control-btn">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                    <a id="downloadPdf" class="btn btn-primary control-btn" download>
                        <i class="fas fa-download"></i>
                    </a>
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

    setTimeout(function () {
    
    $('#table_paginate').hide();
    $('#table_filter').hide();
    $('#table_info').hide();

    $('#table_length').hide();
    }, 100); // Ajusta el tiempo si es necesario
    

    let pdfDoc = null,
        pageNum = 1,
        pdfCanvas = document.getElementById("pdfCanvas"),
        ctx = pdfCanvas.getContext("2d");

        $(".ver-lecciones").on("click", function () {
    let idLibro = $(this).data("idx");

    console.log("ID del libro seleccionado:", idLibro); // Verificar si el ID llega correctamente

    $.ajax({
        url: "?c=libro&a=ListaUnidades",
        method: "POST",
        dataType: "json",
        data: { idLibro: idLibro },
        success: function (response) {
            console.log("Respuesta del servidor:", response);

            if (response.error) {
                console.error("Error recibido:", response.error);
                $("#listaPdfsContainer").html(`<p>${response.error}</p>`);
                return;
            }

            if (!Array.isArray(response)) {
                console.error("Error: La respuesta no es un array", response);
                $("#listaPdfsContainer").html("<p>Error al cargar las lecciones.</p>");
                return;
            }

            let lista = "<ul class='list-group'>";
            response.forEach(pdf => {
                lista += `<li class='list-group-item'>
                            <button class='btn btn-link seleccionar-pdf' data-url='${pdf.ruta}'>${pdf.nombre}</button>
                        </li>`;
            });
            lista += "</ul>";

            $("#listaPdfsContainer").html(lista);
            $("#listaPdfsModal").modal("show");
        },
        error: function (xhr, status, error) {
            console.error("Error en AJAX:", xhr.responseText);
            $("#listaPdfsContainer").html("<p>Error en la carga de lecciones.</p>");
        }
    });
});


$(document).on("click", ".seleccionar-pdf", function () {
    let pdfUrl = $(this).data("url");

    console.log("PDF seleccionado:", pdfUrl); // Verificar en consola que el PDF se obtiene correctamente

    // Cerrar el modal de la lista de PDFs
    $("#listaPdfsModal").modal("hide");

    // Esperar 500ms para asegurarse de que el primer modal se cierra antes de abrir el otro
    setTimeout(function () {
        // Mostrar el modal del visor de PDF
        $("#leccionesModal").modal("show");

        // Cargar el PDF seleccionado
        loadPdf(pdfUrl);
    }, 500);
});

// Función para cargar el PDF
function loadPdf(url) {
    pdfjsLib.getDocument(url).promise.then(function (pdf) {
        pdfDoc = pdf;
        pageNum = 1;
        renderPage(pageNum);
    }).catch(function (error) {
        console.error("Error al cargar el PDF:", error);
        $("#pdfCanvas").html("<p>Error al cargar el archivo PDF.</p>");
    });
}

// Función para renderizar una página del PDF
function renderPage(num) {
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
            $("#pageNum").text(num);
            $("#pageCount").text(pdfDoc.numPages);
        });
    });


   
    $("#prevPage").on("click", function () {
        if (pageNum > 1) {
            pageNum--;
            renderPage(pageNum);
        }
    });

    $("#nextPage").on("click", function () {
        if (pdfDoc && pageNum < pdfDoc.numPages) {
            pageNum++;
            renderPage(pageNum);
        }
    });
});
</script>
