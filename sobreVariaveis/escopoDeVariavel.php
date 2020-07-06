<?php
$nome = "karen";

function teste1() {
    global $nome; //pega uma variavel de fora da função pra usar o valor dela aqui dentro
    echo $nome;

}

function teste2() {
    echo "</br>";
    echo " agora no teste 2";

}

teste1();
teste2();



