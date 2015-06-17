
<html>
    
<!-- Lucía Aragoneses - Pilar García - Victoria Gallardo - Ana I. Gómez-Pimpoyo -->
<head></head>    
<body>
    
    
<?php

$flag = true;

list($year, $month, $day) = split('-', $_REQUEST['bday']);

$today = getdate();
$today_day = $today['mday'];
$today_month = $today['mon'];
$today_year = $today['year'];

$age = $today_year - $year;
	if ($age <= 18) {
		if($age == 18) {
			$m = $today_month - $month;
			if ($m <= 0) {
				if ($m == 0) {
					$d = $today_day - $day;
					if ($d < 0) {
						echo 'Menor de edad';
						$flag = false;
					}
				} else {
					echo 'Menor de edad';
					$flag = false;
				}
			} else {
				$d = $today_day - $day;
			}
		} else {
			echo 'Menor de edad';
			$flag = false;
		}
	}

if ($_REQUEST['firstname'] == "") {
	print "Falta el nombre<br/>\n";
	$flag = false;
} elseif(strlen($_REQUEST['firstname']) < 3) {
	print "Nombre muy corto<br/>\n";
	$flag = false;
} else {
	$firstname = $_REQUEST['firstname'];
} 

if ($_REQUEST['surname1'] == "") {
	print "Falta el apellido2<br/>\n";
	$flag = false;
} else {
	$surname1 = $_REQUEST['surname1'];
} 

if ($_REQUEST['surname2'] == "") {
	print "Falta el apellido2<br/>\n";
	$flag = false;
} else {
	$surname2 = $_REQUEST['surname2'];
} 

if ($_REQUEST['dni'] == "") {
	print "Falta el dni<br/>\n";
	$flag = false;
} elseif(strlen($_REQUEST['dni']) < 9) {
	print "DNI muy corto<br/>\n";
	$flag = false;
} else {
	// Para comprobar si es dni o nif, hoy no da tiempo, futura implementación $first_char_dni = substr($_REQUEST['dni'],0);
	$dni_letter = substr($_REQUEST['dni'], -1);
	$dni_number = substr($_REQUEST['dni'], 0, -1);
	if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $dni_number%23, 1) == $dni_letter && strlen($dni_letter) == 1 && strlen ($dni_number) == 8 ){
		$dni = $_REQUEST['dni'];
	}else{
		echo 'DNI inválido';
		$flag = false;
	}
} 

if ($_REQUEST['email'] == "") {
	print "Falta el email<br/>\n";
	$flag = false;
} elseif (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
	echo 'Email invalido';	
	$flag = false;
} else {
	$email = $_REQUEST['email'];
}

if ($_REQUEST['usrtel'] == "") {
	print "Falta el teléfono<br/>\n";
	$flag = false;
} elseif(strlen($_REQUEST['usrtel']) < 9) {
	print "Teléfono muy corto<br/>\n";
	$flag = false;
} else {
    $tel = $_REQUEST['usrtel'];
}
	echo "HOLA";

if ($flag == true) {
	echo "<a href=\"form-direction.html\">Continuar</a>";
} else {
	echo "FALSE";
	echo "<a href=\"index.html\">Volver para corregir datos incorrectos</a>";
}

?>
    
    
</body>
</html>
