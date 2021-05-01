<?php
		session_start();
		require_once 'DB_config.php';


		$uname = "";
		$pass = "";


	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uname = $_POST["uname"];
		$pass = $_POST["pass"];

		$query = "select * from user where username = '$uname' and password = '$pass' ";

		$result = get($query);

		if(count($result) > 0 ){
			$user = $result[0];
			$_SESSION["loggedin"] = $user["username"];
			header("Location: search.php");
		}else{
			echo "username or password incorrect";
		}


	}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
        body{
		   width: 100%;
	       height: 100vh;
           background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(inside.jpg);
		   background-size: cover;
		   background-position: center;
		   
        }
		
        .login-div{
            outline:1;
            margin: auto;
            width: 30% ;
			height:30%;
			padding:15px;
            margin-top: 10% ;
            background-color: #f2f2f2;
       		box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
			box-sizing:border-box;
			border:0;
        }
		
		
        .my-font{
            font-family: "Roboto",sans-serif;
        }
        .btn-mine{
            background-color: rgb(115, 200,230);
            width: 100% ;
            border: none;
            size: 3px;
            padding: 5px;
        }
        .btn-mine:hover{
            background-color: #0000FF;
        }
        .btn-mine:active{
            background-color: rgb(174, 121, 215);
        }
    </style>
<body>
<div class="login-div">
        <h1 align="center" class="my-font">Log in</h1>
	<form method="post">
		<input class="my-font" style="color: rgb(11, 1, 1);" type="text" name="uname" placeholder="UserName">
		<input class="my-font" type="password" name="pass" placeholder="Password">
		<input class="my-font btn-mine" type="submit" value="Login"><a href="Registration.php"><center>Not Registered Yet!</center></a>
	</form>
</body>
</html>