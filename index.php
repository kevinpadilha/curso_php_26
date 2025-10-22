<?php
/** 
 * string 'texto qualquer' || 'A' || "A" ||
 * char || character 'A'
 * int || integer 23
 * float 23.8  // valor real pequeno
 * double 23.8 // valor real grande
 * decimal 23.8
 */

$aviao = "Boeing747";
$valor1 = 10; 
$valor2 = 15;
$soma = $valor1 + $valor2; // 10 + 15 -> 25
// mesma coisa
$soma = $soma + 3; // 28
$soma +=3; //28

echo "Soma é: " . $soma; 
echo "<br>";

$valor1 = 30;
$valor = 15;
$subtracao = $valor1 - $valor2; 
$subtracao = $subtracao - 3;
echo "Subtracao é: " . $subtracao;
echo "<br>"; 

echo "A subtracao é: exemplo! (bksp) &nbsp;&nbsp;&nbsp;<br>"; // tag html para adicionar espaços

$valor9 = 50;
$valor8 = 25;
$divisao = $valor9 / $valor8;

echo "A divisao é: " . $divisao;
echo "<br>";

$valor3 = 60;
$valor4 = 97;
$multiplicacao = $valor3 * $valor4;
echo "A multiplicacao é: " . $multiplicacao;
echo "<br>";

$valor3 = 50;
$valor4 = 25;
$restoDivisao = $valor4 % $valor3;
echo "O resto é: " . $restoDivisao;


// Tabuada do 5
$numero = 5;
echo"<br> Tabuada do $numero<br>"; 
echo "1 x $numero = " . $numero * 1 . "<br>"; 
echo "2 x $numero = " . $numero * 2 . "<br>"; 
echo "3 x $numero = " . $numero * 3 . "<br>";
echo "4 x $numero = " . $numero * 4 . "<br>";
echo "5 x $numero = " . $numero * 5 . "<br>";
echo "6 x $numero = " . $numero * 6 . "<br>";
echo "7 x $numero = " . $numero * 7 . "<br>";
echo "8 x $numero = " . $numero * 8 . "<br>";
echo "9 x $numero = " . $numero * 9 . "<br>";
echo "10 x $numero = " . $numero * 10 . "<br>";

// Tabuada do 6
$numero = 6; 
echo"<br> Tabuada do $numero<br>";
echo "1 x $numero = " . $numero * 1 . "<br>"; 
echo "2 x $numero = " . $numero * 2 . "<br>"; 
echo "3 x $numero = " . $numero * 3 . "<br>";
echo "4 x $numero = " . $numero * 4 . "<br>";
echo "5 x $numero = " . $numero * 5 . "<br>";
echo "6 x $numero = " . $numero * 6 . "<br>";
echo "7 x $numero = " . $numero * 7 . "<br>";
echo "8 x $numero = " . $numero * 8 . "<br>";
echo "9 x $numero = " . $numero * 9 . "<br>";
echo "10 x $numero = " . $numero * 10 . "<br>";

// Media Aritmetica

echo "<br>Media Aritmetica<br>";

$numero1 = 18;
$numero2 = 9;
$numero3 = 20; 

$mediaAritmetica = ($numero1 + $numero2 + $numero3) / 3;

echo "<br>A media aritmetica é: $mediaAritmetica<br>";

// Media Ponderada

echo "Media Ponderada <br>";

$nota1 = 5;
$nota2 = 7;
$nota3 = 3;

$peso1 = 9;
$peso2 = 10;
$peso3 = 11;

$mpNumerador = ($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3);
$mpDenominador = 9 + 10 + 11;

$mediaPonderada = $mpNumerador / $mpDenominador; 

echo "<br>A media ponderada e: $mediaPonderada<br>";

// Media Harmonica

echo "<br>Media Harmonica<br>";

$numero1 = 14;
$numero2 = 8;
$numero3 = 24;

$quantidadedeProvas = 3;
$mhDenominador = 3 / (( 1 / $numero1) + (1 / $numero2) + (1 / $numero3));
$mediaHarmonica = round($quantidadedeProvas / $mhDenominador, 2);

echo "<br>A media harmonica e: $mediaHarmonica<br>";

// Calcular o volume de uma esfera com raio 5cm.
// Dica: Elevar ao cubo -> 2 ** 3 = 8 . PI = 3.14
CONST PI = 3.14;
$raioAoCubo = 5 ** 3; 
$fracao = 4/3;
$volumeEsfera = $fracao * PI * $raioAoCubo

// 2 calcular quantos segundos tem em 2 horas e 30 minutos
$horas = 2;
$minutos = 30;
$minutosparaSegundos = 30 * 60; / / 1800

$horasparaMinutos = 2 * 60; // 120
$horasSegundos = $horasparaMinutos * 60; // 7200

$totalemsegundos = $horasSegundos + $minutosparaSegundos; // 7200 + 1800 = 9000
echo "<br>o total em segundos é: $totalemSegundos<br>";


// calcular imc de uma pessoa. podem usar quaisquer valores
$peso = 70;
$altura = 1.88;
$imc = round($peso / ($altura ** 2), 2 );

// converter graus celsius para fahrenheit. 35c -> ?f
$celsius = 35; 
$fahreinheit = ($celsius * 9/5) + 32;


// aplicar a formula de bhaskara para a seguinte equacao do segundo grau
// $a = 1; $b = -3; $c = -4;
$a = 1;
$b = -3;
$c = 4;
$delta = ($b ** 2) - (4 * $a * $c);
$x1 = (-$b + sqrt($delta)) / (2 * $a);
$x2 = (-$b - sqrt($delta)) / (2 * $a);
echo "<br>"0 x1 é: $x1 





