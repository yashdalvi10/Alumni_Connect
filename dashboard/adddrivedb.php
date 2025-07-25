<?php

$cname=$_POST["cname"];
$branch=$_POST["branch"];
$date=$_POST["date"];
$venue=$_POST["venue"];
$time=$_POST["time"];







include 'db.php';


$sql="INSERT INTO `drive`(`cname`, `branch`, `date`, `venue`,`time`) VALUES ('$cname','$branch','$date','$venue','$time')";


if($conn->query($sql)===True)
{
	echo "submitted";
}
else
{
	echo "not submitted";
}









?>