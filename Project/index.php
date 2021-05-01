<?php

    $uname = "";
	$pass = "";

    if($_SERVER["REQUEST_METHOD"] == "POST" )
	{
	$uname=$_POST["uname"];
	$pass=$_POST["pass"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$server="localhost";
    $user="root";
    $pass="";
    $db="webtech";
    $conn= mysqli_connect($server,$user,$pass,$db);
	$query = "insert into registration values ('$uname','$pass','$email','$phone')"; 
	$SELECT="SELECT email from registration Where email = ? Limit 1 ";
	if(mysqli_query($conn,$query))
	
	{
		echo "Registered";
	}
	
	else 
	{
		
		echo "Not Resistered";
	}
	}
?>	