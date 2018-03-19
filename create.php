<?php
session_start();

function is_here($var1)
{
	$sql = "SELECT * FROM user;";
	$connection = mysqli_connect("localhost","root","","shoponline");
	$result = mysqli_query($connection, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)){
			if($row['user_name'] == $var1)
			{
				return true;
			}
		}
	}
	return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$errors = array();
	$data = array();
	$validation = true;
	$fields = array("login","password");

	foreach ($fields as $field){
		if (empty($_POST[$field])){
			$validation = false;
			array_push($errors, "Fields '$field' is required.");
		} else {
			$data[$field] = $_POST[$field];
		}
	}
	if (is_here($data['login']) == true)
	{
		header("Location: index.php");
	}
	else {
		if ($validation){
			$connection = mysqli_connect("localhost","root","","shoponline");
			$query = "INSERT INTO user (user_name, user_password) VALUES ('$data[login]','$data[password]')";
			$result = mysqli_query($connection, $query);
			if ($result){
				$id = mysqli_insert_id($connection);
				setcookie("identifier", $id,time()+3600);
				header("Location: signups.php");
			} else {
				$_SESSION["errors"] =  array("Database Error.");
				header("Location: signup.php");
			}
		} else {
			$_SESSION["errors"] = $errors;
			$_SESSION["date"] = $data;
			header("Location: signup.php");
		}
	}

} else {
	header("Location: signup.php");
}