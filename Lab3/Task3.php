<?php

$length = 5;
$width = 6;

if($length==$width)
	echo "this shape is a square";
else 
{
	$area = $length * $width;
	echo "Area is :".$area ;
	$perimeter = 2*($length + $width);
	echo " <br> The perimeter is: ".$perimeter;
}

?>