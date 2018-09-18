<?php

	// DATA SET
	$i=0;
	if (($handle = fopen("Dataset.csv", "r")) !== FALSE) {
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	        	$data_set[$i] = $data;
	        	$i++;
	    }
	}
	fclose($handle);

	//DATA TEST
	$i=0;
	if ( ($handle = fopen("Datatest.csv", "r")) !== FALSE) {
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$data_test[$i] = $data;
        	$i++;
	    }
	}
	fclose($handle);


	for ($i=0; $i < 1000 ; $i++) { 
		//echo $i.". ";
		for ($x=0; $x < 4000; $x++) { 
			$data_hasil[$x][0] = sqrt( (($data_test[$i][0] - $data_set[$x][0])**2) + (($data_test[$i][1] - $data_set[$x][1])**2) + (($data_test[$i][2] - $data_set[$x][2])**2) + (($data_test[$i][3] - $data_set[$x][3])**2) );
			$data_hasil[$x][1] = $data_set[$x][4];
		}
		
		$satu = 0;
		$nol = 0;
		sort($data_hasil);

		for ($z=0; $z <= 6 ; $z++) { 
			if ($data_hasil[$z][1] == 1) {
				$satu = $satu+1;
			} else {
				$nol = $nol+1;
			}
		}
		//echo "1 = ".$satu." | "." 0 = ".$nol."<br>";

		if ( $satu > $nol ) {
			$hoax[$i] = "Ya";
		} else {
			$hoax[$i] ="Tidak";
		}
	}	
?>


<!DOCTYPE html>
<html>
<head>
	<title>TUPRO 3 AI </title>
		<style type="text/css">
		td {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>DATA TEST</h1>
	<table border="1px solid black" width="40%">
	  <tr>
	  	<th>Berita</th>
	  	<th>Like</th>
	    <th>Provokasi</th>
	    <th>Komentar</th> 
	    <th>Emosi</th>
	    <th>Hoax</th>
	  </tr>

	  <?php 
	  	for ($i=0; $i < 1000 ; $i++) { 
	  		echo "<tr >
	  				<td>B $i </td>
	  				<td>".$data_test[$i][0]."</td>
				    <td>".$data_test[$i][1]."</td>
				    <td>".$data_test[$i][2]."</td> 
				    <td>".$data_test[$i][3]."</td>
				    <td>".$hoax[$i]."</td>
				  </tr>";
	  	}
	  ?>
	</table>
</body>
</html>