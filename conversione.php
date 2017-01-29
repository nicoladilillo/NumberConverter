<?php $title = 'Conversione'; require('./partials/head.php'); ?>

<?php

	$decimale = $_POST['dec0'];
	$binario = $_POST['bin0'];

	//Binary from Decimal
	if( $decimale > 0 )
		echo "<br><h2>Decimali</h2>";
	$y = 0;
	for($i = 1; $i <= $decimale; $i++) {

		$n = $_POST["dec$i"]; //$_POST['dec'.$i]
		echo $n . " = ";

		do {
			$num[$y] = $n%2;
			$n = intval($n/2);
			$y++;
		} while($n > 0);

		do {
			$y--;
			echo $num[$y];
		} while($y > 0);
		echo "<br>";

	}

	//Decimal from Binary
	if( $binario > 0 )
		echo "<br><h2>Binari</h2>";
	for($i = 1; $i <= $binario; $i++) {

		$n  = $_POST['bin'.$i]; //$_POST["bin$i"]
		echo $n . " = ";

		$c = 0;
		for($y = 0; $y < strlen($n); $y++ ) {
			if( $n[$y] == '1' )
				$c = $c + pow(2, strlen($n)-$y-1);
		}

		echo $c."<br>";

	}
?>

<?php require('./partials/footer.php'); ?>
