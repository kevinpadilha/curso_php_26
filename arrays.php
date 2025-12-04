<?php

/* Tipos Primitivos
Int | Integer == 1, 2, 3, ...
Float | Double == 1.0, 2.0, 3.0...
String | Char-Character == "Oi", '0'...
*/

$texto = ""; // String vazia

// // Tipos Compostos: Array | Vetor
// $numeros = array(); // array vazio
// $numeros = []; // array vazio

// $numero = 10;
// $numero = 11;
// $numeros = [10, 1, 11, 12, 20, 5.5, 52.99, "Infoserv"]; // Tam: 6

// for($i = 0; $i < 6; $i++) {
//     // echo $numeros[0]
//     echo $numeros[$i] . "<br>";
// }

// // WHILE
// $i = 0;

// while($i < 6){
//     echo $numeros[$i] . "<br>";
//     $i++;
// }

// $i = 0;

// do {
//     echo $numeros[$i] . "<br>";
//     $i++;
// } while($i < 6);


// print_r($numeros);
// echo "<br>";
// var_dump($numeros);

// echo implode ("<br>", $numeros);

// echo "<br> implode:<br>";
// echo implode(", ", $numeros);



$contPrimos = 0;
$numeroAvaliado = 3;
$contador = [];

for ($numeroAvaliado = 3; $contPrimos  < 5; $numeroAvaliado++){
    
    $antecessor = $numeroAvaliado -1;
    $ehPrimo = true;
    

    for($divisor = 2; $divisor <= $antecessor; $divisor++){

        $restoDivisao = $numeroAvaliado % $divisor;
        $ehDivisaoExata = $restoDivisao == 0;

    

        if ($ehDivisaoExata){
            $ehPrimo = false;
            break;
        }
    }

    if($ehPrimo == true){
    $contador[] = $numeroAvaliado;
    $contPrimos++;

    } // Fim FOR
    
    

}

for($i = 0; $i < 5; $i++){
    echo $contador[$i] . "<br>";
    }


/**
 * somar arrays:
 * $arrayInicio = [5 , 10, 50];
 * $arrayFim = [10, 90, 30];
 * Resultado esperado:
 * $arraySoma[15, 100, 80];
 */

/**
 * multiplicar arrays:
 * $arrayInicio = [5, 10, 8];
 * $arrayFim = [10, 100, 3];
 * Resultado esperado:
 * $arrayMultiplicado[50, 1000, 24];
 */


// SOMA

$arrayInicio = [5, 10, 50];
$arrayFim = [10, 90, 30];
$arraySoma = [];

for($i = 0, $i < 3; $i++){
    $arraySoma = $arrayInicio[$i] + $arrayFim[$i];
    echo "<br> $arraySoma = ";
    echo implode (",",$arraySoma);
}

// MULTIPLICAÇÃO

$arrayInicio = [5, 10, 50];
$arrayFim = [10, 90, 30];
$arraySoma = [];

for($i = 0; $i < 3; $i++){
    $arraySoma [] = $arrayInicio[$i] * $arrayFim[$i];
    echo "<br> $arraySoma = ";
    echo implode (",", $arraySoma);
}