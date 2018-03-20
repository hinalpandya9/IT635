<?php

$hostname = "localhost";
$username = "root";
$password = "hinal123";
$db = "newD";
$loc_name = $_POST['loc_name'];
$carID = $_POST['carID'];


$dbconnect=mysqli_connect($hostname,$username,$password,$db) or die ("oops!!");

if($dbconnect)
{
echo "";
}


$sql = "INSERT INTO location (loc_ID,loc_name,carID)
VALUES (0,'$loc_name','$carID')";

if ($dbconnect->query($sql)) {
    echo "New location added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbconnect->error;
}

mysql_close($dbconnect);
?>



