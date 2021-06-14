<!DOCTYPE html>
<html>
<head>
	<title>Velocidade Média - PHP</title>
</head>
<body>
	<h2>Velocidade Média</h2><hr>
	<form action="calc.php" method="post">
		<p>Velocidade Inicial (Vo)</p>
		<input type="text" name="inic"> (m/s)
		<p>Aceleração</p>
		<input type="text" name="aceler"> (m/s<sup>2</sup>)
		<p>Tempo</p>
		<input type="text" name="tempo"> (s) <br><br>
		<input type="submit" value="Calcular">
	</form>	
</body>
</html>

<?php

 //include("calc.php");

?>