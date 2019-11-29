<?php
function longitud ($d,$e,$f) {
	$r="triangulo escaleno";
	if ($d==$e || $d==$f || $e==$f)
		$r="triangulo isosceles";
	if ($e==$f and $d==$f)
		$r="Triangulo equilatero";
	return $r;
}
function Angulo ($a,$b,$c) {
	$r="Triangulo Acutangulo";
	if ($a==90 or $b==90 or $c==90)
		$r="Triangulo Rectangulo";
	if ($a>90 or $b>90 or $c>90)
		$r="Triangulo Obtusangulo";
	return $r;
}
function triangulos($l){
	
	rsort ($l);
	if ($l[0] >= ($l[1]+$l[2])) $r="ERROR";
	
	else{
		list($a,$b,$c)=$l;
		$x=($a**2-$b**2+$c**2)/(2*$c);
		$h=sqrt($a**2-$x**2);
		$A=atan($h/($c-$x))*360/(2*pi());
		$B=atan($h/($c-$x))*360/(2*pi());
		$C=180-$A-$B;
	
		$r=[
			'angulos'=>[$A,$B,$C],
			'tipo_lados'=>longitud($a,$b,$c),
			'tipo_angulos'=>Angulo($A,$B,$C),
		];
		
	
	}
	return $r;
}	
#$r=triangulos([1,1,sqrt(2)]);
	#echo '<pre>';
	#print_r($r);
#	echo '</pre>';
#	echo"Triangulo Isosceles y Triangulo Acutangulo";
	
	
	
	
	
function prueba($t){
	$r=triangulos($t);
	echo '<pre>';
	print_r($t);
	print_r($r);
	echo '</pre>';
}
echo '<h1>Isósceles-Rectángulo</h1>';prueba([1,1,sqrt(2)]);
echo '<h1>Equilátero-Acutángulo</h1>';prueba([1,1,1]);
echo '<h1>Isósceles-Acutángulo</h1>';prueba([2,2,2.5]);
echo '<h1>Isósceles-Obtusángulo</h1>';prueba([2,2,3]);
echo '<h1>Esacaleno-Acutángulo</h1>';prueba([3,6,2]);
echo '<h1>Isósceles-Obtusangulo</h1>';prueba([2,3,2]);
echo '<h1>Escaleno-Obtusángulo</h1> ';prueba([4,5,8]);
echo '<h1>ERROR</h1> ';prueba([1,1,2]);