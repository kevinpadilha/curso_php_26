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