<?php
//concatenação
    $nome1 = "karen ";
    $nome2 = "rosana";
    $anoNasciemnto =   1999 ;


   echo $nomeCompleto = $nome1 ." ". $nome2;
    //echo $nome1;
    //echo $anoNasciemnto;
    //var_dump($nome1);
////////////////////////////////////////////////////////////////////////////////

//ARRAY
$outroNome = "gigi"; //string com aspas duplas
$site = 'www.hcode.com'; //string com aspas simples (tanto faz o tipo de aspas)
$ano = 1999; //int
$salario = 2999.55; //ponto flutuante
$bloqueado = false; //booleano

$frutas = array("abacate", "melancia", "uva"); //array (pode colocar misturo no array todos os tipos de sobreVariaveis)

echo "</br>"; //pula linha igual no html
echo $frutas[1]; //pegar determinada posição do array, no caso aqui será melancia

/////////////////////////////////////////////////////////////////////////////////

//OBJETOS
$nascimento = new DateTime(); //sempre que tiver um NEW, será um obj (DateTime com constutor vazio, traz a data atual)
echo "</br>";
var_dump($nascimento); //var_dump exibe o tipo de dado da variavel

/////////////////////////////////////////////////////////////////////////////////

//TIPOS ESPECIAIS
$arquivo = fopen("sobreVariaveis.php", "r");  //função para leitura de arquivo no disco rigido do pc
echo "</br>";
var_dump($arquivo);

$nulo = NULL; //não tem valor
$vazio = ""; //valor está vazio










