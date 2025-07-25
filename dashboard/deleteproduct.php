<?php
include 'db.php';

$id = $_GET["id"];

$sql = "DELETE FROM `event` WHERE `id`='$id'";
if($conn->query($sql)===True)
{
	echo "deleted";
}
else
{
	echo "Unable to delete";	
}










?>