<html>

<head>
	<title>Inserimento numeri</title>
</head>

<body>

	<?php
	
		$decimale = $_POST['decimale'];
		$binario = $_POST['binario'];
		
		echo "<form action=conversione.php method=POST >";
		echo "<h2>Decimali</h2>";
		echo "<input type=number name=dec0 value=".$decimale." hidden >";
		for($i = 1; $i <= $decimale; $i++) {
			echo "<input type=number name=dec".$i." >";			
		}
		
		echo "<h2>Binari</h2>";
		echo "<input type=number name=bin0 value=".$binario." hidden >";	
		for($i = 1; $i <= $binario; $i++) {
			echo "<input type=number name=bin".$i." >";			
		}
		
		echo "<input type=submit >";
		echo "</form>";
	
	?>

</body>

</html>