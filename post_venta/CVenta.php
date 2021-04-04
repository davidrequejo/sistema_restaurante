<?php

/*Aqui se crea, se edita, se eimina y se lista las categorias*/
require_once 'MVentas.php';

$MVentas = new MVentas();

$op = $_GET["op"];

switch ($op) {

    case 'listar_salas':
        $rspta = $MVentas->listar_salas();
        $data = array();
        $id = 0;

        while ($reg = pg_fetch_object($rspta)) {
            $id++;
            $data[] = array(
                "id" => $id,
                "nombre" => $reg->nombre
            );
        }
        echo json_encode($data);

    break;

    case 'listar_mesas':
        $id_sala = $_POST["id_sala"];
        $rspta = $MVentas->listar_mesas($id_sala);
        $data = array();
        $id = 0;

        while ($reg = pg_fetch_object($rspta)) {
            $id++;
            $data[] = array(
                "id" => $id,
                "nombre" => $reg->nombre,
                "sala" => $reg->sala,
            );
        }

        echo json_encode($data);

        break;
}
