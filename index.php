<?php
/** 
 * string 'texto qualquer' || 'A' || "A" ||
 * char || character 'A'
 * int || integer 23
 * float 23.8  // valor real pequeno
 * double 23.8 // valor real grande
 * decimal 23.8
 */

// $aviao = "Boeing747";
// $valor1 = 10; 
// $valor2 = 15;
// $soma = $valor1 + $valor2; // 10 + 15 -> 25
// // mesma coisa
// $soma = $soma + 3; // 28
// $soma +=3; //28

// echo "Soma é: " . $soma; 
// echo "<br>";

// $valor1 = 30;
// $valor = 15;
// $subtracao = $valor1 - $valor2; 
// $subtracao = $subtracao - 3;
// echo "Subtracao é: " . $subtracao;
// echo "<br>"; 

// echo "A subtracao é: exemplo! (bksp) &nbsp;&nbsp;&nbsp;<br>"; // tag html para adicionar espaços

// $valor9 = 50;
// $valor8 = 25;
// $divisao = $valor9 / $valor8;

// echo "A divisao é: " . $divisao;
// echo "<br>";

// $valor3 = 60;
// $valor4 = 97;
// $multiplicacao = $valor3 * $valor4;
// echo "A multiplicacao é: " . $multiplicacao;
// echo "<br>";

// $valor3 = 50;
// $valor4 = 25;
// $restoDivisao = $valor4 % $valor3;
// echo "O resto é: " . $restoDivisao;


// // Tabuada do 5
// $numero = 5;
// echo"<br> Tabuada do $numero<br>"; 
// echo "1 x $numero = " . $numero * 1 . "<br>"; 
// echo "2 x $numero = " . $numero * 2 . "<br>"; 
// echo "3 x $numero = " . $numero * 3 . "<br>";
// echo "4 x $numero = " . $numero * 4 . "<br>";
// echo "5 x $numero = " . $numero * 5 . "<br>";
// echo "6 x $numero = " . $numero * 6 . "<br>";
// echo "7 x $numero = " . $numero * 7 . "<br>";
// echo "8 x $numero = " . $numero * 8 . "<br>";
// echo "9 x $numero = " . $numero * 9 . "<br>";
// echo "10 x $numero = " . $numero * 10 . "<br>";

// // Tabuada do 6
// $numero = 6; 
// echo"<br> Tabuada do $numero<br>";
// echo "1 x $numero = " . $numero * 1 . "<br>"; 
// echo "2 x $numero = " . $numero * 2 . "<br>"; 
// echo "3 x $numero = " . $numero * 3 . "<br>";
// echo "4 x $numero = " . $numero * 4 . "<br>";
// echo "5 x $numero = " . $numero * 5 . "<br>";
// echo "6 x $numero = " . $numero * 6 . "<br>";
// echo "7 x $numero = " . $numero * 7 . "<br>";
// echo "8 x $numero = " . $numero * 8 . "<br>";
// echo "9 x $numero = " . $numero * 9 . "<br>";
// echo "10 x $numero = " . $numero * 10 . "<br>";

// // Media Aritmetica

// echo "<br>Media Aritmetica<br>";

// $numero1 = 18;
// $numero2 = 9;
// $numero3 = 20; 

// $mediaAritmetica = ($numero1 + $numero2 + $numero3) / 3;

// echo "<br>A media aritmetica é: $mediaAritmetica<br>";

// // Media Ponderada

// echo "Media Ponderada <br>";

// $nota1 = 5;
// $nota2 = 7;
// $nota3 = 3;

// $peso1 = 9;
// $peso2 = 10;
// $peso3 = 11;

// $mpNumerador = ($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3);
// $mpDenominador = 9 + 10 + 11;

// $mediaPonderada = $mpNumerador / $mpDenominador; 

// echo "<br>A media ponderada e: $mediaPonderada<br>";

// // Media Harmonica

// echo "<br>Media Harmonica<br>";

// $numero1 = 14;
// $numero2 = 8;
// $numero3 = 24;

