<html>
<head>
<title> Bus Ticket Booking</title>
<link rel="stylesheet" href="booking.css" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
<form method="POST" action="book.php">
<div class="booking-form-box"> 
<div class="radio btn">
<input type="radio" class="btn" name="check" checked="checked"><span style="color:white;">One Way</span>
<input type="radio" class="btn" name="check"><span style="color:white;">Roundtrip</span>
</div>

<div class="booking-form">
<label style="color:white;"> Travelling From</label>

<select class="custom-select" name="From" class="form-control">
<option disabled selected>Choose One</option>
<option value="Gabtoli">Gabtoli </option>
<option value="Shyamoli">Shyamoli </option>
<option value="Kallyanpur">Kallyanpur </option>
<option value="Kafrul">Kafrul </option>
<option value="Azampur">Azampur </option>
<option value="Badda">Badda </option>
<?php echo $err_From; ?>
</select> 

<label style="color:white;"> Travelling To </label>
<select class="custom-select" name="To" class="form-control">
<option disabled selected>Choose One</option>
<option value="Chittagong">Chittagong </option>
<option value="Cox's Bazar">Cox's Bazar </option>
<option value="Comilla">Comilla </option>
<option value="Sylhet">Sylhet </option>
<option value="Rajshahi">Rajshahi </option>
<option value="Khulna">Khulna </option>
</select>

<div class="input-grp">
<Label style="color:white;">Date of Journey</label>
<input type="date"  name="DOJ" class="form-control select-date">
</div>

<div class="input-grp">
<Label style="color:white;">Return of Journey</label>
<input type="date" name="ROJ" class="form-control select-date">
</div>

<div class="input-grp">
<Label style="color:white;">Adults</label>
<input type="number"  name="adult" class="form-control" value="1">
</div>

<div class="input-grp">
<Label style="color:white;">Childen</label>
<input type="number" name="child" class="form-control" value="0">
</div>

<b>


<div class="input-grp">
<button type="submit" class="btn btn-primary bus">Confirm Booking</button>
</div>

</div>
</div>
</form>
</body>
</html>