<?php
require '../vistas/header.php';
?>

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
                        <div class="col-md-12">
                            <div id="buscador">
                                <div id="searchContaner">
                                    <div class="form-group has-feedback2">
                                        <label class="control-label"></label>
                                        <input style=" background-color: #FFFFBF;" type="text" class="form-control" name="buscar" id="buscar" onkeyup="this.value=this.value.toUpperCase();" autocomplete="off" placeholder="BUSCAR CLIENTE">
                                        <i class="fa fa-search " style="font-size: 10px !important;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive m-t-10">
                                <table id="carrito" class="table table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="height: 20px !important;margin: 0 !important; padding: 0 !important; line-height: 2 !important;">Cantidad</th>
                                            <th style="height: 20px !important;margin: 0 !important; padding: 0 !important; line-height: 2 !important;">Descripción</th>
                                            <th style="height: 20px !important;margin: 0 !important; padding: 0 !important; line-height: 2 !important;">Precio</th>
                                            <th style="height: 20px !important;margin: 0 !important; padding: 0 !important; line-height: 2 !important;">Importe</th>
                                            <th style="height: 20px !important;margin: 0 !important; padding: 0 !important; line-height: 2 !important;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" colspan="5">
                                                <h4>NO HAY DETALLES AGREGADOS</h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <input class="form-control" type="text" name="observacionespedido" id="observacionespedido" onkeyup="this.value=this.value.toUpperCase();" autocomplete="off" placeholder="Ingrese Observaciones de Pedido">
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive m-t-10">
                                <table id="carritototal" class="table-responsive">
                                    <tbody>
                                        <tr>
                                            <td width="20"></td>
                                            <td width="250">
                                                <h6 class="text-right"><label>Gravado 18.00%:</label></h6>
                                            </td>

                                            <td width="250">
                                                <h6 class="text-right"><strong>S/</strong><label id="lblsubtotal" name="lblsubtotal">0.00</label></h6>
                                                <input type="hidden" name="txtsubtotal" id="txtsubtotal" value="0.00">
                                            </td>

                                            <td width="250">
                                                <h6 class="text-right"><label>Exento 0%:</label></h6>
                                            </td>

                                            <td width="250">
                                                <h6 class="text-right"><strong>S/</strong><label id="lblsubtotal2" name="lblsubtotal2">0.00</label></h6>
                                                <input type="hidden" name="txtsubtotal2" id="txtsubtotal2" value="0.00">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <h6 class="text-right"><label>IGV 18.00%:<input type="hidden" name="iva" id="iva" autocomplete="off" value="18.00"></label></h6>
                                            </td>

                                            <td>
                                                <h6 class="text-right"><strong>S/</strong><label id="lbliva" name="lbliva">0.00</label></h6>
                                                <input type="hidden" name="txtIva" id="txtIva" value="0.00">
                                            </td>

                                            <td>
                                                <h6 class="text-right"><label>Desc. 0.00%:<input type="hidden" name="descuento" id="descuento" value="0.00"></label></h6>
                                            </td>

                                            <td>
                                                <h6 class="text-right"><strong>S/</strong><label id="lbldescuento" name="lbldescuento">0.00</label></h6>
                                                <input type="hidden" name="txtDescuento" id="txtDescuento" value="0.00">
                                            </td>
                                        </tr>
                                        <tr style=" background-color: #444; color: #00FF00;">
                                            <td></td>
                                             <td colspan="2">
                                                <h4 class="text-left" style=" padding: 0 !important; margin: 0 !important; line-height:1.7"><label style=" padding: 0 !important; margin: 0 !important; font-size: 20px;">&nbsp;TOTAL A PAGAR:</label></h4>
                                            </td>
                                            <td colspan="2">
                                                <h4 class="text-right" style=" padding: 0 !important; margin: 0 !important; line-height:1.7; font-size: 20px;"> <strong>S/</strong><label id="lbltotal" name="lbltotal" style=" padding: 0 !important; margin: 0 !important; font-size: 20px; padding-right: 6px !important;">0.00</label></h4>
                                                <input type="hidden" name="txtTotal" id="txtTotal" value="0.00">
                                                <input type="hidden" name="txtTotalCompra" id="txtTotalCompra" value="0.00">
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
                             <!-- aqui se listan las salas -->
                        </div>
                        <div class="col-md-12">
                            <div id="buscador">
                                <div id="searchContaner">
                                    <div class="form-group has-feedback2">
                                        <label class="control-label"></label>
                                        <input style=" background-color: #FFFFBF;" type="text" class="form-control" name="busquedaproductov" id="busquedaproductov" onkeyup="this.value=this.value.toUpperCase();" autocomplete="off" placeholder="Realice la Búsqueda del Producto por Nombre">
                                        <i class="fa fa-search "></i>
                                    </div>
                                </div>
                            </div>
                            <div id="productList2">
                                <div class="row row-vertical" id="mesas">
                                     <!-- aqui se listan las mesas -->
                                </div>
                            </div>
                        </div>
                        <div id="tbllistado_carousel">
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require '../vistas/footer.php'; ?>
    <script src="delivery.js"></script>

</body>