// $quantidadedeProvas = 3;
// $mhDenominador = 3 / (( 1 / $numero1) + (1 / $numero2) + (1 / $numero3));
// $mediaHarmonica = round($quantidadedeProvas / $mhDenominador, 2);

// echo "<br>A media harmonica e: $mediaHarmonica<br>";

// // Calcular o volume de uma esfera com raio 5cm.
// // Dica: Elevar ao cubo -> 2 ** 3 = 8 . PI = 3.14
// CONST PI = 3.14;
// $raioAoCubo = 5 ** 3; 
// $fracao = 4/3;
// $VolumeEsfera = $fracao * PI * $raioAoCubo;
// echo "<br>O volume da Esfera e: $VolumeEsfera <br>";  

// // 2 calcular quantos segundos tem em 2 horas e 30 minutos
// $horas = 2;
// $minutos = 30;
// $minutosparaSegundos = 30 * 60; // 1800

// $horasparaMinutos = 2 * 60; // 120
// $horasSegundos = $horasparaMinutos * 60; // 7200

// $totalemSegundos = $horasSegundos + $minutosparaSegundos; // 7200 + 1800 = 9000
// echo "<br>o total em segundos e: $totalemSegundos<br>";


// // calcular imc de uma pessoa. podem usar quaisquer valores
// $peso = 70;
// $altura = 1.88;
// $imc = round($peso / ($altura ** 2), 2 );
// echo "<br>O IMC é: $imc<br>";

// // converter graus celsius para fahrenheit. 35c -> ?f
// $celsius = 35; 
// $fahreinheit = ($celsius * 9/5) + 32;
// echo "<br>A temperatura em graus fahrenheit e: $fahreinheit °F<br>";


// // aplicar a formula de bhaskara para a seguinte equacao do segundo grau
// // $a = 1; $b = -3; $c = -4;
// // sqrt -> pow -> ** = potenciacao
// $a = 1;
// $b = -3;
// $c = -4;
// $delta = ($b ** 2) - (4 * $a * $c);
// $x1 = (-$b + sqrt($delta)) / (2 * $a);
// $x2 = (-$b - sqrt($delta)) / (2 * $a);
// echo "<br>O x1 e: $x1 e o X2 e: $x2<br>";


// // Calcular a Area de um triangulo que tenha uma base de 8cm
// // e sua altura de 6cm.
// $base = 8;
// $altura = 6;
// $areaTriangulo = ($base * $altura) / 2;
// echo "<br>A area do triangulo é: $areaTriangulo<br>";

// // Converter graus Fahrenheit para Celsius. 95° -> ?°F (35)
// $fahreinheit = 95;
// $celsius = 5/9 * ($fahreinheit - 32);
// echo "<br>A temperatura em graus celsius é: $celsius °C<br>";

// // Converter graus Celsius para Kelvin. 35°c -> ?°K
// $celsius = 35;
// $kelvin = $celsius + 273.15;
// echo "<br>A temperatura em graus Kelvin e: $kelvin °K <br>";

// // Converter graus Kelvin para Celsius. ?°K -> ?°C
// $kelvin = 308.15; 
// $celsius = $kelvin - 273.15;
// echo "<br>A temperatura em graus Celsius e: $celsius °C <br>";

// /*
// $soma = 2
// $soma += 5; // 7
// == igual a
// != diferente de igual a (<>)
// 1 < 2
// 3 > 2 
// 0 <= 1
// 6 >= 6

// E
// &&
// $tenhoDinheiro && $tenhoVontadeTomarCafe
// OU
// ||
// $tenhoDinheiro || $ganheiDinheiro

// Tabela verdade
// V V == V
// V F == F
// F V == F 
// F F == F(v)
// */

// $tenhoDinheiro = true;
// $tenhoVontadeTomarCafe = false;

// if ($tenhoDinheiro && $tenhoVontadeTomarCafe)
// {
//     echo "vou tomar cafe<br>";
     
// }else if ($tenhoDinheiro && !$tenhoVontadeTomarCafe){
//     echo "vou comprar chocolate<br>";
// } else {
//     echo "nao tenho vontade de nada<br>";
// }

// $soma = 10 + 10;

