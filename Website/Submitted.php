<html>
<body>
<center>
<h2> From Submitted <h2>
<?php
$uname="";
$err_uname="";
$pass="";
$err_pass="";

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
	
  echo "Username: ".$_POST["uname"]."<br>";
  echo "Password: ".$_POST["pass"]."<br>";
  echo "Gender: ".$_POST["gender"]."<br>";
  echo "Profession: ".$_POST["profession"]."<br>";
  echo "Biography: ".$_POST["bio"]."<br>";
  
  //var_dump($_POST["hobbies"]);
  $arr=$_POST["hobbies"];
  for($i=0;$i<count($arr);$i++)
  {
	  echo $arr[$i] "<br>";
  }
}
?> 
</center>
</body> 
</html>
  
  
   