<html>
<body>

	<?php
		$flag = true;

		//Street and number validation	
		if($_REQUEST['street'] != "") {
			$street = $_REQUEST['street'];
		} else {
			echo '<p>Calle vac&iacutea<p>';
			$flag = false;
		}

		//Zipcode validation
		if($_REQUEST['zipCode'] == "") {
			echo '<p>C&oacutedigo postal vac&iacutea<p>';
			$flag = false;
		} elseif($_REQUEST['zipCode'] < 5) {
			echo '<p>C&oacutedigo postal vac&iacutea<p>';
			$flag = false;
		} else {
			$zipCode = $_REQUEST['zipCode'];
			if ($_REQUEST['zipCode'] != "$zipCode") {
				echo '<p>C&oacutedigo postal inv&aacutelido<p>';
				$flag = false;
			}
		}

		//City	
		if($_REQUEST['city'] != "") {
			$city = $_REQUEST['city'];
		} else {
			echo '<p>Ciudad vac&iacutea<p>';
			$flag = false;
		}

		//Country
		if($_REQUEST['country'] == "") {
			echo '<p>Pa&iacutes vac&iacutea<p>';
			$flag = false;
		} elseif(strlen($_REQUEST['country']) != 2) {
			echo '<p>Pa&iacutes vac&iacutea<p>';
			$flag = false;
		} else {
			$country = $_REQUEST['country'];
		}
	
		//Phone validation
		if($_REQUEST['phone'] == "") {
			echo '<p>Tel&eacutefono inv&aacutelido<p>';
			$flag = false;
		} elseif($_REQUEST['phone'] < 9) {
			echo '<p>Tel&eacutefono inv&aacutelido<p>';
			$flag = false;
		} else {
			$phone = $_REQUEST['phone'];
			if ($_REQUEST['phone'] != "$phone") {
				echo '<p>Tel&eacutefono inv&aacutelido<p>';
				$flag = false;
			}
		}
if ($flag == true) {
	echo "<a href=\"form-pay.html\">Continuar</a>";
} else {
	echo "FALSE";
	echo "<a href=\"form-direction.html\">Volver para corregir datos incorrectos</a>";
}
	?>
    
    
</body>
</html>
