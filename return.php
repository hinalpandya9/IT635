<?php

$hostname = "localhost";
$username = "root";
$password = "hinal123";
$db = "newD";

$email = $_POST['email'];


$dbconnect=mysqli_connect($hostname,$username,$password,$db) or die ("oops!!");

if($dbconnect)
{
echo "";
}


$sql = "Delete from car_rent where email='$email' ";

if ($dbconnect->query($sql)) {
    echo "Car removed successfully";
}
else {
    echo "CONTACT THE ADMIN" ;
}

mysql_close($dbconnect);
?>

