<?php

    if (strlen(session_id()) < 1) {  session_start();  }

    require_once 'MDelivery.php';

    $delivery = new MDelivery();

    $titulo = isset($_POST["titulo"]) ? limpiarCadena($_POST["titulo"]) : "";

    $descripcion = isset($_POST["descripcion"]) ? limpiarCadena($_POST["descripcion"]) : "";

    $foto = isset($_POST["foto"]) ? limpiarCadena($_POST["foto"]) : "";

    $op = $_GET["op"];

    switch ($op) {
        case 'listar_salas':
            $rspta = $delivery->listar_salas();

            $data = [];

            while ($reg = pg_fetch_object($rspta)) {
                $data[] = [
                    "id_sala" => $reg->id_sala,
                    "nombre" => $reg->nombre,
                    "estado" => $reg->estado,
                    "created_at" => $reg->created_at,
                    "stdo_list_default" => $reg->stdo_list_default,
                ];
            }

            echo json_encode($data);

        break;

        case 'listar_mesas':
            $id_sala = $_POST["id_sala"];

            $rspta = $delivery->listar_mesas($id_sala);

            $data = [];

            while ($reg = pg_fetch_object($rspta)) {
                $data[] = [
                    "id_mesa" => $reg->id_mesa,
                    "nombre" => $reg->nombre,
                    "id_sala" => $reg->id_sala,
                    "estado" => $reg->estado,
                    "created_at" => $reg->created_at,
                ];
            }

            echo json_encode($data);

        break;

        case 'listar_categorias':

            $rspta = $delivery->listar_categorias();

            $data = [];

            while ($reg = pg_fetch_object($rspta)) {

                $data[] = [
                    "id_categoria" => $reg->id_categoria,
                    "nombre" => $reg->nombre,
                ];
            }

            echo json_encode($data);
        break;

        case 'listar_producto':

            $id_categoria = $_POST["id_categoria"];

            if ($id_categoria == '0') {
                $rspta = $delivery->listar_producto_all();
            } else {
                $rspta = $delivery->listar_producto($id_categoria);
            }

            $data = [];

            while ($reg = pg_fetch_object($rspta)) {
                
                $data[] = [
                    "id_producto" => $reg->id_producto,
                    "nombre" => $reg->nombre,
                    "precio_soles" => $reg->precio_soles,
                    "precio_dolar" => $reg->precio_dolar,
                    "id_categoria" => $reg->id_categoria,
                ];
            }

            echo json_encode($data);
        break;
        // case 'mostrar':
        //   $id_pedido = $_GET["id"];
        //   $rspta = $delivery->mostrar($id_pedido);

        //   echo json_encode($rspta);
        // break;

        // case 'guardaryeditar':

        //   if (empty($idgaleria)){

        //     $rspta=$delivery->insertar($titulo,$descripcion,$foto);

        //     echo $rspta;
        //   }else {

        //       $rspta=$delivery->editar($idgaleria,$titulo,$descripcion,$foto);

        //       echo $rspta;
        //   }
        //   break;

        // case 'desactivar':

        //   $rspta=$delivery->desactivar($idgaleria);

        //   echo $rspta;
        // break;

        // case 'activar':

        //   $rspta=$delivery->activar($idgaleria);

        //   echo $rspta;
        // break;

        default:
            echo 'ERROR AJAX CATEGORIA SIN OP';
        break;
    }

?>
