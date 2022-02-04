<?php

$num1 = readline("Digite o primeiro número: ");
$num2 = readline("Digite o segundo número: ");

if($num1 == $num2){
    print "Números iguais";
}elseif($num1 > $num2){
    print "Primeiro é maior";
}else{
    print "Segundo é maior";
}