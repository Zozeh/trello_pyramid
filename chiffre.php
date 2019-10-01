<!DOCTYPE html>
<html>
<head>
	<title>Chiffre</title>
</head>
<body>
	<form action="chiffre.php" method="POST">
		<input type="number" name="nb1" placeholder="Entrez un nombre entier"> <br>
		<input type="submit" value="Résultat">
	</form>
</body>
</html>

<?php 
$nb=$_POST['nb1'];
for ($i = 0; $i <= $nb; $i++){
	for ($j = 1; $j <= $i; $j++){
	echo $j;
}
echo "<br>";
}
 ?>