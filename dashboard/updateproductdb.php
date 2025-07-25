<?php

include 'db.php';


$id = $_POST["id"];
$ename=$_POST["ename"];
$organize=$_POST["organize"];
$date=$_POST["date"];
$venue=$_POST["venue"];
$time=$_POST["time"];


$sql = "UPDATE `event` SET `ename`='$ename',`organize`='$pmrp', `date`='$date',`venue`='$venue',`time`='$time'  WHERE `id`='$id'";
if($conn->query($sql)===True)
{
	echo "updated";
}
else
{
	echo "unable to update";
}








?>