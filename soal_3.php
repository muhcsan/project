<!DOCTYPE html>
<html>
<head>
	<title>Soal No. 3</title>
</head>
<body>
	<form action="" method="post">
		<input type="number" name="angka">
		<button type="submit">Proses</button>
	</form>
	<br>
	<?php 
		if (isset($_POST['angka'])) {

			if ($_POST['angka'] > 0 && $_POST['angka'] <=10) {
				for ($i=1; $i<=$_POST['angka']; $i++){
				    for ($j=1; $j<=$i; $j++){
				          printPrima($j);
				     }
				     echo "<br>";
				}
			}else{
				echo "0 < Alas/Tinggi < 10";
			}
			
		}


		function printPrima($primaKe){
			$currentPrima = 0;
			for ($i=0; true; $i++) { 
				$a = 0;
				for ($j=1; $j <= $i ; $j++) { 
					if($i % $j == 0){
						$a++;
					}
				}
				if ($a ==  2) {
					$currentPrima++;
				}

				if ($currentPrima == $primaKe) {
					break;
				}
			}

			echo "$i ";
		}
	 ?>
</body>
</html>