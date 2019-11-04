<form>
	<input name="nota"/>
	</br>
	<button>Comprueba si suspendiste o aprobaste</button>
	</br>
</form>

<?php
if (isset($_GET['nota'])){
	if ($_GET['nota']>=0 && $_GET['nota']<=10){
		if ($_GET['nota']>=5){
			echo 'Aprobado';
		}else
			echo 'Suspenso';
	}else
		echo 'El rango de notas es de 0 a 10, tu nota no corresponde con el rango.';
}else
	echo 'Escribe una nota en el recuadro del 0 al 10.';
?>

