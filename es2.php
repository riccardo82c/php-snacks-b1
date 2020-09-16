<!-- Snack 2
Passare come parametri GET name, mail ed age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

	/* testing with argv parameters */
	/* $name = $argv[1];
	$mail = $argv[2];
	$age = $argv[3]; */

	$name = $_GET['n'];
	$mail = $_GET['m'];
	$age = $_GET['a'];

	if(strlen($name) > 3 && strpos($mail, '.') != false && strpos($mail, '@') != false && is_numeric($age)) {
		var_dump('Benvenuto');
	} else {
		var_dump('Tu nn puoi passare... cit.');
	}
?>