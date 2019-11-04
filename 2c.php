<?php
function operaciones($a,$b){
	/*
	$a=5;
	$b=6;
	*/
	$r=null;
	$r=$r.'Primer número='.$a;
	$r=$r.'</br>';
	$r=$r.'Segundo número='.$b;
	$r=$r.'</br>';
	$r=$r.'</br>';
	$r=$r.'Suma: '.$a.'+'.$b.'='.($a+$b);
	$r=$r.'</br>';
	$r=$r.'Resta: '.$a.'-'.$b.'='.($a-$b);
	$r=$r.'</br>';
	$r=$r.'Multiplicación: '.$a.'x'.$b.'='.($a*$b);
	$r=$r.'</br>';
	$r=$r.'División: '.$a.'/'.$b.'='.($a/$b);
	$r=$r.'</br>';
	return $r;
}
$s=operaciones(5,6);
echo $s;
echo operaciones(7,8);
?>