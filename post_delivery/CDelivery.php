<?php
if (strlen(session_id()) < 1)
    session_start();
require_once 'MDelivery.php';

$delivery= new MDelivery();

$idgaleria = isset($_POST["idgaleria"])?limpiarCadena($_POST["idgaleria"]):"";
$titulo = isset($_POST["titulo"])?limpiarCadena($_POST["titulo"]):"";
$descripcion = isset($_POST["descripcion"])?limpiarCadena($_POST["descripcion"]):"";
$foto = isset($_POST["foto"])?limpiarCadena($_POST["foto"]):"";

$op = $_GET["op"];


switch($op){

  case 'guardaryeditar':   

    if (empty($idgaleria)){

      $rspta=$delivery->insertar($titulo,$descripcion,$foto);

      echo $rspta;
    }else {         

        $rspta=$delivery->editar($idgaleria,$titulo,$descripcion,$foto);

        echo $rspta;
    }
    break;

	case 'mostrar':

        $rspta = $delivery->mostrar($idgaleria);
        
        echo json_encode($rspta);
	break;

    case 'listar':
		$rspta = $delivery->listar();
 		$data = Array();
        $cont = 0;

 		while ($reg = pg_fetch_object($rspta)){
            $cont++;
 			$data[]=array(
 				"0" => $cont,
 				"1" => $reg->titulo,
 				"2" => $reg->descripcion,
				"3" => '<img src="../multimedia/galeria/'.$reg->foto.'" class="img-thumbnail" width="100px">',
                "4" => ($reg->estado)?'<small class="label pull-right bg-red">DESHABILITADO</small>':'<small class="label pull-right bg-green">ACTIVO</small>',
                "5" => ($reg->estado)?'<center>'
                .'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idgaleria.')">'
                .'<i class="fa fa-edit"></i>'
                .'</button> '
                .'<button class="btn btn-success btn-xs" onclick="activar('.$reg->idgaleria.')">'
                .'<i class="fa fa-check-circle"></i>'
                .'</button> '
                .'<button class="btn btn-danger btn-xs" onclick="eliminar('.$reg->idgaleria.')">'
                .'<i class="fa fa-trash"></i>'
                .'</button> '
                .'</center>':'<center>'
                .'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idgaleria.')">'
                .'<i class="fa fa-edit"></i>'
                .'</button> '
                .'<button class="btn btn-danger btn-xs" onclick="desactivar('.$reg->idgaleria.')">'
                .'<i class="fa fa-close"></i>'
                .'</button> '
                .'<button class="btn btn-danger btn-xs" onclick="eliminar('.$reg->idgaleria.')">'
                .'<i class="fa fa-trash"></i>'
                .'</button>'
                .'</center>'
 			);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
 
    case 'desactivar':

  		$rspta=$delivery->desactivar($idgaleria);

   		echo $rspta;
  	break;

  	case 'activar':

  		$rspta=$delivery->activar($idgaleria);

   		echo $rspta;
  	break;

    default :
   		echo 'ERROR AJAX CATEGORIA SIN OP';
    break;
}

?>
