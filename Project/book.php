<style>
img
{
	background-position:center;
	background-size:cover;
}
</style>
<center>
<?php

    $uname = "";
	$pass = "";

    if($_SERVER["REQUEST_METHOD"] == "POST" )
	{
	$From=$_POST["From"];
	$To=$_POST["To"];
	$DOJ=$_POST["DOJ"];
	$ROJ=$_POST["ROJ"];
	$adult=$_POST["adult"];
	$child=$_POST["child"];
	$server="localhost";
    $user="root";
    $pass="";
    $db="webtech";
    $conn= mysqli_connect($server,$user,$pass,$db);
	 
	$query = "insert into booking values('$From','$To','$DOJ','$ROJ','$adult','$child')";
	
	if(mysqli_query($conn,$query))
	{
		echo "Booking Done!";
		echo "<img src='booking.jpg' >"; 
	}
	    else {
		echo "Not Booked";
		}
	}
	
?>	
</center>