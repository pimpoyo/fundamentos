<?php
    $importe = $_REQUEST['importe'];
    $firstname = $_REQUEST['firstname'];
    $surname1 = $_REQUEST['surname1'];
    $surname2 = $_REQUEST['surname2'];

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

if ($flag != true) {
	echo "<a href=\"procesa3.php\">Volver para corregir datos incorrectos</a>";
}
?>	
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>FORMULARIO</title>
        <link rel="stylesheet" href="form.css">
    </head>
    <body>
        <div class="form">
	        <div class="logo"><a href="index.html"><img class="logo" src="img/logo.png" alt="logo"/></a></div>
		      <a href="index.html"><p class="form-header">InnoTech</p></a>

	        <p class="form-step-on">FORMULARIO DE COMPRA</p>
          <div>
            <p class="form-step-off">Datos personales</p>
            <p class="form-step-off">Dirección de envío</p>
            <p class="form-step-off">Forma de pago</p>
            <p class="form-step-on">Compra finalizada</p>
          </div>    

            <div class="form2">
            <div class="form-container">
            <div class="with_iva">Importe: <?php echo number_format($importe, 2, ',', '.');?>&#8364</div>  
            <div class="with_iva">Nombre: <?php echo $firstname . ' ' . $surname1 . ' ' . $surname2;?></div>  
            
                <br/>
                <p class="thanks">Su compra se ha realizado correctamente. Se le mandará un email para confirmar la compra de su pedido.<br/>¡Gracias por confiar en nosotros!</p>
                
            </div>
            </div>
        </div>
        
        <footer class="form">
            <div class="footer">
                <img src="img/f.png" alt="facebook" />
                <img src="img/t.png" alt="twitter" />
                <img src="img/p.png" alt="pinterest" />
                <img src="img/youTube.png" alt="youtube" />
                <img src="img/in.png" alt="linkedin" />
            </div>
        </footer>
    </body>
</html>

<?php
  $mysqli = new mysqli("localhost", "root", "root", "contacto");
  if(mysqli_connect_errno()) {
    printf("Error en conexion con base de datos: %s\n", mysqli_connect_error());
    exit();  
  }

  $mysqli->query("SET NAMES 'utf8'");

  $query = "INSERT INTO clientes (firstname, surname1, surname2, importe) VALUES (?,?,?,?)";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param("ssss", $firstname, $surname1, $surname2, $importe);

  $stmt->execute();

  $stmt->close();
?>
