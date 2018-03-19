<?php
session_start();

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
				<form class="left  margin-right">
					<div>Hello <?php echo $_SESSION['loggued_on_user'] ?></div>
				</form>
				<form method="POST" class="right">
					<button class="buttons" type="submit" name="cart"><?php echo $money ?> lei  <?php echo $number ?> buc.</button>
				</form>
				<form method="POST" action="logout.php" class="right">
					<button class="buttons" type="submit" name="logout" value="logout">Logout</button>
				</form>
			</div>
		</div>
	</nav>	
</header>

<?php
include_once 'navcontent.php'
include_once 'ElectroMici.php';
?>