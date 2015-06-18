	<?php
    $importe = $_REQUEST['importe'];
    $firstname = $_REQUEST['firstname'];
    $surname1 = $_REQUEST['surname1'];
    $surname2 = $_REQUEST['surname2'];
  
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
if ($flag != true) {
	echo "<a href=\"procesa2.php\">Volver para corregir datos incorrectos</a>";
}
	?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>FORMULARIO PAGO</title>
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
            <p class="form-step-on">Forma de pago</p>
            <p class="form-step-off">Compra finalizada</p>
          </div>    
    
<div class="form2">
    <div class="form-container">
            <div class="with_iva">Importe: <?php echo number_format($importe, 2, ',', '.');?>&#8364</div>  
    <form action="procesa4.php" method="POST">
              <input type="hidden" name="importe" value="<?php echo "$importe"; ?>"> 
              <input type="hidden" name="firstname" value="<?php echo "$firstname"; ?>"> 
              <input type="hidden" name="surname1" value="<?php echo "$surname1"; ?>"> 
              <input type="hidden" name="surname2" value="<?php echo "$surname2"; ?>"> 
    
    <label for="pay-method">Eliga forma de pago: (*)</label><br/>
    
<input type="radio" name="pay-method" value="tarjeta">Tarjeta de Crédito<br/>
<input type="radio" name="pay-method" value="paypal">Paypal<br/><br/>

    <div><label class="data-label" for="name_card">Nombre: (*) </label><br/><input type="text" class="input-text" name="name_card" required></div><br/>
    <div><label class="data-label" for="surname1_card">Primer apellido: (*) </label><br/><input type="text" class="input-text" name="surname1_card" required></div><br/>
    <div><label class="data-label" for="surname2_card">Segundo apellido: (*) </label><br/><input type="text" class="input-text" name="surname2_card" required></div><br/>
    <div><label class="data-label" for="number_card">Número de cuenta: (*) </label><br/><input type="text" class="input-text" name="number_card" required></div><br/>
    <div><label class="data-label" for="spiring-date">Fecha de caducidad: (*)</label><br/><input type="date" class="input-text" name="spiring-date" required></div><br/>
    <div><label class="data-label" for="psw">Código de validación: (*) </label><br/><input type="password" class="input-text" name="psw" required></div>
    
    <div class="buy">
      <button type="submit" class="submit">Siguiente</button>
    </div>  
</form>
   
    
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
