<?php $title = 'Conversione'; require('./partials/head.php'); ?>
	<small>Numeri convertiti</small></h1>

	<?php

		$decimale = $_POST['decimale'];
		$binario = $_POST['binario'];
		$fattoriale = $_POST['fattoriale'];

		//Binary from Decimal
		if( $decimale > 0 )
			echo "<br><h2>Decimali</h2>";
		$y = 0;
		for($i = 1; $i <= $decimale; $i++) {

			$n = $_POST["dec$i"]; //$_POST['dec'.$i]
			echo "<p>".$n." = ";

			do {
				$num[$y] = $n%2;
				$n = intval($n/2);
				$y++;
			} while($n > 0);

			do {
				$y--;
				echo $num[$y];
			} while($y > 0);
			echo "</p>";

		}

		//Decimal from Binary
		if( $binario > 0 )
			echo "<br><h2>Binari</h2>";
		for($i = 1; $i <= $binario; $i++) {

			$n  = $_POST['bin'.$i]; //$_POST["bin$i"]
			echo "<p>".$n." = ";

			$c = 0;
			for($y = 0; $y < strlen($n); $y++ ) {
				if( $n[$y] == '1' )
					$c = $c + pow(2, strlen($n)-$y-1);
			}

			echo $c."<p>";

		}
		
		//Fattoiale
		if( $fattoriale> 0 )
			echo "<br><h2>Fattoriale</h2>";
		for($i = 1; $i <= $fattoriale; $i++) {

			$n  = $_POST["fat$i"];
			echo "<p>".$n." = ";

			for($y = $n; $y > 1; $y-- )
				$n = $n*($y-1);

			if ( $n == 0 )
				$n = 1;

			echo $n."<p>";

		}
		
	?>
	
	<form action="index.php" method="POST" id="first">
		<div class="group submit">
			<input type="submit" values="Home" >
		</div>
	</form>	
	

<?php require('./partials/footer.php'); ?>
