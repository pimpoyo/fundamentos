<html>
<body>
	<?php
		$edad = $_REQUEST['edad'];
		echo '<p>Tu edad es ' . $edad . '</p>';
		
		$sexo = "mujer";

		if ($sexo == "mujer") {
			$edad = $edad - 5;
		}

		if ($edad < 5) {
			if ($sexo == "mujer") {
				echo "<p>Eres una beb&eacute, tienes " . $edad . " a&#241os</p>";
			} else {
				echo "<p>Eres un beb&eacute, tienes " . $edad . " a&#241os</p>";
			}
		} elseif ($edad < 10) {
			if ($sexo == "mujer") {
				echo "<p>Eres una nena, tienes " . $edad . " a&#241os</p>";
			} else {
				echo "<p>Eres un nene, tienes " . $edad . " a&#241os</p>";
			}
		} elseif ($edad < 15) {
			if ($sexo == "mujer") {
				echo "<p>Eres una preadolescente, tienes " . $edad . " a&#241os</p>";
			} else {
				echo "<p>Eres un preadolescente, tienes " . $edad . " a&#241os</p>";
			}
		} elseif ($edad < 20) {
			if ($sexo == "mujer") {
				echo "<p>Eres una adolescente, tienes " . $edad . " a&#241os</p>";
			} else {
				echo "<p>Eres un adolescente, tienes " . $edad . " a&#241os</p>";
			}
		} else {
			echo "<p>Pa'ti es la vida, tienes " . $edad . " a&#241os</p>";
		}
	?>
</body>
</html>
