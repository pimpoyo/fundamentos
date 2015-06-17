<?php
  /* Refactorizar */
  $product_price[1] = $_REQUEST['product_price1'];
  $product_name[1] = $_REQUEST['product_name1'];
  $amount[1] = $_REQUEST['amount1'];
  $subtotal[1] = $amount[1] * $product_price[1];
  
  $product_price[2] = $_REQUEST['product_price2'];
  $product_name[2] = $_REQUEST['product_name2'];
  $amount[2] = $_REQUEST['amount2'];
  $subtotal[2] = $amount[2] * $product_price[2];

  $product_price[3] = $_REQUEST['product_price3'];
  $product_name[3] = $_REQUEST['product_name3'];
  $amount[3] = $_REQUEST['amount3'];
  $subtotal[3] = $amount[3] * $product_price[3];

  $product_price[4] = $_REQUEST['product_price4'];
  $product_name[4] = $_REQUEST['product_name4'];
  $amount[4] = $_REQUEST['amount4'];
  $subtotal[4] = $amount[4] * $product_price[4];

  $product_price[5] = $_REQUEST['product_price5'];
  $product_name[5] = $_REQUEST['product_name5'];
  $amount[5] = $_REQUEST['amount5'];
  $subtotal[5] = $amount[5] * $product_price[5];

  $product_price[6] = $_REQUEST['product_price6'];
  $product_name[6] = $_REQUEST['product_name6'];
  $amount[6] = $_REQUEST['amount6'];
  $subtotal[6] = $amount[6] * $product_price[6];

  $subtotal_no_iva = 0;
  foreach ($subtotal as $sub) {
    $subtotal_no_iva += $sub;
  }
  
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
        $i = 1;
        foreach ($subtotal as $sub) {
          echo '<tr>';
            echo '<td>' . $product_name[$i] . '</td>'; 
            echo '<td>' . $product_price[$i] . '</td>'; 
            echo '<td>' . $amount[$i] . '</td>'; 
            echo '<td>' . $sub . '</td>'; 
          echo '</tr>'; 
          $i++;
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
