<?php 
session_start();

?>

<!DOCTYPE html>
<html lang ='en-US'>
	<head>
		<title>Success</title>
		<meta charset ="UTF-8">
		<meta name = "description" content = "Guess the Number with PHP">
		<meta name = "author" content = "Daniel Cleaves">
		<meta name = "viewport" content = "width-device-width, initial-scale =1.0">

		<link rel = "stylesheet" href = "stylesheet.css">
		
	</head>
	<body>
		<div class = "intro">
			<h1>Welcome to the Great Number Game!</h1>
			<p>I am thinking of a number between 1 and 100</p>

			<div id = "success">
				<?php echo ' <h1>' . $_SESSION['number'] . " was the number" . '</h1>'?>

				<form action = "reset.html.php" method = "post">
					<input type = "Submit" value = "Play Again">
				</form>
		</div>
	</div>
		
	</body>
</html>