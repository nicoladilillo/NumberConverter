<?php $title = 'Binari&Decimali'; require('./partials/head.php'); ?>

	<h2>Conversione Numeri<small>quanti numeri da convertire'</small></h2>

	<div class="container">

		<form action="numeri.php" method="POST" >
			
			<div class="group">      
		      <input type="number" name="decimale" required>
		      <span class="highlight"></span>
		      <span class="bar"></span>
		      <label>Decimali</label>
		    </div>

			<div class="group">      
		      <input type="text" name="binario" required>
		      <span class="highlight"></span>
		      <span class="bar"></span>
		      <label>Binari</label>
		    </div>

			<input type="submit" >

		</form>

	</div>

<?php require('./partials/tail.php'); ?>

