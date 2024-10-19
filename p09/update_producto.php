<?php
header("Content-Type: text/html; charset=utf-8");

// Conexión a la base de datos
$link = new mysqli('localhost', 'root', 'Pepinillo2.0', 'marketzone');

// Comprobar la conexión
if ($link->connect_errno) {
    die('Falló la conexión: ' . $link->connect_error . '<br/>');
}

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener y sanitizar los datos del formulario
    $nombre = $link->real_escape_string(trim($_POST['nombre']));
    $modelo = $link->real_escape_string(trim($_POST['modelo']));
    $marca = $link->real_escape_string(trim($_POST['marca']));
    $precio = floatval($_POST['precio']);
    $detalles = $link->real_escape_string(trim($_POST['detalles']));
    $unidades = intval($_POST['unidades']);
    $imagen = $link->real_escape_string(trim($_POST['imagen']));

    // Validar que los campos requeridos no estén vacíos
    if (!empty($nombre) && !empty($modelo) && !empty($marca) && $precio > 0 && $unidades >= 0) {
        // Crear la consulta de actualización
        $query = "UPDATE productos SET 
                    nombre='$nombre', 
                    modelo='$modelo', 
                    marca='$marca', 
                    precio=$precio, 
                    detalles='$detalles', 
                    unidades=$unidades, 
                    imagen='$imagen' 
                    WHERE id=(SELECT MAX(id) FROM productos)"; // Aquí puedes ajustar cómo obtienes el ID a actualizar

        // Ejecutar la consulta y verificar si fue exitosa
        if ($link->query($query) === TRUE) {
            echo "Producto actualizado correctamente.<br>";
        } else {
            echo "Error al actualizar el producto: " . $link->error;
        }
    } else {
        echo "Por favor, completa todos los campos requeridos.";
    }
}

// Enlaces para consultar productos
echo '<a href="http://localhost/tecweb/practicas/p09/get_productos_vigentes_v2.php">Consultar Productos Vigentes</a><br>';
echo '<a href="http://localhost/tecweb/practicas/p09/get_productos_xhtml_v2.php">Consultar Productos por Tope</a>';

// Cerrar la conexión
$link->close();
?>
