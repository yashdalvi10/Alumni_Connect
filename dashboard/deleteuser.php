<?php
include 'db.php';

$id = $_GET["id"];

$sql = "DELETE FROM `user` WHERE `user_id`='$id'";
if($conn->query($sql)===True)
{
	echo "deleted";
}
else
{
	echo "Unable to delete";	
}










?>