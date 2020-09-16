<!-- prova con l'utilizzo di un form -->

<?php

	$result = '';

	if(!empty($_GET['n']) && !empty($_GET['m']) && !empty($_GET['a'])) {

	$name = $_GET['n'];
	$mail = $_GET['m'];
	$age = $_GET['a'];

	if(strlen($name) > 3 && valid_email($mail) && is_numeric($age)) {
		$result = 'Benvenuto';
		
	} else {
		$result = 'Tu nn puoi passare... cit.';
	}

	}

	function valid_email($str) {
	return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
	</style> 
	<title>Form Mail Validation</title>
</head>
<body>

	<div class="container">
	<form method="get" action='./es2-form.php'>
	
		<p> 	Name: <input type="text" name="n"><br></p>
		<p>	E-mail: <input type="text" name="m"><br></p>
		<p>   Age: <input type="text" name="a"><br></p>
		<input type="submit">
	</form>

	<div class="result">
		<p>
		<?php
			echo $result;
		?>
		</p>
	</div>

	</div> 


</body>

</html>


