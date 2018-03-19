<?php
include_once 'money-cart.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<header>
	<nav>
		<div class="main-wrapper">
			<div class="nav-login">
				<form method="POST" action="login.php">
					<input type="text" name="login" placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<button class="buttons" type="submit" name="submit" value="OK">Login</button>
					<a href="signup.php">SignUp</a>
				</form>
				<form>
					<button class="buttons" type="submit" name="cart">Cart: <?php echo $money ?> lei  <?php echo $number ?> buc.</button>
				</form>
			</div>
		</div>
	</nav>	
</header>