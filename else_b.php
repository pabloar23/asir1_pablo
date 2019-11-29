<?php
function nota($a){
	$r='Pendiente';
	if ($a>=5) { 
	$r='Aprobado';
	}
	if ($a>=7) { 
	$r='Notable';
	}
	if ($a>=8.5) { 
	$r='Sobresaliete';
	}
	return $r;
}
echo '6'.'='.nota (6).'<br>';
echo '2'.'='.nota (2).'<br>';
echo '8'.'='.nota (8).'<br>';
echo '10'.'='.nota (10).'<br>';
?>