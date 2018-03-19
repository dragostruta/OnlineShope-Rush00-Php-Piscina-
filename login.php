<?php
session_start();
	function auth($login, $passwd) {
	if (!$login || !$passwd)
		return false;
		else
		{

			$sql = "SELECT * FROM user;";
			$connection = mysqli_connect("localhost","root","","shoponline");
			$result = mysqli_query($connection, $sql);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck > 0){
				while ($row = mysqli_fetch_assoc($result)){
					if($row['user_name'] == $_POST['login'] && $row['user_password'] == $_POST['password'])
					{
						return true;
					}
				}
			}
		}
		return false;
}

	if ($_POST['login'] && $_POST['password'] && auth($_POST['login'] ,$_POST['password']))
	{
		$_SESSION['loggued_on_user'] = $_POST['login'];
		header("Location: logins.php");
	}
	else {
		$_SESSION['loggued_on_user'] = "";
		header("Location: accNOT.php");
	}