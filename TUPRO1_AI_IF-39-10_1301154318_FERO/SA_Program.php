<!DOCTYPE html>
<html>
<head>
	<title>SA_PROGRAM</title>
</head>
<body>
	<?php 

		$iterasi_max =500000; // iterasi maksimal
		$t_now = 100000; //Tempratur
		$alpha = 0.995; // alpha

		// mencari nilai random -10 sampai dengan 10
		function random_float ($min,$max) {
    		return ($min + lcg_value()*(abs($max - $min)));
		};

		// fungsi
		function rumus($x1,$x2){
			return ( (4 -(2.1*($x1*$x1))+(($x1*$x1*$x1*$x1)/3)) * ($x1*$x1) + ($x1*$x2) + (-4+(4*($x2*$x2))) * ($x2*$x2)); 
		};

		$x1 = random_float(-10,10);
		$x2 = random_float(-10,10);
		$best = rumus($x1,$x2);

		for ($i=0; $i < $iterasi_max; $i++) { 
			
			$x1 = random_float(-10,10);
			$x2 = random_float(-10,10);
			$next = rumus($x1,$x2);
			
			if ($next < $best) {
				$best = $next;
				$x1_best = $x1;
				$x2_best = $x2; 
			} else {
				$z = (0 + lcg_value()*(abs(1 - 0)));
				$y = exp( ($best-$next) / $t_now);
				// be

				if ($y > $z) {
					$x1_best = $x1;
					$x2_best = $x2; 
					$best = $next;
				}
			}

			$t_now = $t_now* $alpha; // pengurangan temperatur
		}
		
		echo "Nilai X1 = ".$x1_best."</br> Nilai X2 = ".$x2_best."</br>"."Hasil Terbaik = ".$best;
	?>
</body>
</html>