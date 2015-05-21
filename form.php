<html>
<body>
	<?php
		$flag = true;
		
		if($_REQUEST['edad'] != "") {
			$edad = (int)$_REQUEST['edad'];
			if ($_REQUEST['edad'] != "$edad") {
				echo '<p>Edad no v&aacutelida<p>';
				$flag = false;
			}
		} else {
			echo '<p>Edad vac&iacutea<p>';
			$flag = false;
		}
		
		if($_REQUEST['sexo'] != "") {
			$sexo = strtoupper($_REQUEST['sexo']);
			if ($sexo != "HOMBRE" && $sexo!="MUJER") {
				echo '<p>Sexo no admitido<p>';
				$flag = false;
			}
		} else {
			echo '<p>Sexo vac&iacutea<p>';
			$flag = false;
		}
	

		if ($flag == true) {
			echo '<p>Tu edad es ' . $edad . '</p>';
			echo '<p>Eres ' . $_REQUEST['sexo'] . '</p>';
			
	
			if ($sexo == "MUJER") {
				$edad = $edad - 5;
			}
	
			if ($edad < 5) {
				if ($sexo == "MUJER") {
					echo '<p>Eres una beb&eacute, tienes ' . $edad . ' a&#241os</p>';
				} else {
					echo '<p>Eres un beb&eacute, tienes ' . $edad . ' a&#241os</p>';
				}
			} elseif ($edad < 10) {
				if ($sexo == "MUJER") {
					echo '<p>Eres una nena, tienes ' . $edad . ' a&#241os</p>';
				} else {
					echo '<p>Eres un nene, tienes ' . $edad . ' a&#241os</p>';
				}
			} elseif ($edad < 15) {
				if ($sexo == "MUJER") {
					echo '<p>Eres una preadolescente, tienes ' . $edad . ' a&#241os</p>';
				} else {
					echo '<p>Eres un preadolescente, tienes ' . $edad . ' a&#241os</p>';
				}
			} elseif ($edad < 20) {
				if ($sexo == 'MUJER') {
					echo '<p>Eres una adolescente, tienes ' . $edad . ' a&#241os</p>';
				} else {
					echo '<p>Eres un adolescente, tienes ' . $edad . ' a&#241os</p>';
				}
			} else {
				echo '<p>Pa\'ti es la vida, tienes ' . $edad . ' a&#241os</p>';
			}
		} else {
			echo 'ERROR: Campos incorrectos en el formulario.';
		}
	?>
</body>
</html>
