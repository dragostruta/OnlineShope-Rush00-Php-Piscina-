<?php
session_start();
	function checkField($field){
		if (array_key_exists("data", $_SESSION)){
			if (array_key_exists($field, $_SESSION["data"])){
				echo $_SESSION["data"][$field];
				unset($_SESSION["data"][$field]);
			}
		}
	}
if (array_key_exists("errors",$_SESSION)){
	foreach($_SESSION["errors"] as $error)
	{
		echo $error."<br>";
	}
	unset($_SESSION["errors"]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div align="center">
		<form method="POST" action="create.php">
			Username: <input class="signup-input" type="text" name="login">
			<br>
			Password: <input class="signup-input" type="password" name="password">
			<br>
			<input class="buttons center" type="submit" name="submit" value="Submit">
		</form>
		<form method="POST" action="index.php">
			<input class="buttons center" type="submit" name="back" value="Back">
		</form>
	</div>
</body>
</html>
<?php
if (array_key_exists("data", $_SESSION)){
	unset($_SESSION["data"]);
}
?>