html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida
        
        echo '<h4>Respuesta:</h4>';   
    
        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>myvar es inválida porque no tiene el signo de dolar ($).</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '<li>$house*5 es inválida porque el símbolo * no está permitido.</li>';
        echo '</ul>';
    ?>

    <h2>Ejercicio 2</h2>
    <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
    <p>$a = “ManejadorSQL”;</p>
    <p>$b = 'MySQL’;</p>
    <p>$c = &$a;</p>

    <?php
        $a = "ManejadorSQL";
        $b = 'MySQL';
        $c = &$a;

        // a)
        echo '<p> Ahora muestra el contenido de cada variable </p>';
        echo '$a: ', $a, '<br>';
        echo '$b: ', $b, '<br>';
        echo '$c: ', $c, '<br>';

        //b)
        $a = "PHP Server";
        $b = &$a;

        //mostrar de nuevo
        echo '$a: ', $a, '<br>';
        echo '$b: ', $b, '<br>';
        echo '$c: ', $c, '<br>';

        echo '<p> En el segundo bloque de asignaciones, cambiamos el valor de la variable  $a a "PHP Server, adicionalmente "$b" se le asignó el valor de "$c" <p>'
    ?>
    <h2>Ejercicio 3</h2>
    <p>Muestra el contenido de cada variable inmediatamente después de cada asignación, verificar la evolución del tipo de estas variables</p>
    <p>$a = “PHP5”;</p>
    <p>$z[] = &$a;</p>
    <p>$b = “5a version de PHP”;</p>
    <p>$c = $b*10;</p>
    <p>$a .= $b;</p>
    <p>$b *= $c;</p>
    <p>$z[0] = “MySQL”;</p>

    <?php
        unset($a, $b, $c);  
        $a = "PHP5";
        echo '$a: ', $a, '<br>';

        $z[] = &$a;
        print_r($z);

        $b = "5a version de PHP";
        echo '<br>$b: ', $b, '<br>';

        @$c = $b * 10;
        echo '$c: ', $c, '<br>';

        $a .= $b;
        echo '$a: ', $a, '<br>';

        $b =  (int) $b * $c;
        echo '$b: ', $b, '<br>';

        $z[0] = "MySQL";
        print_r($z);
?>

<h2>Ejercicio 4</h2>
<p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de la matriz  $GLOBALS o del modificador global de PHP.</p>
    
    <?php
    echo '$GLOBALS["a"]: ', $GLOBALS['a'], '<br>';
    echo '$GLOBALS["b"]: ', $GLOBALS['b'], '<br>';
    echo '$GLOBALS["c"]: ', $GLOBALS['c'], '<br>';
    echo '$GLOBALS["z"]: ', print_r($GLOBALS['z'], true), '<br>';
    ?>

<h2>Ejercicio 5</h2>
<p>Dar el valor de las variables $a, $b, $c al final del siguiente script:</p>
<p>$a = “7 personas”;</p>
<p>$b = (integer) $a;</p>
<p>$a = “9E3”; </p>
<p>$c = (double) $a; </p>

<?php
        $a = "7 personas";
        $b = (integer) $a;
        $a = "9E3";
        $c = (double) $a;
        echo '$a: ', $a, '<br>';
        echo '$b: ', $b, '<br>';
        echo '$c: ', $c, '<br>'; 
    ?>

    <h2>Ejercicio 6</h2>
    <p>Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas usando la función</p>
    <?php
        unset($a, $b, $c, $z);
        $a = "0";
        $b = "TRUE";
        $c = FALSE;
        $d = ($a OR $b);
        $e = ($a AND $c);
        $f =($a XOR $b);
        
        var_dump($a); 
        var_dump($b); 
        var_dump($c);
        var_dump($d);  
        var_dump($e); 
        var_dump($f);

        echo "c: ", var_export($c, true);
        echo "e: ", var_export($e, true);
?>

    <h2>Ejercicio 7</h2>
    
    <?php
        echo "Versión de Apache y PHP: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
        echo "Sistema operativo del servidor: " . php_uname() . "<br>";
        echo "Idioma del navegador: " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br>";
    ?>
    


</body>
</html>