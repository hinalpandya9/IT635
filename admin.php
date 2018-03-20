<!DOCTYPE html>
<html>
<head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 60%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    background-color: #ebebe0;
}

#customers tr:nth-child(even){background-color: #ebebe0;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #e63900;
    color: white;
}
</style>


<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 300px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

.right {
    position: absolute;
    right: 0px;
    
    
}


.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


<body>

<?php

$hostname = "localhost";
$username = "root";
$Password = "hinal123";
$db = "newD";

$dbconnect=mysqli_connect($hostname,$username,$Password,$db) or die ("oops!!");

if($dbconnect)
{
echo "";

}

?>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="final.php">HOME</a>
  <a href="form.php">ADD car</a>
  <a href="form1.php">ADD location</a>
  <a href="form2.php">REMOVE car</a>
  
</div>

<div class="right">
<ul>
<li>Hello ADMIN</li>
</ul>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

</script>


<table id="customers" align="center">
<tr>
<th>LIST OF CARS RENTED ALONG WITH USERS INFORMATION</th>
</tr>
<tr>
<th>RENTER ID</th>
<th> PASSWORD</th>
<th> CAR NAME</th>
<th> LOCATION NAME</th>
</tr>

<?php
$query= mysqli_query($dbconnect,'Select car_rent.email,car_rent.password,car_avai.name,car_rent.loc_name from car_rent INNER JOIN car_avai ON car_rent.carID=car_avai.carID')  or die (mysqli_error($dbconnect));
while($row=mysqli_fetch_array($query))
{
echo
"<tr>
<td> {$row['email']} </td>
<td> {$row['password']} </td>
<td> {$row['name']} </td>
<td> {$row['loc_name']} </td>
</tr>\n";
}
mysql_close($dbconnect);
?>

</table>


<table id="customers" align="center">
<tr>
<th>LIST OF CARS RENTED ALONG WITH USERS INFORMATION</th>
</tr>
<tr>
<th>RENTER ID</th>
<th> PASSWORD</th>
<th> CAR NAME</th>
<th> LOCATION NAME</th>
</tr>
</table>



</body>
</html>

