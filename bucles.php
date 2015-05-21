<html>
<head>
	<title>Bucles</title>
</head>
<body>
	<?php
		echo "<ul>\n";
		for ($n=1; $n<=150; $n=$n+4) {
			if ($n < 20 || $n > 50) {
				echo "<li>Elemento" . $n . "</li>\n";
			}
		}
		echo "</ul>\n";
	?>
</body>
</html>
