<?php 
  $importe = $_REQUEST['importe'];
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
            <p class="form-step-on">Datos personales</p>
            <p class="form-step-off">Dirección de envío</p>
            <p class="form-step-off">Forma de pago</p>
            <p class="form-step-off">Compra finalizada</p>
          </div>    

            <div class="form2">
            <div class="form-container">
            <div class="with_iva">Importe: <?php echo number_format($importe, 2, ',', '.');?>&#8364</div>  
              <form action="procesa2.php" method="post">
              <input type="hidden" name="importe" value="<?php echo "$importe"; ?>"> 
                    <br/>
                
                    <label for="firstname">Nombre: (*)</label><br/>
                    <input type="text" id="firstname" name="firstname" maxlength="20"  placeholder="Escribe tu nombre" size="50" required="required"/><br/><br/>
                    
                    <label for="surname1">Primer apellido: (*)</label><br/>
                    <input type="text" id="surname1" name="surname1" maxlength="20" placeholder="Escribe tu primer apellido" size="50" required="required"/><br/><br/>
                    
                    <label for="surname2">Segundo apellido: (*)</label><br/>
                    <input type="text" id="surname2" name="surname2" maxlength="20" placeholder="Escribe tu segundo apellido" size="50" required="required"/><br/><br/>
                    
                    <label for="gender">Sexo: (*)</label><br/>
                    <input class="sexo" type="radio" id="gender" name="gender" value="M"  checked/>Hombre
                    <input class="sexo" type="radio" name="gender" value="F"/>Mujer<br/><br/>
                    
                    <label for="birthday">Fecha de nacimiento: (*)</label><br/>
                    <input type="date" id="birthday" name="bday" required="required" /><br/><br/>
                    
                    <label for="dni">DNI / NIE: (*)</label><br/>
                    <input type="text" id="dni" name="dni" maxlength="9"  placeholder="Escribe tu DNI / NIE" size="50" required="required"/><br/><br/>
                    
                    <label for="email">Email: (*)</label><br/>
                    <input type="email" id="email" name="email" maxlength="30" placeholder="Escribe tu email" size="50" required="required"/><br/><br/>
                    
                    <label for="tel">Teléfono de contacto: (*)</label><br/>
                    <input type="tel" id="tel" name="usrtel" maxlength="9"  placeholder="Escribe tu teléfono de contacto" size="50" required="required"/><br/><br/>
                    
                    <input type="checkbox" id="suscription" name="OK"/>Quiero suscribirme y recibir información de las actualizaciones y ofertas.<br/><br/>
                    
                    <input type="hidden" name="#" value="#"/>
                    <div class="buy">
                      <button type="submit" class="submit">Siguiente</button>
                    </div>  
                    <br/>
                    
                </form>
                
            </div>
            </div>
            
           
        </div>
      </body>
    </html>
