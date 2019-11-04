<?php
if(isset($_GET['email']))
print_r($_GET);
$f=fopen('Suscriptores.txt','a');
fwrite($f,$_GET['email']."\r\n");
fclose($f)
?>

<form>
	<input name="email" type="email"/>
	<button>Suscribirse</button>
</form>