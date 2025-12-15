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



/**
 * Dada uma palavra informada pelo usuario,
 * verificar se a mesma forma um palíndromo.
 * 
 * Ex: Ana, subi no onibus, kaiak, Natan.
 * 
 * Um for dentro do outro
 */

// echo "<br>Palíndromo:<br>";
// $palavra = "kaiak";
// $contador = [];
// $letras = 4;
// $ehPalindromo = true;

// for($i = 0; $i <= 4; $i++) { // $i = indo

//     $letraIndo = $palavra[$i]; //k 

//     for($j = 4; $j >= 0; $j--) { // $j = voltando

//         $letraVoltando = $palavra[$j]; //k
//         $saoIguais = $letraIndo == $letraVoltando;

//         if(!$saoIguais) {
//             $ehPalindromo = false;
//             continue;
//         }
//     }
// }

// if ($saoIguais) {
//     $ehPalindromo = true;

//     echo "<br>$palavra eh palindromo<br>";
// } else {
//     echo "<br>$palavra não eh palindromo<br>";

// }


$palavra = "ana";
$contador = [];
$letras = 2;
$ehPalindromo = true;

for($i = 0; $i <= 2; $i++){

    $letraIndo = $palavra[$i]; // a
    

    for($j = 2; $j >= 0; $j--){

        $letraVoltando = $palavra[$j]; //a
        $saoIguais = $letraIndo == $letraVoltando;

        if(!$saoIguais){
            $ehPalindromo = false;
            continue;
        }
    }
}

if ($saoIguais){
    $ehPalindromo = true;

    echo "<br>$palavra eh palindromo<br>";
} else {
    echo "<br>$palavra nao eh palindromo<br>";
}


/**
 * Contar quantas vogais existem em uma frase.
 * 
 * $vogais = ['a', 'e', 'i', 'o' ,'u'];
 * $vogalMinuscula = strtolower($palavra[$i]);
 * 
 * in_array();
 * 
 * $existeVogal = in_array($vogalMincuscula, $vogais);
 * 
 * Ex:
 * $palavra = "infoserv";
 * $palavra = "infoserv";
 * 
 * Saída esperada: 3 vogais;
 */
$palavra = "infoserv";

$vogais = ['a', 'e', 'i', 'o', 'u'];
$quantidadeVogais = 0;

for ($i = 0; $i < strlen($palavra); $i++) {

    // Pega a letra atual e transforma em minúscula
    $vogalMinuscula = strtolower($palavra[$i]);

    // Verifica se a letra é uma vogal
    $existeVogal = in_array($vogalMinuscula, $vogais);

    if ($existeVogal) {
        $quantidadeVogais++;
    }
}

echo "A palavra possui $quantidadeVogais vogais";


/**
 *Contar quantas vogais existem em uma frase ou palavra.
 *Totalizando a quantidade de cada uma, ou seja, quantos A, quantos E. 
*/

$palavra = "Infoserv";

$a = 0;
$e = 0;
$i = 0;
$o = 0;
$u = 0;

for ($posicao = 0; $posicao < strlen($palavra); $posicao++) {

    $letra = strtolower($palavra[$posicao]);

    if ($letra == 'a') {
        $a++;
    }

    if ($letra == 'e') {
        $e++;
    }

    if ($letra == 'i') {
        $i++;
    }

    if ($letra == 'o') {
        $o++;
    }

    if ($letra == 'u') {
        $u++;
    }
}

echo "A: $a <br>";
echo "E: $e <br>";
echo "I: $i <br>";
echo "O: $o <br>";
echo "U: $u <br>";
