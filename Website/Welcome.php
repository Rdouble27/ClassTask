<?php
$uname="";
$err_uname="";
$pass="";
$err_pass="";
$bio="";
$err_bio="";

if ($_SERVER["REQUEST METHOD"] == "POST"){

	if(empty ($_POST["uname"]))
	{
		$err_uname = "username required" ;
	}
	else
	{
		
	}
	
	if(empty ($_POST["pass"]))
	{
		$err_pass = "password required" ;
	}
	else
	{
		
	}
	if(empty ($_POST["bio"]))
	{
		$err_pass = "enter bio" ;
	}
	else
	{
		
	}
	
  echo "Username: ".$_POST["uname"]."<br>";
  echo "Password: ".$_POST["pass"]."<br>";
  echo "Gender: ".$_POST["gender"]."<br>";
  echo "Profession: ".$_POST["profession"]."<br>";
  echo "Biography: ".$_POST["bio"]."<br>";
  
  //var_dump($_POST["hobbies"]);
  $arr=$_POST["hobbies"];
  for($i=0;$i<count($arr);$i++)
  {
	  echo $arr[$i]."<br>";
  }
}
?> 
<html>
<head> </head>
<body>
<center>
<h2> User Registration </h2>
<form action="" method="post">
<table>
<tr>
 <td> <span> Username </span> </td>
 <td> :<input type="text" name="uname"><br> <span> <?php echo $err_uname; ?></span> </td>
<tr>
  <td> <span> Password </span> </td>
  <td> :<input type="password" name="pass"> </td>
<tr>
 <td> <span> Gender </span>
 <td>: <input type="radio" name="gender"> Male <input type="radio" name="gender">Female </td>
<tr>
 <td><span>Hobbies</span></td>
 <td>:
 <input type="checkbox" value="Movies" name="hobbies[]">Movies
 <input type="checkbox" value="Music" name="hobbies[]">Music
 <input type="checkbox" value="Sports" name="hobbies[]">Sports
 <input type="checkbox" value="Reading" name="hobbies[]">Reading
 <input type="checkbox" value="Drawing" name="hobbies[]">Drawing
 </td> 
<tr>  
 <td><span>Profession</span></td>
 <td>:<select>
    <option disabled selected>Choose One</option>
    <option>Teaching</option>
    <option>Government Service</option>
    <option>Business</option>
    <option>Worker</option>
</select> </td>
<tr>
 <td> <span> Biography</span> </td>
 <td> :<input type="textarea" name="bio"> </td>
<tr>
<td><input type="submit" value="Submit"></td>
</form>
</center>
</body>
</html>