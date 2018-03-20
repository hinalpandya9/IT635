<?php

$hostname = "localhost";
$username = "root";
$password = "hinal123";
$db = "newD";

$carID = $_POST['carID'];


$dbconnect=mysqli_connect($hostname,$username,$password,$db) or die ("oops!!");

if($dbconnect)
{
echo "";
}


$sql = "Delete from car_avai where carID='$carID'";

if ($dbconnect->query($sql)) {
    echo "Car removed successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbconnect->error;
}

mysql_close($dbconnect);
?>

