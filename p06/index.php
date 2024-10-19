<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php
        require_once 'src/funciones.php';
        if(isset($_GET['numero']))
        {
            $num = $_GET['numero'];
            multiplos(num: $num);
        }
    ?>

    <h2>Ejemplo de POST</h2>
    <form action="http://localhost/tecweb/practicas/p04/index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["name"]) && isset($_POST["email"]))
        {
            echo $_POST["name"];
            echo '<br>';
            echo $_POST["email"];
        }
    ?>

    <h2>Ejercio 2</h2>
    <p>Programa que genera 3 números aleatorios hasta tener i,p,i </p>
    <?php
        require_once 'src/funciones.php'; 
        ejericio2();
    ?>

    <h2>Ejercicio 3 </h2>
    <p>Ciclo while y do while</p>
    <?php
        if(isset($_GET['num'])) 
        {
            $num = (int) $_GET['num'];
            ejercicio3(num: $num);
        }
    ?>

    <h2>Ejercicio 4</h2>
    <p>Arreglo para los nums del 97 al 122</p>
    <?php
        require_once 'src/funciones.php';
        ejercicio4();
    ?>

    <h2>Ejercicio 5</h2>
    <p>identificar una persona de sexo “femenino”, cuya edad oscile entre los 18 y 35 años</p>
    <form action="http://localhost/tecweb/practicas/p06/index.php" method="post">
        Edad: <input type="number" name="age"><br>
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="gender" required>
            <option value="">Seleccione</option>
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
        </select><br><br>
        <input type="submit">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if(isset($_POST['age']) && isset($_POST['gender'])) 
            {
                $edad = $_POST['age'];
                $sexo = $_POST['gender'];
    
                ejercicio5($edad, $sexo);
            } 
        }
    ?>
    <h2>Ejercicio 6</h2>
    <p>Ingresa una matrícula o consulta el parque vehicular completo.</p>
    <form method="POST" action="">
        Buscar por matrícula: <input type="text" id="matricula" name="matricula" placeholder="Ingresa matrícula">
        <br><br>
        <input type="submit" name="buscar" value="Buscar">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['buscar'])) {
            if (isset($_POST['matricula'])) {
                $matricula = $_POST['matricula'];
            } else {
                $matricula = ''; 
            }
    
            mostrar_Coches($matricula); 
        }
    ?>
</body>
</html>