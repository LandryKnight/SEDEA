


<?php 

$a1 = "WILLIAM";
$b1 = "henry";
$c1 = "gates";

echo $a1."".$b1."".$c1. "<br>";

fix_names($a1,$b1,$c1);

echo $a1."".$b1."".$c1;

function fix_names(&$n1,&$n2,&$n3)
{
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
}

 ?>
