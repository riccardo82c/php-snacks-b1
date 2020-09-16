<!-- 
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
	$partite = [
		[
			'casa' => 'Olimpia Milano',
			'ospite' => 'Cantù',
			'puntiCasa' => 55,
			'punstiOspite' => 60,
		],
				[
			'casa' => 'Chicago Bulls',
			'ospite' => 'Armani',
			'puntiCasa' => 250,
			'punstiOspite' => 7,
		]
				];


	var_dump($partite);
?>