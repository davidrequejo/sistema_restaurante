function init() {

    $("#formulario_carousel").on("submit", function (e) { guardaryeditar(e); });

    listar_salas();

    listar_mesas('1');
}

init();  

function listar_salas(){ 

    $.post("CDelivery.php?op=listar-sala",{}, function(data, status){

        data=JSON.parse(data);

        var  pintar = '';

        $.each(data, function(index, value){

            value.id_sala == '1' ? pintar = 'paint_select_span' : pintar ='';
            
            var salas =`<span class="categories ${pintar}" id="id_sala_${value.id_sala}" onclick="listar_mesas(${value.id_sala})">${value.nombre}</span>`;

            $("#salas").append(salas);
        });
    })

     
}

function listar_mesas(id_sala) {

    $("span").removeClass('paint_select_span');

    $("#id_sala_" +id_sala ).addClass('paint_select_span');

    $("#mesas").html('<i class="fas fa-spinner fa-spin fa-6x" aria-hidden="true"></i>')

    $.post("CDelivery.php?op=listar-mesas", {id_sala:id_sala}, function(data, status) {

        data = JSON.parse(data);

        $("#mesas").html('')

        $.each(data, function (index, value) {
            
            var mesa = '' +
            '<a class="a_mesas" >'+
                '<div class="users-list-name " title="'+value.nombre +'" style="cursor:pointer;">'+
                    '<div>'+
                        '<div class="style_mesas">'+
                            '<img src="../public/images/mesa.png" class="imagen_mesa">'+
                        '</div>'+
                    ' </div>'+
                    '<center><strong>'+value.nombre+'</strong></center>'+                
                ' </div>'+
           '</a>';
           
            $("#mesas").append(mesa);
        });
    })

}