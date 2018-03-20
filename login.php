
<?php

$hostname = "localhost";
$username = "root";
$password = "hinal123";
$db = "newD";

$dbconnect=mysqli_connect($hostname,$username,$password,$db) or die ("oops!!");

if($dbconnect)
{
echo "connected";

}

?>

/*
<table border="1" align="center">
<tr>
<th>LIST OF CARS AVAILABLE FOR RENT WITH LOCATION NAMES</th>
</tr>
<tr>
<th>Car Name</th>
<th> Model </th>
<th> Year</th>
<th> Color </th>
<th>Price </th>
<th>Location Name</th>
</tr>

<?php
$query= mysqli_query($dbconnect,'Select car_avai.name,car_avai.model,car_avai.year,car_avai.color,car_avai.price,location.loc_name from car_avai INNER JOIN location ON location.carID=car_ava$
while($row=mysqli_fetch_array($query))
{
echo
"<tr>
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
*/
