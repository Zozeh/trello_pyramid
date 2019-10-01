<!DOCTYPE html>
<html>
<head>
	<title>Chiffre</title>
</head>
<body>
	<form action="pyramid.php" method="POST">
		<input type="number" name="nb1" placeholder="Entrez un nombre entier"> <br>
		<input type="submit" value="Résultat">
	</form>
</body>
</html>

<?php 
$h = $_POST["nb1"];
for($i = 0; $i <= $h ; $i++){
	$space = str_repeat('&nbsp', ($h - $i));
	echo $space;
		$start=str_repeat('* ', ($i-1)*1+1);
		echo $start.'<br />';

	}
	

 ?>