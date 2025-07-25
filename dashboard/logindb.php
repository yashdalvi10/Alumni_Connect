<?php

include 'db.php';

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM login WHERE `email`='$email' and `password`='$password' ";

$result = $conn->query($sql);

if($result->num_rows > 0)
{
	echo "<script>
alert('Welcome!!');
window.location.href='index.php';
</script>";
}
else
{
	echo "<script>
alert('Opps !! INvalid credentails !! Please try again !!');
window.location.href='login1.php';
</script>";
}




?>