<?php $title = 'Binari&Decimali'; require('./partials/head.php'); ?>

	<form action="numeri.php" method="POST" >
		Decimali: <input type="number" name="decimale" ><br>
		Binari(max 1111): <input type="number" name="binario" ><br>
		<br><input type="submit" >
	</form>

<?php require('./partials/tail.php'); ?>