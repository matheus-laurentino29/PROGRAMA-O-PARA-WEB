<?php 

$randomico = rand(1,1000);
$y = $randomico % 2;

if($y == 0){
    print $randomico . " é par";
}else{
    print $randomico . " é impar";
}