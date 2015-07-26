<?php
$name= $_POST["name"];

if ($name=="mango")
{
	$taste ="Sweeter";
	$color ="Yellow and Green";
}
elseif ($name="apple")
{
	$taste ="Sweet";
	$color ="Red";	
}
echo "Taste---------".$taste."<br>"."Color--------".$color;
?>