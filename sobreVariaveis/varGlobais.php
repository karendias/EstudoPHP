<?php
////////////////////////        ARRAYS SUPER GLOBAIS          ///////////////////////////////
$nome = $_GET["a"]; //array super global, ele vai ter todas as sobreVariaveis que recebemos atraves da url
// (http://localhost:8080/exemplos/varGlobais.php?a=123), a parte ?a=123 é a variavel que recebemos atraves da url

$nome2 = (int)$_GET["a"]; //converte a string "a" em int
//o valor recebido na url é sempre uma string por padrao

var_dump($nome);
echo "</br>";
var_dump($nome2);


//PEGAR IP DO USUÁRIO
$ip = $_SERVER["REMOTE_ADDR"];
echo "</br>";
echo $ip;

//PEGAR O NOME DO ARQUIVO QUE TA EXECUTANDO
$arquivo = $_SERVER["SCRIPT_NAME"];
echo "</br>";
echo $arquivo;

