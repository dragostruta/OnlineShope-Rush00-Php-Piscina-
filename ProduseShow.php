<?php
	if (isset($_POST['electromici']))
	{
		$sql = "SELECT * FROM produse where id=1;";
		$connection = mysqli_connect("localhost","root","","shoponline");
		$result = mysqli_query($connection, $sql);
		$resultCheck = mysqli_num_rows($result);
		$i = 0;
		while($i < $resultCheck){
			$array[] = mysqli_fetch_row($result);
			$i++;
		}
		echo $array[0][1].": ".$array[0][2]." lei "; ?><form method="POST" name="p0"> <button>Add to Cart</button><br> </form> <?php
		echo $array[1][1].": ".$array[1][2]." lei "; ?> <form method="POST" name="p1"> <button>Add to Cart</button><br> </form> <?php
		echo $array[2][1].": ".$array[2][2]." lei "; ?> <form method="POST" name="p2"> <button>Add to Cart</button><br> </form><?php
		echo $array[3][1].": ".$array[3][2]." lei "; ?> <form method="POST" name="p3"> <button>Add to Cart</button><br> </form> <?php

	}
	if (isset($_POST['electromari']))
	{
		$sql = "SELECT * FROM produse where id=2;";
		$connection = mysqli_connect("localhost","root","","shoponline");
		$result = mysqli_query($connection, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0){
			while ($row = mysqli_fetch_assoc($result)){
				echo $row['Nume'].": ".$row['Pret']." lei "; ?> <button name="$row[idProduct]">Add to Cart</button><br> <?php
			}
		}
	}
	if (isset($_POST['telefoane']))
	{
		$sql = "SELECT * FROM produse where id=3;";
		$connection = mysqli_connect("localhost","root","","shoponline");
		$result = mysqli_query($connection, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0){
			while ($row = mysqli_fetch_assoc($result)){
				echo $row['Nume'].": ".$row['Pret']." lei "; ?> <button name="$row[idProduct]">Add to Cart</button><br> <?php
			}
		}
	}
	if (isset($_POST['televizoare']))
	{
		$sql = "SELECT * FROM produse where id=4;";
		$connection = mysqli_connect("localhost","root","","shoponline");
		$result = mysqli_query($connection, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0){
			while ($row = mysqli_fetch_assoc($result)){
				echo $row['Nume'].": ".$row['Pret']." lei "; ?> <button name="$row[idProduct]">Add to Cart</button><br> <?php
			}
		}
	}
