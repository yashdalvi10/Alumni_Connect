<?php

include 'db.php';


$id = $_POST["id"];
$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$mail = $_POST["email"];
$pno = $_POST["phone"];
$add = $_POST["address"];
$pin = $_POST["pincode"];	


$sql = "UPDATE `user` SET `first_name`='$fname',`last_name`='$lname', `email`='$mail',`phone`='$pno',`address`='$add',`pincode`='$pin'  WHERE `user_id`='$id' ";
if($conn->query($sql)===True)
{
	echo "updated";
}
else
{
	echo "unable to update";
}








?>