<?php

$hostname = "localhost";
$username = "root";
$Password = "hinal123";
$db = "newD";
$email = $_POST['email'];
$pass = $_POST['pass'];
$loc_name = $_POST['loc_name'];
$carID = $_POST['carID'];


$dbconnect=mysqli_connect($hostname,$username,$Password,$db) or die ("oops!!");

if($dbconnect)
{
echo "";
}


$sql = "INSERT INTO car_rent (email,password,user,carID,loc_name)
VALUES ('$email','$password','R','$carID','$loc_name')";


if ($dbconnect->query($sql)) {
    echo "Car Rented !!!!";
} else {
    echo "Error: " . $sql . "<br>" . $dbconnect->error;
}

mysql_close($dbconnect);
?>


