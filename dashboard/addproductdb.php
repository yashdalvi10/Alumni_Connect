<?php

$ename=$_POST["ename"];
$organize=$_POST["organize"];
$date=$_POST["date"];
$venue=$_POST["venue"];
$time=$_POST["time"];







include 'db.php';


$sql="INSERT INTO `products`(`ename`, `organize`, `date`, `venue`,`time`) VALUES ('$ename','$organize','$date','$venue','$time')";


if($conn->query($sql)===True)
{
	echo "submitted";
}
else
{
	echo "not submitted";
}









?>