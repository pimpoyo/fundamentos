<html>
<head>
	<title>Mi primer programa en PHP</title>
</head>
<body>
	<?php
		$edad = 25;
		
		if ($edad < 5) {
			echo "<p>Eres un beb&eacute</p>";
		} elseif ($edad < 10) {
			echo "<p>Eres un nene</p>";
		} elseif ($edad < 15) {
			echo "<p>Eres un preadolescente</p>";
		} elseif ($edad < 20) {
			echo "<p>Eres un adolescente</p>";
		} else {
			echo "<p>Pa'ti es la vida</p>";
		}
	?>
</body>
</html>
