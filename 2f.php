 <?php
$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

echo "</br> Meses utilizando for </br>" ;
for($i=0;$i<12;$i++){
	echo  $meses[$i].'<br>';
}

echo "</br> Meses utilizando for each </br>" ;
foreach($meses as $mes){
	echo $mes.'<br>';
}

echo "</br> Meses utilizando function </br> ";

function meses($n){
	$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];	
	return $meses[$n-1];
}

echo meses(1);