<?php
header("Content-Type: text/html; charset=utf-8");


$tope = isset($_GET['tope']) ? (int)$_GET['tope'] : 10;

// Conexión a la base de datos
$link = new mysqli('localhost', 'root', 'Pepinillo2.0', 'marketzone');

// Comprobar la conexión
if ($link->connect_errno) {
    die('Falló la conexión: ' . $link->connect_error . '<br/>');
}

// Establecer la codificación de caracteres
$link->set_charset("utf8");

// Consulta para obtener productos que no están eliminados y que tienen unidades menores o iguales a $tope
$query = "SELECT * FROM productos WHERE eliminado = 0 AND unidades <= ?";
$stmt = $link->prepare($query);
$stmt->bind_param("i", $tope);
$stmt->execute();
$result = $stmt->get_result();
$productos = $result->fetch_all(MYSQLI_ASSOC);

$stmt->close();
$link->close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Productos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    </head>
    <body>
        <h3>Productos con Unidades Menores o Iguales a <?= htmlentities($tope) ?></h3>
        <br/>
        <?php if (isset($productos) && count($productos) > 0) : ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Unidades</th>
                        <th scope="col">Detalles</th>
                        <th scope="col">Imagen</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $producto): ?>
                    <tr>
                        <th scope="row"><?= htmlentities($producto['id']) ?></th>
                        <td><?= htmlentities($producto['nombre']) ?></td>
                        <td><?= htmlentities($producto['marca']) ?></td>
                        <td><?= htmlentities($producto['modelo']) ?></td>
                        <td><?= htmlentities($producto['precio']) ?></td>
                        <td><?= htmlentities($producto['unidades']) ?></td>
                        <td><?= htmlentities($producto['detalles']) ?></td>
                        <td>
                            <img src="<?= htmlentities($producto['imagen']) ?>" alt="Imagen del producto" style="width: 200px;" />
                        </td>
                        <td>
                            <form action="http://localhost/tecweb/practicas/p09/formulario_productos.html" method="GET">
                                <input type="hidden" name="id" value="<?= htmlentities($producto['id']) ?>">
                                <button type="submit" class="btn btn-primary">Modificar</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>No se encontraron productos vigentes.</p>
        <?php endif; ?>
    </body>
</html>
