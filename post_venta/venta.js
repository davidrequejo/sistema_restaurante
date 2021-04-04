function init(){


    listar_mesas();
   // listar_salas();

};

function limpiar() {
    $("#mesas").val("");
}

/*function listar_salas(){

    $.post("CVenta.php?op=listar_salas",{}, function(data, status){
        data=JSON.parse(data);
        console.log(data);
        $.each(data, function(index, value){

            var salas =''+
            '<span class="categories">'+value.nombre+'</span>'+
            '';
            $("#salas").append(salas);
            console.log(salas);

        });
    })

}*/


function listar_mesas(id_sala) {
    id_sala =1;
    console.log(id_sala);
    $.post("CVenta.php?op=listar_mesas", {id_sala:id_sala}, function(data, status) {
      data = JSON.parse(data);
        console.log(data);
        $.each(data, function (index, value) {
            //console.log(value.nombre);
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
           '</a>'+
            '';
            $("#mesas").append(mesa);
        });
    })

}
init();