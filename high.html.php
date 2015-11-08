<?php 
session_start();
?>

<!DOCTYPE html>
<html lang ='en-US'>
	<head>
		<title>Too High</title>
		<meta charset ="UTF-8">
		<meta name = "description" content = "Guess the Number with PHP">
		<meta name = "author" content = "Daniel Cleaves">
		<meta name = "viewport" content = "width-device-width, initial-scale =1.0">

		<link rel = "stylesheet" href = "stylesheet.css">
		
	</head>
	<body>
		<div class = "intro">
			<h1>Welcome to the Great Number Game!</h1>
			<h2>I am thinking of a number between 1 and 100</h2>
			<p>Take a guess!</p>
		
			<div class = "box">		
				<h1>Too High!</h1>
			</div>

			<form action = "guess.php" method = "post">
					<input type = "number" name = "number">
					<input type = "Submit" value = "Submit">
			</form>
		</div>

	</body>
</html>