<!DOCTYPE html>
<html>
<head>
	<title>Fuzzy_Program</title>
	<style type="text/css">
		td {
			text-align: center;
		}
	</style>
</head>
<body>
	<?php

		$nilaiEmosi = array(97,36,63,82,71,79,55,57,40,57,77,68,60,82,40,80,60,50,100,11,58,68,64,57,77,98,91,50,95,27);

		$nilaiProvo = array(74,85,43,90,25,81,62,45,65,45,70,75,70,90,85,68,72,95,18,99,63,70,66,77,55,64,59,95,55,79);

		$pesan = array();

		// ---- CEK NILAI ----
		
		for ($i=0; $i <30 ; $i++) { 

				//---- EMOSI -----
			$tidakEmosi = 0;
			$sedikitEmosi = 0;
			$cukupEmosi = 0;
			$emosi = 0;
			$sangatEmosi = 0;
			$terlaluEmosi = 0; 

			//---- PROVOKASI ----
			$tidakProvo = 0;
			$sedikitProvo = 0;
			$cukupProvo = 0;
			$provo = 0;
			$sangatProvo = 0;
			$terlaluProvo = 0;

			if ( ( $nilaiEmosi[$i] >= 0 ) && ( $nilaiEmosi[$i] <= 10 ) ) {
		  		$tidakEmosi = 1;
			} else if ( ($nilaiEmosi[$i] > 10) && ($nilaiEmosi[$i]<=20) ) {
				$tidakEmosi = ((20-$nilaiEmosi[$i]) / 10);
				$sedikitEmosi = ( ($nilaiEmosi[$i]-10) / 10 );
			} else if ( ($nilaiEmosi[$i] > 20) && ($nilaiEmosi[$i] <=30) ){
				$sedikitEmosi = 1;
			} else if ( ($nilaiEmosi[$i] > 30) && ($nilaiEmosi[$i] <=40) ){
				$sedikitEmosi = ((40-$nilaiEmosi[$i])/10);
				$cukupEmosi = (($nilaiEmosi[$i]-30)/10);
			} else if ( ($nilaiEmosi[$i] > 40) && ($nilaiEmosi[$i] <= 50) ){
				$cukupEmosi = 1;
			} else if ( ($nilaiEmosi[$i] > 50) && ($nilaiEmosi[$i] <= 60) ){
				$cukupEmosi = ((60-$nilaiEmosi[$i])/10);
				$emosi = (($nilaiEmosi[$i]-50)/10);
			} else if ( ($nilaiEmosi[$i] > 60) && ($nilaiEmosi[$i] <= 70) ){
				$emosi = 1;
			} else if ( ($nilaiEmosi[$i] > 70) && ($nilaiEmosi[$i] <= 80) ){
				$emosi = ((80-$nilaiEmosi[$i])/10);
				$sangatEmosi = (($nilaiEmosi[$i]-70)/10);
			} else if ( ($nilaiEmosi[$i] > 80) && ($nilaiEmosi[$i] <= 90) ){
				$sangatEmosi = 1;
			} else if ( ($nilaiEmosi[$i] > 90) && ($nilaiEmosi[$i] <=100) ){
				$sangatEmosi = ((100-$nilaiEmosi[$i])/10);
				$terlaluEmosi = (($nilaiEmosi[$i]-90)/10);
			}

			 if ( ($nilaiProvo[$i] > 0) && ($nilaiProvo[$i] <= 10) ){
				$tidakProvo = 1;
			} else if ( ($nilaiProvo[$i] > 10) && ($nilaiProvo[$i] <= 20) ){
				$tidakProvo = ((20-$nilaiProvo[$i])/10);
				$sedikitProvo = (($nilaiProvo[$i]-10)/10);
			} else if ( ($nilaiProvo[$i] > 20) && ($nilaiProvo[$i] <= 30) ){
				$sedikitProvo = 1;
			} else if ( ($nilaiProvo[$i] > 30) && ($nilaiProvo[$i] <= 40) ){
				$sedikitProvo = ((40-$nilaiProvo[$i])/10);
				$cukupProvo = (($nilaiProvo[$i]-30)/10);
			} else if ( ($nilaiProvo[$i] > 40) && ($nilaiProvo[$i] <= 50) ){
				$cukupProvo = 1;
			} else if ( ($nilaiProvo[$i] > 50) && ($nilaiProvo[$i] <= 60) ){
				$cukupProvo = ((60-$nilaiProvo[$i])/10);
				$provo = (($nilaiProvo[$i]-50)/10);
			} else if ( ($nilaiProvo[$i] > 60) && ($nilaiProvo[$i] <= 70) ){
				$provo = 1;
			} else if ( ($nilaiProvo[$i] > 70) && ($nilaiProvo[$i] <= 80) ){
				$provo = ((80-$nilaiProvo[$i])/10);
				$sangatProvo = (($nilaiProvo[$i]-70)/10);
			} else if ( ($nilaiProvo[$i] > 80) && ($nilaiProvo[$i] <= 90) ){
				$sangatProvo = 1;
			} else if ( ($nilaiProvo[$i] > 90) && ($nilaiProvo[$i] <= 100)){
				$sangatProvo = ((100-$nilaiProvo[$i])/10);
				$terlaluProvo = (($nilaiProvo[$i]-90)/10);
			}


			$tidak1 = min($tidakEmosi,$tidakProvo);
			$tidak2 = min($tidakEmosi,$sedikitProvo);
			$tidak3 = min($tidakEmosi,$cukupProvo);
			$tidak4 = min($tidakEmosi,$provo);
			$tidak5 = min($sedikitEmosi,$tidakProvo);
			$tidak6 = min($sedikitEmosi,$sedikitProvo);
			$tidak7 = min($sedikitEmosi,$cukupProvo);
			$tidak8 = min($sedikitEmosi,$provo);
			$tidak9 = min($cukupEmosi,$tidakProvo);
			$tidak10 = min($cukupEmosi,$sedikitProvo);
			$tidak11 = min($cukupEmosi,$cukupProvo);
			$tidak12 = min($cukupEmosi,$provo);
			$tidak13 = min($emosi,$cukupProvo);
			$tidak14 = min($emosi,$provo);
			$tidak15 = min($emosi,$cukupProvo);
			$tidak16 = min($emosi,$provo);
			$tidak17 = min($sangatEmosi,$tidakProvo);
			$tidak18 = min($sangatEmosi,$sedikitProvo);
			$tidak19 = min($terlaluEmosi,$tidakProvo);
			$tidak20 = min($terlaluEmosi,$sedikitProvo);
			$maxTidak = max($tidak1,$tidak2,$tidak3,$tidak4,$tidak5,$tidak6,$tidak7,$tidak8,$tidak9,$tidak10,$tidak11,$tidak12,$tidak13,$tidak14,$tidak15,$tidak16,$tidak17,$tidak18,$tidak19,$tidak20);

			$ya1 = min($tidakEmosi,$sangatProvo);
			$ya2 = min($tidakEmosi,$terlaluProvo);
			$ya3 = min($sedikitEmosi,$sangatProvo);
			$ya4 = min($sedikitEmosi,$terlaluProvo);
			$ya5 = min($cukupEmosi,$sangatProvo);
			$ya6 = min($cukupEmosi,$terlaluProvo);
			$ya7 = min($emosi,$sangatProvo);
			$ya8 = min($emosi,$terlaluProvo);
			$ya9 = min($sangatEmosi,$cukupProvo);
			$ya10 = min($sangatEmosi,$provo);
			$ya11 = min($sangatEmosi,$sangatProvo);
			$ya12 = min($sangatEmosi,$terlaluProvo);
			$ya13 = min($terlaluEmosi,$cukupProvo);
			$ya14 = min($terlaluEmosi,$provo);
			$ya15 = min($terlaluEmosi,$sangatProvo);
			$ya16 = min($terlaluEmosi,$terlaluProvo);
			$maxYa = max ($ya1,$ya2,$ya3,$ya4,$ya5,$ya6,$ya7,$ya8,$ya9,$ya10,$ya11,$ya12,$ya13,$ya14,$ya15,$ya16);

			$x = $maxYa+$maxTidak;
			$nilai = ((10*$maxTidak)+(20*$maxYa))/$x;
			if ($nilai > 10) {
				$pesan[$i] = 'YA';
			} else {
				$pesan[$i] = 'TIDAK';
			}

		} // END FOR 

	?>
	<h1>Program FUZZY</h1>
	<table border="1px solid black" width="40%">
	  <tr>
	  	<th>Berita</th>
	    <th>Emosi</th>
	    <th>Provokasi</th> 
	    <th>Hasil</th>
	  </tr>

	  <?php 
	  	for ($i=0; $i < 30 ; $i++) { 
	  		echo "<tr >
	  				<td>B $i </td>
				    <td>$nilaiEmosi[$i]</td>
				    <td>$nilaiProvo[$i]</td> 
				    <td>$pesan[$i]</td>
				  </tr>";
	  	}
	  ?>
	</table>

</body>
</html>