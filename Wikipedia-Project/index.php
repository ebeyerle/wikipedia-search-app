<?php
session_start();
require_once'helpers/security.php';
$errors=isset($_SESSION['errors'])?$_SESSION['errors']:[];
$fields=isset($_SESSION['fields'])?$_SESSION['fields']:[];
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="script.js"></script>
	
	<title>Wikipedia-Search</title>

</head>
<body>

	<div class="box" align="center">
		<h1>Wikipedia Search</h1>
		<img src="https://i.pinimg.com/originals/b2/07/04/b2070465d02b32597b8162c7aa769f21.jpg">
		<br>
		<a href="https://en.wikipedia.org/wiki/Special:Random">Random Page</a>
		<br><br><br>
		<input type="text" id="lookup">
		<button class="btn btn-primary" id="search" onclick="clearBox('entries')"><span class="glyphicon glyphicon-search"></span></button><br><br>
	</div>

	<div id="entries">
	</div>

</body>
</html>

<?php
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>