// /* Simular o funcionamento de uma calculadora
// utilizar if, else if, else.
// Operadores: + - * /
// Dica: vao ter uma variavel $operador.
// */ 


// // Dados da calculadora
// $valor1 = 2;
// $operador = "-";
// $valor2 = 6;

// if ($valor1 < $valor2){
//     $valorAuxiliar = $valor1;
//     $valor1 = $valor2;
//     $valor2 = $valorAuxiliar;
// }

// //Calculadora
// if ($operador == "+"){
//     $soma = $valor1 + $valor2;
//     echo "Soma é: " . $soma; 
//     echo "<br>";
// } else if ($operador == "-"){
//     $soma = $valor1 - $valor2;
//     echo "soma é: " . $soma;
//     echo "<br>";
// } else if ($operador == "*"){
//     $soma = $valor1 * $valor2;
//     echo "a soma é: " . $soma;
//     echo "<br>";
// } else if ($operador == "/"){
//     $soma = $valor1 / $valor2;
//     echo "a soma é: " . $soma;
//     echo "<br>";
// }

// /* Fazer exercicio 8 da pagina 15 da apostila
// Não utilizar array.
// Utilizar os exercicios das medias e aplicar
// a logica que valida se o aluno passou de ano.
// */

// $mediageral = 6.33;
// $nota1 = 5;
// $nota2 = 10;
// $nota3 = 4; 
// $qtdProvas = 3;

// $mgDenominador = 3 / ((1 / $nota1)) + ((1 / $nota2)) + ((1 / $nota3));
// $calcMedia = round($qtdProvas / $mgDenominador, 2);

// if ($calcMedia >= $mediageral){
//     echo "aprovado<br>";
// } else {
//     echo "reprovado<br>";
// }



// /**
//  * Fazer exercicio 9 da pagina 16.
// */

// $nome = "Fernanda";
// $idade = 21;
// $maioridade = 18;

// if ($idade > $maioridade){
//     echo "$nome é maior de idade<br>";
// } else if ($idade < $maioridade){
//     echo "$nome não é maior de idade<br>";
// }


// // Dados da calculadora SWITCH CASE

// echo "<br>calculadora SWITCH CASE<br>";

// $valor1 = 2;
// $operador = "/";
// $valor2 = 6;



// if ($valor1 < $valor2)  {
//     $temporario = $valor1;
//     $valor1 = $valor2;
//     $valor2 = $temporario; 
// }
// switch($operador) {
//     case "+": 
//         $resultado = $valor1 + $valor2;
//         echo "A soma dos valores $valor1 + $valor2: $resultado";
//         break;
//     case "-" :  
//         $resultado = $valor1 - $valor2;
//         echo "A subtracao dos valores $valor1 - $valor2: $resultado";
//         break;
//     case "*" :  
//         $resultado = $valor1 * $valor2;
//         echo "A multiplicacao dos valores $valor1 * $valor2: $resultado";
//         break;
//     case "/" :  
//         $resultado = $valor1 / $valor2;
//         echo "A divisão dos valores $valor1 / $valor2: $resultado";
//         break;
//     default:
//         echo "O operador informado é invalido!";
//         break;
// }


// // Exercicio 5 página 15

// $numero = 10; 

// if ($numero % 2 == 0){
//     echo "$numero é par<br>";
//     } else {
//     echo "$numero é impar<br>";
//     }

// // $contar = $contar + 1; || $contar += 1; || $contar++;
// for($contar = 0; $contar <= 10; $contar++) {
    
//     $contaPares++;

//     if ($contar == 5) {
//         continue;
//     }

//     echo "<br>";
//     // echo "$numero X $contar = " . $numero * $contar;
    
//     $restoDivisao = $contar % 2;
//     $ehDivisaoExata = $restoDivisao == 0;

//     if($ehDivisaoExata) {
//         echo "$contar é par";
//         } else {
//         echo "$contar é impar";
//         }

//     // if ($contar == 5) {
//     //     break;
//     // }
    
// } // TERMINA O FOR AQUI.

// echo "<br>";

