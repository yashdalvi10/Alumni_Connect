<?php
include 'db.php';

$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$year=$_POST["year"];
$cname=$_POST["cname"];
$url=$_POST["url"];



$sql = "INSERT INTO `user`(`first_name`, `last_name`, `email`, `phone`, `address`, `pincode`,`password`) VALUES ('$name','$email','$phone','$year','$cname','$url'')";


if($conn->query($sql)===True)
{
	echo "Submitted, Thank You";
}
else
{
	echo "Not Submitted, Go Back";
}


?>