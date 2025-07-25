<?php

include 'db.php';


$id = $_POST["id"];
$cname=$_POST["cname"];
$branch=$_POST["branch"];
$date=$_POST["date"];
$venue=$_POST["venue"];
$time=$_POST["time"];


$sql = "UPDATE `drive` SET `cname`='$cname',`branch`='$branch', `date`='$date',`venue`='$venue',`time`='$time'  WHERE `id`='$id'";
if($conn->query($sql)===True)
{
	echo "updated";
}
else
{
	echo "unable to update";
}








?>