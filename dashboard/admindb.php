<?php

$name=$_POST["name"];
$email=$_POST["email"];
$phone_no=$_POST["phone_no"];
$password=$_POST["password"];



include 'db.php';


$sql = "INSERT INTO `admin`(`name`, `email`, `phone_no.`, `password`) VALUES ('$name','$email','$phone_no','$password')";


if($conn->query($sql)===True)
{
	echo "submitted";
}
else
{
	echo "not submitted";
}

?>