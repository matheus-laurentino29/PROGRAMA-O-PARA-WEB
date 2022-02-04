<?php

do{
    $num1 = readline("Digite o primeiro número (de 1 a 10): ");
}while ($num1 <= 0 || $num1 > 10);

do{
$num2 = readline("Digite o segundo número (de 1 a 10): ");
}while ($num2 <= 0 || $num2 > 10);

print $num1 ."*". $num2 ."=". $num1*$num2;
