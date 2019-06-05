<!--
JAGProg
Ejercicios para el aprendizaje
-->
<html>
<head>
<title>Convertidor de moneda</title>
</head>
<body>
<h2>Proyecto: Convertidor Monetario USD/COP</h2>

	
	
	<form method="post" action="conversor.php">
		Cuántos dolares tienes: <br />
		
		<input type="text" name="dolares" /> <p />
		<input type="submit" />
	</form>

<?php
	
	// Definimos la tasa de cambio
	define ('TASA_DE_CAMBIO', 2800);
	
	//Obtenemos los dolares
	$dolares = $_POST['dolares'];
	// realiza la conversión y presenta el resultado
	$pesos = $dolares * TASA_DE_CAMBIO;
	echo "$dolares USD americanos son equivalentes a: $pesos COP";


?>

</body>
</html>
