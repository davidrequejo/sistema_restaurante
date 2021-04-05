<?php
  if (strlen(session_id()) < 1)
    session_start();

  require_once 'MDelivery.php';

  $delivery   = new MDelivery();

  $titulo     = isset($_POST["titulo"])?limpiarCadena($_POST["titulo"]):"";

  $descripcion= isset($_POST["descripcion"])?limpiarCadena($_POST["descripcion"]):"";

  $foto       = isset($_POST["foto"])?limpiarCadena($_POST["foto"]):"";

  $op         = $_GET["op"];

  switch($op){

    case 'listar-sala':

      $rspta = $delivery->listar_salas();

      $data = Array();

      while ($reg = pg_fetch_object($rspta)){ 

        $data[]=array(
          "id_sala" => $reg->id_sala,
          "nombre" => $reg->nombre,
          "estado" => $reg->estado,
          "created_at" => $reg->created_at,        
        );
      }
      
      echo json_encode($data);

    break;

    case 'listar-mesas':
      $id_sala       = $_POST["id_sala"] ;

      $rspta = $delivery->listar_mesas($id_sala);

      $data = Array();

      while ($reg = pg_fetch_object($rspta)){ 

        $data[]=array(
          "id_mesa" => $reg->id_mesa,
          "nombre" => $reg->nombre,
          "id_sala" => $reg->id_sala,
          "estado" => $reg->estado,
          "created_at" => $reg->created_at,        
        );
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

    default :
      echo 'ERROR AJAX CATEGORIA SIN OP';
    break;
  }

?>
