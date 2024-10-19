<?php
    function multiplos($num){
        if ($num%5==0 && $num%7==0)
            {
                echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
            }
            else
            {
                echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
            }
    }
    


    function esImpar($num) {
    return $num % 2 != 0;
    }

    function esPar($num) {
    return $num % 2 == 0;
    }

    function ejericio2() {
    $matriz = array(); 
    $iteraciones = 0;  
    $totalNumerosGenerados = 0; 


    do {
        $iteraciones++;
        
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $num3 = rand(1, 100);
        
        $matriz[] = array($num1, $num2, $num3);
        
        $totalNumerosGenerados += 3;

    } while (!(esImpar($num1) && esPar($num2) && esImpar($num3)));

    echo "<h3>Se obtuvieron $totalNumerosGenerados números en $iteraciones iteraciones.</h3>";
    echo "<table border='1' style='margin:auto;'>";
    echo "<tr><th>Número 1</th><th>Número 2</th><th>Número 3</th></tr>";
    foreach ($matriz as $fila) {
        echo "<tr><td>{$fila[0]}</td><td>{$fila[1]}</td><td>{$fila[2]}</td></tr>";
    }
    echo "</table>";
    }




    function ejercicio3($num){
        if ($num > 0) {  
            $iteraciones = 0;

            do {
                $aleatorio = rand(1, 100); 
                $iteraciones++;
            } while ($aleatorio % $num != 0);

            echo "<h3>Se encontró el número $aleatorio en $iteraciones iteraciones. Es múltiplo de $num.</h3>";
        } 
        else {
        echo "<h3>Por favor, ingresa un número válido mayor a 0.</h3>";
        }
    } 



    function ejercicio4(){
        $arreglo = array();

        for ($i = 97; $i <= 122; $i++) {
            $arreglo[$i] = chr($i);  
        }
        
        echo "<table border='1' style='width:50%; margin:auto; text-align:center;'>";
        echo "<tr><th>Índice</th><th>Letra</th></tr>";
        
        foreach ($arreglo as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    }



    function ejercicio5($edad, $sexo) {
            if($sexo == "femenino" && $edad >= 18 && $edad <= 35)
            {
                echo "<p>Bienvenida, usted está en el rango de edad permitido.</p>";
            } 
            else 
            {
                echo "<p>No cumple con los criterios de aceptación.</p>";
            }
    }    



    function ejercicio6() {
        return array( 'XYZ9876' => array(
                'Auto' => array(
                    'Marca' => 'Volkswagen',
                    'Modelo' => 2022,
                    'Tipo' => 'sedan'
                ),
                'Propietario' => array(
                    'Nombre' => 'Ana Torres',
                    'Ciudad' => 'Guadalajara',
                    'Dirección' => 'Av. Central 123'
                )
            ),
            'LMN1234' => array(
                'Auto' => array(
                    'Marca' => 'Nissan',
                    'Modelo' => 2020,
                    'Tipo' => 'hatchback'
                ),
                'Propietario' => array(
                    'Nombre' => 'Memito',
                    'Ciudad' => 'Monterrey',
                    'Dirección' => 'Calle 45, Col. Del Valle'
                )
            ),
            'QWE5678' => array(
                'Auto' => array(
                    'Marca' => 'Hyundai',
                    'Modelo' => 2021,
                    'Tipo' => 'camioneta'
                ),
                'Propietario' => array(
                    'Nombre' => 'el FER',
                    'Ciudad' => 'Cancún',
                    'Dirección' => 'Calle Playa del Carmen 87'
                )
            ),
            'RTY4321' => array(
                'Auto' => array(
                    'Marca' => 'Kia',
                    'Modelo' => 2019,
                    'Tipo' => 'sedan'
                ),
                'Propietario' => array(
                    'Nombre' => 'Estrellita',
                    'Ciudad' => 'Tijuana',
                    'Dirección' => 'Boulevard Insurgentes 200'
                )
            ),
            'ASD8765' => array(
                'Auto' => array(
                    'Marca' => 'Chevrolet',
                    'Modelo' => 2018,
                    'Tipo' => 'hatchback'
                ),
                'Propietario' => array(
                    'Nombre' => 'Bruno',
                    'Ciudad' => 'Oaxaca',
                    'Dirección' => 'Calle 5 de Febrero 45'
                )
            ),
            'FGH5678' => array(
                'Auto' => array(
                    'Marca' => 'Subaru',
                    'Modelo' => 2023,
                    'Tipo' => 'camioneta'
                ),
                'Propietario' => array(
                    'Nombre' => 'Javier García',
                    'Ciudad' => 'Oaxaca',
                    'Dirección' => 'Avenida 2000, Fracc. Jardines'
                )
            ),
            'JKL3456' => array(
                'Auto' => array(
                    'Marca' => 'Fiat',
                    'Modelo' => 2021,
                    'Tipo' => 'sedan'
                ),
                'Propietario' => array(
                    'Nombre' => 'Chao',
                    'Ciudad' => 'Puebla',
                    'Dirección' => 'Calle 12 de Octubre 14'
                )
            ),
            'NOP1234' => array(
                'Auto' => array(
                    'Marca' => 'Peugeot',
                    'Modelo' => 2020,
                    'Tipo' => 'hatchback'
                ),
                'Propietario' => array(
                    'Nombre' => 'Andrés ',
                    'Ciudad' => 'Puebla',
                    'Dirección' => 'Paseo de la Reforma 245'
                )
            ),
            'XYZ4567' => array(
                'Auto' => array(
                    'Marca' => 'Chrysler',
                    'Modelo' => 2022,
                    'Tipo' => 'camioneta'
                ),
                'Propietario' => array(
                    'Nombre' => 'Natalia',
                    'Ciudad' => 'Mérida',
                    'Dirección' => 'Calle 60 350'
                )
            ),
            'ABC7890' => array(
                'Auto' => array(
                    'Marca' => 'Mitsubishi',
                    'Modelo' => 2023,
                    'Tipo' => 'sedan'
                ),
                'Propietario' => array(
                    'Nombre' => 'Rafael',
                    'Ciudad' => 'Yucatán',
                    'Dirección' => 'Calle de la Libertad 44'
                )
            ),
            'DEF6543' => array(
                'Auto' => array(
                    'Marca' => 'Mazda',
                    'Modelo' => 2021,
                    'Tipo' => 'hatchback'
                ),
                'Propietario' => array(
                    'Nombre' => 'Patricia Mendoza',
                    'Ciudad' => 'Hermosillo',
                    'Dirección' => 'Av. 4 Norte 200'
                )
            ),
            'GHI0987' => array(
                'Auto' => array(
                    'Marca' => 'Toyota',
                    'Modelo' => 2020,
                    'Tipo' => 'camioneta'
                ),
                'Propietario' => array(
                    'Nombre' => 'Fernando López',
                    'Ciudad' => 'Chihuahua',
                    'Dirección' => 'Calle 10 56'
                )
            ),
            'JKL5432' => array(
                'Auto' => array(
                    'Marca' => 'Dodge',
                    'Modelo' => 2019,
                    'Tipo' => 'sedan'
                ),
                'Propietario' => array(
                    'Nombre' => 'Marco',
                    'Ciudad' => 'CDMX',
                    'Dirección' => 'Boulevard Venustiano Carranza 44'
                )
            ),
            'RST3210' => array(
                'Auto' => array(
                    'Marca' => 'Hyundai',
                    'Modelo' => 2022,
                    'Tipo' => 'hatchback'
                ),
                'Propietario' => array(
                    'Nombre' => 'Isabel Soto',
                    'Ciudad' => 'Acapulco',
                    'Dirección' => 'Calle Principal 100'
                ),
            ),
            'TUP1856' => array(
                'Auto' => array(
                    'Marca' => 'Hyundai',
                    'Modelo' => 2022,
                    'Tipo' => 'hatchback'
                ),
                'Propietario' => array(
                    'Nombre' => 'Montero',
                    'Ciudad' => 'Acapulco',
                    'Dirección' => 'Calle Principal 100'
                )
            ),
        );
    }
    
    
    function mostrar_Coches($matricula = '') {
        $parqueVehicular = ejercicio6();

        if (!empty($matricula)) {
            if (isset($parqueVehicular[$matricula])) {
                $auto = $parqueVehicular[$matricula];
                echo "<h3>Información del vehículo con matrícula $matricula:</h3>";
                echo "<p>Marca: " . $auto['Auto']['Marca'] . "</p>";
                echo "<p>Modelo: " . $auto['Auto']['Modelo'] . "</p>";
                echo "<p>Tipo: " . $auto['Auto']['Tipo'] . "</p>";
                echo "<p>Propietario: " . $auto['Propietario']['Nombre'] . "</p>";
                echo "<p>Ciudad: " . $auto['Propietario']['Ciudad'] . "</p>";
                echo "<p>Dirección: " . $auto['Propietario']['Dirección'] . "</p>";
            } else {
                echo "<p>No se encontró ningún vehículo con esa matrícula.</p>";
            }
        } else {
            echo "<h3>Todos los vehículos registrados:</h3>";
            echo "<ul>";
            foreach ($parqueVehicular as $mat => $auto) {
                echo "<li>Matrícula: $mat - " . $auto['Auto']['Marca'] . " " . $auto['Auto']['Modelo'] . " (" . $auto['Auto']['Tipo'] . ") - Propietario: " . $auto['Propietario']['Nombre'] . "</li>";
            }
            echo "</ul>";
        }
    }
?>


