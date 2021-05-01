<!DOCTYPE html>

<html>
<head>
<title>Bus Type</title>
<style type="text/css">
*{
	margin:0;
	padding:0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	font-family:"Roboto",sans-serif;
}
body{
	background:#eceff1;
}
#main{
	text-align:center;
	width:100%;
}
#image .imgThumb{
	width: 300px;
	position:relative;
	display: inline-block;
	margin:10px;
}
#image .imgThumb img{
	width:100%;
	border:8px solid #fff;
	box-shadow: 0 0 5px 1px #555;
	border-radius:5px;
}
#image .imgThumb:hover img{
	filter: grayscale(100%);
	-webkit-filter:grayscale(100%);
	transition: filter 0.5s ease-in-out;
}
#image .imgThumb span{
	display:none;
	position:absolute;
	top:95px;
	left:75px;
} 
#image .imgThumb:hover span{
	display:block;
}
#image .imgThumb span input[type="submit"]{
	width:150px;
	height:40px;
	background:#b71c1c;
	border-radius:none;
	box-shadow:0 0 10px 2px #000;
	border: 1px solid #fff;
	color:#fff;
	font-size:16px;
	cursor:pointer;
}

</style>
<body>

<div id="main">
<div id="image">
<form method="POST" action="booking.php">
<p class ="imgThumb">
<img src="hanif.jpg">
<span><input type="submit" value="Book Now"></span>
</p>
<p class = "imgThumb">
<img src="ena.jpg">
<span><input type="submit" value="Book Now"></span>
</p>
<p class = "imgThumb">
<img src="shyamoli.jpg">
<span><input type="submit" value="Book Now"></span>
</p>
</form>
</div>
</div>


</form>
</body>
</html>