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
                        <div class="row-horizon">
                            <span class="categories" id="SALA PRINCIPAL">SALA PRINCIPAL</span>
                            <span class="categories" id="SALA SECUNDARIA">SALA SECUNDARIA</span>
                            <span class="categories" id="SALA BALCONES">SALA BALCONES</span>
                        </div>
                        <br>
                        <div>
                            <div>
                                <a class="a_mesas">
                                    <div class="users-list-name " title="MESA 1" style="cursor:pointer;">
                                        <div>

                                            <div class="style_mesas">
                                                <img src="../public/images/mesa.png" class="imagen_mesa">
                                            </div>

                                        </div>
                                        <center><strong>MESA 1</strong></center>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
require '../vistas/footer.php';
?>