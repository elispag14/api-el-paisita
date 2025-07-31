<?php
include_once '../config/conexion.php';

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $sql = "SELECT * FROM productos";
        $resultado = $conexion->query($sql);
        $datos = [];

        while ($fila = $resultado->fetch_assoc()) {
            $datos[] = $fila;
        }

        echo json_encode($datos);
        break;

    case 'POST':
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        $nombre = $data['nombre'];
        $tipo = $data['tipo'];
        $cantidad = $data['cantidad'];
        $unidad = $data['unidad'];

        $sql = "INSERT INTO productos (nombre, tipo, cantidad, unidad) VALUES ('$nombre', '$tipo', $cantidad, '$unidad')";

        if ($conexion->query($sql)) {
            echo json_encode(["mensaje" => "Producto registrado con éxito Paola"]);
        } else {
            echo json_encode(["error" => "Error al registrar producto,Paola"]);
        }
        break;
}
?>