<?php $title = 'Inserimento numeri'; require('./partials/head.php'); ?>

	<?php

		$decimale = $_POST['decimale'];
		$binario = $_POST['binario'];

		echo "<form action=conversione.php method=POST >";
		if( $decimale > 0 )
			echo "<br><h2>Decimali</h2>";
		echo "<input hidden type=number name=dec0 value=".$decimale." >";
		for($i = 1; $i <= $decimale; $i++) {
			echo "<input type=number name=dec".$i." ><br>";
		}

		if( $binario > 0 )
			echo "<br><h2>Binari</h2>";
		echo "<input hidden type=number name=bin0 value=".$binario." >";
		for($i = 1; $i <= $binario; $i++) {
			echo "<input type=text name=bin".$i." ><br>";
		}

		echo "<br><input type=submit >";
		echo "</form>";

	?>

<?php require('./partials/footer.php'); ?>
