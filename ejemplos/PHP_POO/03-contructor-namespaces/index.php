<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 3</title>
</head>
<body>
    <?php
        /* use ejemplos\POO\Cabecera as Cabecera;
        require_once __DIR__ . '/Cabecera.php';

        $cab = new Cabecera('El rincon de nebur', 'center');
        $cab->graficar();
        */
        use ejemplos\POO\Cabecera as Cabecera;
        require_once __DIR__ . '/Cabecera.php';

        $cab = new Cabecera('El rincon de nebur', 'center', 'http://www.cs.buap.mx');
        $cab->graficar();
    ?>

    
</body>
</html>