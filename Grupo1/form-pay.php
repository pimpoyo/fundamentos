<html>
<head></head>
<body>

<?php

$flag = true;

if ($_REQUEST['name_card'] == "") {
	print "Falta el nombre<br/>\n";
	$flag = false;
} elseif(strlen($_REQUEST['name_card']) < 3) {
	print "Nombre muy corto<br/>\n";
	$flag = false;
} else {
	$name_card = $_REQUEST['name_card'];
} 

if ($_REQUEST['surname1_card'] == "") {
	print "Falta el apellido2<br/>\n";
	$flag = false;
} else {
	$surname1_card = $_REQUEST['surname1_card'];
} 

if ($_REQUEST['surname2_card'] == "") {
	print "Falta el apellido2<br/>\n";
	$flag = false;
} else {
	$surname2_card = $_REQUEST['surname2_card'];
} 

if ($_REQUEST['number_card'] == "") {
	print "Falta numero de tarjeta<br/>\n";
	$flag = false;
} elseif(strlen($_REQUEST['number_card']) < 16) {
	print "Numero de tarjeta  muy corto<br/>\n";
	$flag = false;
} else {
	$number_card = $_REQUEST['number_card'];
}

if ($flag == true) {
	echo "<a href=\"form-thanks.html\">Continuar</a>";
} else {
	echo "FALSE";
	echo "<a href=\"form-pay.html\">Volver para corregir datos incorrectos</a>";
}
?>	

</body>
</html>