// // Exibir os numeros em ordem DECRESCENTE(Maior para Menor - DESC) de 10 - 0.

// // Contar e Exibir os numeros pares de 1 até 50;


// // Calcular o fatorial de um numero. Ex.: calcular o fatorial de 5 = 120.
// // 5!
// // 5 x 4 x 3 x 2 x 1.
// $fatorial = 5;
// $antecessor = $fatorial - 1; // 4

// echo "<br>";

// for($numero = $antecessor; $numero >= 1; $numero--) {
//     // $fatorial = $fatorial * $numero; // 120
//     $fatorial *= $numero;
// }

// echo "Fatorial: $fatorial <br>";


// // LAÇOS DE REPETIÇÃO

// $numero = 6;
// for ($contar = 1;$contar <= 10; $contar++) {
//         echo"<br>";
//         echo"$numero X $contar = " . $numero * $contar;
// }

// /*      
//         --PULA O NÚMERO 5, continue = pular
//         if($contar == 5) {
//               continue;   =     X
//         }
         
//         --IDENTIFICA SE O NÚMERO É PAR OU ÍMPAR
//         $restoDivisao = $contar % 2;
//         $ehDivisaoExata = $restoDivisao == 0;

//         if($ehDivisaoExata){
//                 echo "O $contar é par";
//         } else {
//                 echo "O $contar é ímpar";
//         }
//         --PARA A CONTAGEM NO 5 LOOP, BREAK = PARAR
//         if ($contar == 5) {
//                 break
//         }
// }
// */

// //Exibir os numeros pares de 1 até 50;

// echo"<h2>Sequênia de número par</h2>";

// for ($contadorPar = 0; $contadorPar <=50; $contadorPar = $contadorPar + 2){
//         echo"<br>";
//         echo"Sequência de número par: $contadorPar";
// }

// //Exibir o os numeros em ordem Decrescente(Maior para Menor - DESC) de 10 a 0

// echo"<h2>Ordem Decrescente</h2>";

// for ($contadorDecrescente = 10; $contadorDecrescente >= 0; $contadorDecrescente-- ) {
//         echo"<br>";
//         echo"Exibição de números em ordem descrescente: $contadorDecrescente";
// }

// //Calcular o fatorial de um numero. EX: calcular o fatorial de 5 = 120.

// echo"<h2>Valor Fatorial: Looping </h2>";

// $numeroFatorial= 6;
// $antecessor = $numeroFatorial -1;

// for ($contadorFatorial = $antecessor; $contadorFatorial >= 1; $contadorFatorial-- ) {
//         echo"<br>";
//         echo"Exibição dos valores fatoriais : $numeroFatorial x $contadorFatorial = " . $numeroFatorial *= $contadorFatorial; 
// }

// //  1  001
// // -1  1001 

// echo"<h2>Valor Fatorial: While</h2>";

// $numeroFatorial= 6;
// $antecessor = $numeroFatorial -1;
// $contadorFatorial = $antecessor;

// while ($contadorFatorial >= 1){
//         echo"<br>";
//         echo"Exibição dos valores fatoriais : $numeroFatorial x $contadorFatorial = " . $numeroFatorial *= $contadorFatorial;

//         $contadorFatorial--;
// }

/** FAZER O MESMO EXERCICIO UTILIZANDO FOR E WHILE
 *  Exercicio: encontrar os 5 primeiros numeros Primos
 */

$numeroAvaliado = 7;
$antecessor = $numeroAvaliado - 1;
$contPrimos = 0;


for ($divisor = 2; $divisor <= $antecessor; $divisor++) {

    if($contPrimos == 7) {
        break;
    }

    $restoDivisao = $numeroAvaliado % $divisor; //7 % 2
    $ehDivisaoExata = $restoDivisao == 0;

    if ($ehDivisaoExata){
        $numeroAvaliado++;
        $antecessor = $numeroAvaliado -1;
        continue;  
    }

    if ($divisor == $antecessor) {
        echo "O numero $numeroAvaliado é primo!";
        $numeroAvaliado++;
        $antecessor = $numeroAvaliado -1;
    }
}    

