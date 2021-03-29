function mostrar() {
    $('#hola').html('ggggggggggggggggg');
    var idpasajes = '0';
    $.post("CVenta.php?op=listar", {}, function(data, status) {
      data = JSON.parse(data);
     console.log(data);
    })

}
mostrar();