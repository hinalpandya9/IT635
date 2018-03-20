<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
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
</style>

<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: auto;
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
$password = "hinal123";
$db = "newD";

$dbconnect=mysqli_connect($hostname,$username,$password,$db) or die ("oops!!");

if($dbconnect)
{
echo "";

}

?>

<div class="right">
<ul>
<li>HELLO RENTER</li>
</ul>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="final.php">HOME</a>
  <a href="form01.php">RENT car</a>
  <a href="form02.php">RETURN car</a>
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



<table id="customers" align="center" >


<tr>
<th>LIST OF CARS AVAILABLE FOR RENT WITH LOCATION NAMES</th></br>
</tr>
<tr>
<th>Car_ID </th>
<th>Car Name</th>
<th> Model </th>
<th> Year</th>
<th> Color </th>
<th>Price </th>
<th>Location Name</th>
</tr>

<?php
$query= mysqli_query($dbconnect,'Select car_avai.carID,car_avai.name,car_avai.model,car_avai.year,car_avai.color,car_avai.price,location.loc_name from car_avai INNER JOIN location ON location.carID=car_avai.carID ORDER BY carID') or die (mysqli_error($dbconnect));
while($row=mysqli_fetch_array($query))
{
echo
"<tr>
<td> {$row['carID']} </td>
<td> {$row['name']} </td>
<td> {$row['model']} </td>
<td> {$row['year']} </td>
<td> {$row['color']} </td>
<td> {$row['price']} </td>
<td> {$row['loc_name']} </td>
</tr>\n";
}
mysql_close($dbconnect);
?>

</table>
</body>
</html>
