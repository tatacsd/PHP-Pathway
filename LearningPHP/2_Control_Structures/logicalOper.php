<?php

$a = 9 > 5; //true
$b = 10 != 10; // false
$c = $a && $b; // false
$d = $a || $b; // true
$e = $b && $c; // false
$f = $a || $d; //true


$logic = array( $a, $b, $c, $d, $e, $f);

echo '<pre>';
var_dump($logic);
echo '</pre>';

// ^is XOR -> When one statetment but not all is true
/*
(true ^true) = false
(true ^false) = true
(false ^false) = false
*/


?>
