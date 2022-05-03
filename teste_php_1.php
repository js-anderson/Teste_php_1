<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>

<body>

	<?php
		function SeculoAno($ano) 
		{

		$seculo = ceil($ano/ 100);
		return $seculo;
		}

		$resultado = SeculoAno($ano = 37);
		echo "Ano 37 = Seculo ";
		echo $resultado; 


		$resultado = SeculoAno($ano = 159);
		echo "<br />Ano 159 = Seculo ";
		echo $resultado;

	?>



</body>
</html>
