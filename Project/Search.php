<?php

		$server="localhost";
		$user="root";
		$password="";
		$db="webtech";
		
?>		

<html>
<head>
<title>Bus Search Form Design</title>
<link rel="stylesheet" type="text/css" href="Search.css">
</head>
<body>
<div class="header">
<form method="POST" action="bustype.php">
<h1> Find <span>Your</span> desired <span>Bus</span></h1>
<div class="form-box">
<input class="search-field skills" name="search" type="text" placeholder="keywords.." id="txt1" onkeyup="showHint(this.value)"/><span id="txtHint"></span>
<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", " SELECT keywords From Search "+str, true);
  xhttp.send();   
}

</script>
<select class="search-field type" name="bus type" type="text" placeholder="BUS TYPE">
<option disabled selected>Choose One</option>
<option value="1">AC Bus </option>
<option value="2">Non-AC Bus </option>
</select>

<button class="search-btn" type="submit">Search</button>
</form>
</div>
</div>
</body>
</html>




</body>
</html>