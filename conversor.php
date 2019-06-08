<!--
JAGProg
Ejercicios para el aprendizaje
-->


<?php
	
	// Definimos la tasa de cambio
	define ('TASA_DE_CAMBIO', 2800);
	
	//Obtenemos los dolares
	$dolares = $_POST['dolares'];
	// realiza la conversión y presenta el resultado
	$pesos = $dolares * TASA_DE_CAMBIO;
	echo "$dolares USD americanos son equivalentes a: $pesos COP";
	echo "<br />";
	echo "<br />";
	echo "<a href='conversor.html'>Volver</a>";


?>

