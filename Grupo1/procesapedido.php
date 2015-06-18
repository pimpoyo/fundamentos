<?php

// Número de productos totales que hay en el html
$products_number = 6;

for ($i = 1; $i<=$products_number; $i++) {
	// Se genera un array de productos y cada producto a su vez es un array asociativo
	//Se construye el array asociativo con los datos cuya cantidad es distinta de 0
	if ($_REQUEST["amount$i"] != 0) {
		$products[$i]['price'] = $_REQUEST["product_price$i"];
		$products[$i]['name'] = $_REQUEST["product_name$i"];
		$products[$i]['amount'] = $_REQUEST["amount$i"];
		$products[$i]['subtotal'] = $products[$i]['amount'] * $products[$i]['price'];
	}
}

$subtotal_no_iva = 0;

// Se suman los subtotales de los productos
foreach ($products as $product) {
	$subtotal_no_iva += $product['subtotal'];
}

// Se calcula el precio total con iva
$subtotal_with_iva = $subtotal_no_iva * 1.21;
?>

<html>
<head>
	<title></title>
	<meta charset="utf-8" /> 
	<link rel="stylesheet" href="form.css">
</head>
<body>

	<div class="form">
	<div class="logo"><a href="index.html"><img class="logo" src="img/logo.png" alt="logo"/></a></div>
		<a href="index.html"><p class="form-header">InnoTech</p></a>

	<p class="form-step-on">Tu compra</p>
	<div class="form2">
	  <div class="form-container">

		  <table>
<?php

// Se construyen las filas de la tabla que se va a mostrar como resultado
foreach ($products as $product) {
	echo '<tr>';
	echo '<td>' . $product['name'] . '</td>'; 
	echo '<td>' . $product['price'] . '</td>'; 
	echo '<td>' . $product['amount'] . '</td>'; 
	echo '<td>' . $product['subtotal'] . '</td>'; 
	echo '</tr>'; 
}
?> 
		</table>
<?
echo '<div>Precio total sin IVA: ' . $subtotal_no_iva . '</div>';
echo '<div>Precio total con IVA: ' . $subtotal_with_iva . '</div>';
?>
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
