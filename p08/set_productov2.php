<?php
// Conexión a la base de datos
@$link = new mysqli('localhost', 'root', 'Pepinillo2.0', 'marketzone');

/** Comprobar la conexión */
if ($link->connect_errno) {
    die('Falló la conexión: ' . $link->connect_error . '<br/>');
}

// Obtener datos del formulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$modelo = isset($_POST['modelo']) ? $_POST['modelo'] : '';
$marca = isset($_POST['marca']) ? $_POST['marca'] : '';
$precio = isset($_POST['precio']) ? floatval($_POST['precio']) : 0;
$unidades = isset($_POST['unidades']) ? intval($_POST['unidades']) : 0;
$detalles = isset($_POST['detalles']) ? $_POST['detalles'] : ''; 

// Validar que los campos no estén vacíos
if (empty($nombre) || empty($modelo) || empty($marca) || empty($precio) || empty($unidades)) {
    echo "Todos los campos son obligatorios.";
    exit();
}

// Validar que el precio y cantidad sean números válidos
if ($precio <= 0 || $unidades <= 0) {
    echo "El precio y las unidades deben ser mayores a cero.";
    exit();
}

// Verificar si el producto ya existe
$sql_check = "SELECT * FROM productos WHERE nombre = ? AND modelo = ? AND marca = ?";
$stmt_check = $link->prepare($sql_check);
$stmt_check->bind_param("sss", $nombre, $modelo, $marca);
$stmt_check->execute();
$result = $stmt_check->get_result();

if ($result->num_rows > 0) {
    echo "Error: El producto ya existe.";
    exit();
}

// Preparar y ejecutar la query de inserción
// Comentamos la consulta anterior
// $sql_insert = "INSERT INTO productos (nombre, modelo, marca, precio, unidades, detalles) VALUES (?, ?, ?, ?, ?, ?)";
$sql_insert = "INSERT INTO productos (nombre, modelo, marca, precio, unidades, detalles) VALUES (?, ?, ?, ?, ?, ?)"; // Nueva consulta con nombres de columnas

$stmt_insert = $link->prepare($sql_insert);

// Comprobar si la consulta se preparó correctamente
if (!$stmt_insert) {
    die("Error en la preparación de la consulta: " . $link->error);
}

$stmt_insert->bind_param("sssdiss", $nombre, $modelo, $marca, $precio, $unidades, $detalles); 

if ($stmt_insert->execute()) {
    echo "Producto registrado exitosamente.<br>";
    echo "Nombre: $nombre<br>";
    echo "Modelo: $modelo<br>";
    echo "Marca: $marca<br>";
    echo "Precio: $precio<br>";
    echo "Unidades: $unidades<br>";
    echo "Detalles: $detalles<br>"; 
} else {
    echo "Error al insertar: " . $stmt_insert->error;
}

// Cerrar conexiones
$stmt_check->close();
$stmt_insert->close();
$link->close();
?>
