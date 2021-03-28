function init() {
    $("#formulario_carousel").on("submit", function (e) {
        guardaryeditar(e);
    });

    listar_tbla_delivery();
}

init();

function listar_tbla_delivery() {
    tabla = $("#tbllistado_carousel").dataTable({        
        aProcessing: true,
        aServerSide: true,
        dom: "Bfrtip",
        language: {
            responsive: true,
            url: "recursos/js/idioma.json",
        },
        ajax: {
            url: "CDelivery.php?op=listar",
            type: "get",
            dataType: "json",
            error: function (e) {
                console.log(e.responseText);
            },
        },
        bDestroy: true,
        iDisplayLength: 10, //Paginación
        order: [[0, "asc"]], //Ordenar (columna,orden)
    }).DataTable();
}
