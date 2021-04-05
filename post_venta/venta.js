function init(){
   listar_mesas('1');
   listar_salas();
   productos();
   $("#card_mesas").show();
   $("#card_producto").hide();

};


function listar_salas(){ 

    $.post("CVenta.php?op=listar_salas",{}, function(data, status){

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
    //id_sala =1;
    //console.log(id_sala);
    $("#card_mesas").show();
    
    $("#card_producto").hide();

    $("#mesas").html('<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>');
    $.post("CVenta.php?op=listar_mesas", {id_sala:id_sala}, function(data, status) {
      data = JSON.parse(data);
        console.log(data);
        $("#mesas").html('');
        $.each(data, function (index, value) {
            //console.log(value.nombre);
            var mesa = '' +
            '<a class="a_mesas"  style="text-decoration: none;color: black;" onclick="productos('+value.id+')" >'+
            '<div class="users-list-name " title="'+value.nombre +'" style="cursor:pointer;">'+
                '<div>'+
                    '<div class="style_mesas">'+
                        '<img src="../public/images/mesa.png" class="imagen_mesa">'+
                    '</div>'+
               ' </div>'+
                '<center><strong>'+value.nombre+'</strong></center>'+
               
           ' </div>'+
           '</a>'+
            '';
            $("#mesas").append(mesa);
        });
    })
    

}

function productos(id_mesa){

    $("#card_mesas").hide();
    $("#card_producto").show();

}

init();