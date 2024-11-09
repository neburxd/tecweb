<?php
include_once __DIR__.'/myapi/database.php';

// Configuración de respuesta por defecto
$response = array(
    'status'  => 'error',
    'message' => 'Hubo un problema al procesar la solicitud.'
);

// Asegurarse de que se recibió el nombre del producto
if (isset($_POST['nombre'])) {
    // Convertir $_POST a un objeto JSON
    $jsonOBJ = json_decode(json_encode($_POST));

    if ($jsonOBJ === null) {
        $response['message'] = 'Error en el formato de los datos recibidos.';
    } else {
        // Verificar si el producto ya existe
        $sql = "SELECT * FROM productos WHERE nombre = '{$jsonOBJ->nombre}' AND eliminado = 0";
        $result = $conexion->query($sql);

        if ($result && $result->num_rows == 0) {
            $conexion->set_charset("utf8");
            // Intentar insertar el nuevo producto
            $sql = "INSERT INTO productos VALUES (null, '{$jsonOBJ->nombre}', '{$jsonOBJ->marca}', '{$jsonOBJ->modelo}', {$jsonOBJ->precio}, '{$jsonOBJ->detalles}', {$jsonOBJ->unidades}, '{$jsonOBJ->imagen}', 0)";
            if ($conexion->query($sql)) {
                $response['status'] =  "success";
                $response['message'] =  "Producto agregado correctamente.";
            } else {
                $response['message'] = "ERROR: No se pudo ejecutar la consulta: " . $conexion->error;
            }
        } else {
            $response['message'] = 'Ya existe un producto con ese nombre.';
        }

        if ($result) $result->free();
    }

    // Cierra la conexión
    $conexion->close();
}

// Enviar la respuesta como JSON
echo json_encode($response, JSON_PRETTY_PRINT);
?>
