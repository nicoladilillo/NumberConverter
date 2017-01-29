<?php $title = 'Binari&Decimali'; require('./partials/head.php'); ?>
	<small>Quanti numeri da convertire?</small></h1>

	<div class="container">

		<form action="numeri.php" method="POST" id="first">

			<div class="group">
		      <input type="number" name="decimale" required>
		      <span class="highlight"></span>
		      <span class="bar"></span>
		      <label>Decimali</label>
		  </div>

			<div class="group">
		      <input type="number" name="binario" required>
		      <span class="highlight"></span>
		      <span class="bar"></span>
		      <label>Binari</label>
		  </div>

			<div class="group submit">
				<input type="submit" values="Avanti" >
			</div>

		</form>

	</div>

<?php require('./partials/footer.php'); ?>
