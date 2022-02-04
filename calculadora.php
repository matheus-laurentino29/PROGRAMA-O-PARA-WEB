<?php 

$opercaoRandomica = rand(1,4);

$num1 = rand(1,50);
$num2 = rand(1,50);

switch ($opercaoRandomica){
    case 1:
        print $num1 . "+" . $num2 . "=" . $num1 + $num2;
    break;
    case 2:
        print $num1 . "-" . $num2 . "=" . $num1 - $num2;
    break;
    case 3:
        print $num1 . "x" . $num2 . "=" . $num1 * $num2;
    break;
    case 4:
        print $num1 . "/" . $num2 . "=" . $num1 / $num2;
    break;

}