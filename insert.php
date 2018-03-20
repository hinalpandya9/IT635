<?php

$hostname = "localhost";
$username = "root";
$password = "hinal123";
$db = "newD";
$name = $_POST['name'];
$model = $_POST['model'];
$year = $_POST['year'];
$color = $_POST['color'];
$price = $_POST['price'];


$dbconnect=mysqli_connect($hostname,$username,$password,$db) or die ("oops!!");

if($dbconnect)
{
echo "";
}


$sql = "INSERT INTO car_avai (carID,name,model,year,color,price)
VALUES (0,'$name','$model','$year','$color','$price')";

if ($dbconnect->query($sql)) {
    echo "New car added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbconnect->error;
}

mysql_close($dbconnect);
?>

