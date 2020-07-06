<?php

$a = 30.0;
$b = 55;

var_dump($a > $b); //retorna se é false ou true que a é MAIOR que b

echo "<br>";

var_dump($a < $b); //retorna se é false ou true que a é MENOR que b

echo "<br>";

//var_dump($a = $b); //UM sinal de igual ATRIBUI valor

echo "<br>";

var_dump($a == $b); //DOIS sinais de igual COMPARA valor
//obs: pra essa comparação dar certo, tem que comentar a atribuição acima...

echo "<br>";

var_dump($a === $b); //TRES sinais de igual COMPARA TIPO de variavel

echo "<br>";

var_dump($a != $b); //VALOR diferente

echo "<br>";

var_dump($a !== $b); //VALOR e TIPO de variavel diferentes