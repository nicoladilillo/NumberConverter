<?php $title = 'Inserimento numeri'; require('./partials/head.php'); ?>
	<small>Inserisci i numeri da convertire</small></h1>

	<div class="container">
		<form action="conversione.php" method="POST" id="second">

			<?php

				$decimale = $_POST['decimale'];
				$binario = $_POST['binario'];
				$fattoriale = $_POST['fattoriale'];

				if( $decimale > 0 )
					echo "<br><h2>Decimali</h2>";
				echo "<input hidden type=hidden name=decimale value=".$decimale." >";
				for($i = 1; $i <= $decimale; $i++) {
					echo "<div class=group>
				      		<input type=number name=dec".$i." required>
				      		<span class=highlight></span>
				      		<span class=bar></span>
				      		<label>Numero".$i."</label>
				  			</div>";
				}

				if( $binario > 0 )
					echo "<br><h2>Binari</h2>";
				echo "<input hidden type=hidden name=binario value=".$binario." >";
				for($i = 1; $i <= $binario; $i++) {
					echo "<div class=group>
				      		<input type=text name=bin".$i." required>
									<span class=highlight></span>
				      		<span class=bar></span>
				      		<label>Numero".$i."</label>
				  			</div>";
				}
				
				if( $fattoriale > 0 )
					echo "<br><h2>Fattoriali</h2>";
				echo "<input hidden type=hidden name=fattoriale value=".$fattoriale." >";
				for($i = 1; $i <= $fattoriale; $i++) {
					echo "<div class=group>
				      		<input type=number name=fat".$i." required>
				      		<span class=highlight></span>
				      		<span class=bar></span>
				      		<label>Numero".$i."</label>
				  			</div>";
				}

			?>

			<div class="group submit">
				<input type="submit" values="Avanti" >
			</div>

		</form>
	</div>

<?php require('./partials/footer.php'); ?>
