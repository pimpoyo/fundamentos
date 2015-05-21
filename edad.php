<html>
<head>
	<title>Mi primer programa en PHP</title>
</head>
<body>
	<?php
		$edad = 23;
		$sexo = "mujer";

		if ($sexo == "mujer") {
			$edad = $edad - 5;
		}

		if ($edad < 5) {
			echo "<p>Eres un beb&eacute, tienes " . $edad . " a&#241os</p>";
		} elseif ($edad < 10) {
			echo "<p>Eres un nene, tienes " . $edad . " a&#241os</p>";
		} elseif ($edad < 15) {
			echo "<p>Eres un preadolescente, tienes " . $edad . " a&#241os</p>";
		} elseif ($edad < 20) {
			echo "<p>Eres un adolescente, tienes " . $edad . " a&#241os</p>";
		} else {
			echo "<p>Pa'ti es la vida, tienes " . $edad . " a&#241os</p>";
		}
	?>
</body>
</html>
