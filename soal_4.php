<!DOCTYPE html>
<html>
<head>
	<title>Soal No. 4</title>
</head>
<body>
	<form action="" method="POST">
		<input type="number" name="angka">
		<button type="submit">Proses</button>
	</form>
	<br>
	<?php
		if (isset($_POST['angka'])) { 
			$angka = explode('0', $_POST['angka']);
			for ($i=0; $i < count($angka); $i++) { 
				$arrayAngka = str_split($angka[$i]);
				sort($arrayAngka);
				echo implode('', $arrayAngka);
			}
		}
	 ?>
</body>
</html>