<?php
	
	$decimale = $_POST['dec0'];
	$binario = $_POST['bin0'];
	
	$y = 0;
	for($i = 1; $i <= $decimale; $i++) {
		
		$n = $_POST['dec'.$i];
		echo $n . ": ";
		
		do {
			$num[$y] = $n%2;
			$n = intval($n/2);
			$y++;
		} while($n > 0);
		
		do {
			$y--;
			echo $num[$y];
		} while($y > 0);
		echo ",<br>";
		
	}