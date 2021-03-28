<?php

/*Aqui se crea, se edita, se eimina y se lista las categorias*/
require_once 'MVentas.php';

$MVentas = new MVentas();

$op = $_GET["op"];

switch ($op) {

    case 'listar':
        $rspta = $MVentas->listar();
        $data = array();
        $id = 0;

        while ($reg = pg_fetch_object($rspta)) {
            $id++;
            $data[] = array(
                "0" => $id,
                "1" => $reg->nombre,
                "2" => $reg->estado,
                "3" => $reg->id_sala
            );
        }
        $results = array(
            "sEcho" => 1, //Información para el datatables
            "iTotalRecords" => count($data), //enviamos el total registros al datatable
            "iTotalDisplayRecords" => count($data), //enviamos el total registros a visualizar
            "aaData" => $data
        );
        echo json_encode($results);

        break;
}
