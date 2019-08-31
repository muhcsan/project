<!DOCTYPE html>
<html>
<head>
	<title>Soal No. 5</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="kalimat">
		<button type="submit">Proses</button>
	</form>
	<br>
	<?php
		if (isset($_POST['kalimat'])) { 
			$kamus = ['pro', 'gram', 'merit', 'program', 'it', 'programmer'];
			
			$kalimat = $_POST['kalimat'];
			for ($x=0; $x < count($kamus); $x++) { 
				$kalimat_temp = $kalimat;

				if (startsWith($kalimat_temp, $kamus[$x])) {
					echo $kamus[$x] . ", ";
					$kalimat_temp = removePrefix($kalimat_temp, $kamus[$x]);

					for ($i=0; $i < count($kamus); $i++) { 
						if (startsWith($kalimat_temp, $kamus[$i])) {
							echo $kamus[$i] . ", ";
							$kalimat_temp = removePrefix($kalimat_temp, $kamus[$i]);
						}
					}

					echo "<br>";
				}
			}
			
		}

		function startsWith ($string, $startString) 
		{ 
		    $len = strlen($startString); 
		    return (substr($string, 0, $len) === $startString); 
		} 

		function removePrefix($kalimat, $kamus){
			if (substr($kalimat, 0, strlen($kamus)) == $kamus) {
			    return substr($kalimat, strlen($kamus));
			} 
		}
	 ?>
</body>
</html>