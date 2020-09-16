<!-- 
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
	$partite = [
		[
			'casa' => 'Olimpia Milano',
			'ospite' => 'Cantù',
			'puntiCasa' => 55,
			'puntiOspite' => 60,
		],
				[
			'casa' => 'Chicago Bulls',
			'ospite' => 'Armani',
			'puntiCasa' => 250,
			'puntiOspite' => 7,
		]
				];

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Es1</title>
</head>
<body>
	<h1>Stampa partite</h1>

	<ul>
		 <?php for ($i=0; $i < count($partite); $i++) { ?>
			<li>
			<span><?php echo $partite[$i]['casa']?> </span>
			- <span><?php echo $partite[$i]['ospite']?></span>
			| <span><?php echo $partite[$i]['puntiCasa']?></span>
			- <span><?php echo $partite[$i]['puntiOspite']?></span>
			</li>
		 <?php }?>
	</ul>

</body>
</html>