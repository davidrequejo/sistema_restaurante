<?php
require '../vistas/header.php';
?>

<link rel="stylesheet" href="../public/css/styles.css">
<link rel="stylesheet" href="post_venta.css">


<body>
    <div style="padding: 11px 30px;">

        <h5 class="font-medium text-uppercase mb-0"><i class="fa fa-tasks"></i> Gestión de Ventas</h5>

    </div>
    <div class="container-fluid contenido">

        <div class="row">
            <div class="col-12  col-sm-12  col-md-12  col-lg-5  col-xl-5 col-xxl-5 cardpequeño">
                <div class="card clasecard">
                    <div class="card-header colorcarhead">
                        <h4 class="card-title text-white stiloh4"><i class="fa fa-pencil"></i> Gestión de Ventas</h4>
                    </div>
                    <div class="card-body" style=" padding-top: 5px !important;">
                        <div id="muestradetallemesa">
                            <center>SELECCIONE MESA PARA CONTINUAR -&gt;</center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12  col-sm-12  col-md-12  col-lg-7  col-xl-7 col-xxl-7 cardgrande">
                <div class="card clasecard">
                    <div class="card-header colorcarhead">
                        <h4 class="card-title text-white stiloh4"><i class="fa fa-tasks"></i> Mesas/Productos</h4>
                    </div>
                    <div class="card-body">
                        <div class="row-horizon" id="salas">
                            <span class="categories">'+value.nombre+'</span>
                            <span class="categories">'+value.nombre+'</span>
                            <span class="categories">'+value.nombre+'</span>
                        </div>
                        <br>
                        <div>
                            <div class="row-vertical-mesas" id="mesas">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hola">
            </div>
        </div>
    </div>
    <?php
    require '../vistas/footer.php';
    ?>
    <script src="venta.js"> </script>

    <script>

        // Obtenemos todos nuestros elementos del árbol DOM 
// con la clase "categories"
var elementos = document.querySelectorAll('categories');

// Recorremos cada uno de nuestros elementos
elementos.forEach(function(elemento) {

  // Agregamos un listener a cada elemento
  elemento.addEventListener('click', function() {

    console.log('Elemento ' + id + ' clickeado');
    // Realizamos el toggle de la clase
    elemento.classList.toggle('alseleccionar');
  });
  
});

        var categories = document.getElementsByClassName("categories");
        for (var i = 0; i < categories.length; i++) {
            categories[i].classList.remove("categories");
            categories[i].classList.add("alseleccionar");
            console.log('aaaaaaaaaaaaaaaaaaa');
        }
    </script>
</body>