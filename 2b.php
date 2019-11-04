<?php
$a=5;
$b=2;

function operaciones(){
	$a=5;
	$b=6;
	echo 'Primer número='.$a;
	echo '</br>';
	echo 'Segundo número='.$b;
	echo '</br>';
	echo '</br>';
	echo 'Suma: '.$a.'+'.$b.'='.($a+$b);
	echo '</br>';
	echo 'Resta: '.$a.'-'.$b.'='.($a-$b);
	echo '</br>';
	echo 'Multiplicación: '.$a.'x'.$b.'='.($a*$b);
	echo '</br>';
	echo 'División: '.$a.'/'.$b.'='.($a/$b);
	echo '</br>';
}
operaciones();
?>