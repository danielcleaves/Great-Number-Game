<?php 
session_start();


if($_SESSION['number'] > $_POST['number'] )
{
	header('Location: low.html.php');
	die();
}

else if($_SESSION['number'] < $_POST['number'] )
{
	header('Location: high.html.php');
	die();
}

else
{
	header('Location: success.html.php');
	die();
}

?>

