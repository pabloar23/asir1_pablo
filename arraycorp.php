<?php

$mes=[
	
	'1'=>[
		'mes'=>'ene',
		'dias'=>31,
		'estacion'=>'invierno'
	],
	'2'=>[
		'mes'=>'feb',
		'dias'=>'28/29',
		'estacion'=>'invierno'
	],

];

echo $mes['2']['dias'];

$mes=[
	'ene',
	'feb',
	'mar',
];

echo $mes[1-1];

echo '<pre>';
print_r( $mes );
echo '</pre>';