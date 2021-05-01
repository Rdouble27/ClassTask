<html>
<head>
<title>Contact Form</title>
<style>
body {
	margin:0;
	padding:0;
	text-align:center;
	background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(contact.jpg);
	background-size:cover;
	background-position:center;
	font-family:sans-serif;
}
.contact-title{
	margin-top:100px;
	color: #fff;
	text-transform: uppercase;
	transition:all 4s ease-in-out;
}
.contact-title h1{
	font-size: 32px;
	line-height:10px;
}
.contatc-title h2{
	font-size:16px;
}
form{
	margin-top:50px;
	transition:all 4s ease-in-out;
	
}
.form-control{
	width:600px;
	background:transparent;
	border:none;
	outline:none;
	border-bottom:1px solid black;
	color:#fff;
	font-size:18px;
	margin-bottom:16px;
}
input{
	height:45px;
}
form .submit
{
	background:#ff5722;
	border-color:transparent;
	color:#fff;
	font-size:20px;
	font-weight:bold;
	letter-spacing:2px;
	height:50px;
	margin-top:20px;
}
form .submit:hover
{
	background-color: #bb0d00;
	cursor:pointer;
}
h1{
	color:#fff;
}
h2{
	color:#fff;
}
</style>
</head>

<body>
<div class="contact-title">
<h1>Say Hello! </h1>
<h2>We are always ready to serve you</h2>
</div>
<div class="contact-form">
<form id="contact-form" method="post" action="Contact-Form_Handler.php">
<input name="name" type="text" class="form-control" placeholder="Your Name" required>
<br>
<input name="email" type="email" class="form-control" placeholder="Your Email" required>
<br>
<textarea name="message" class="form-control" placeholder="Message" row="4"required></textarea><br>
<input type="submit" class="contact-form submit" value="SEND MESSAGE">
</form>
</div>
</body>
</html>