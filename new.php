<html>
<body>
<?php
$connection=mysqli_connect('localhost','root','hinal123','newD') or die ("oops!!!")
if($connection)
{
echo "::::CONNECTED:::::";
}
?>
<table border="1" align="center">
<tr>
<td>Location ID</td>
<td>Location Name</td>
<td> Car</td>
</tr>

<?php
$query= mysqli_query($connection,"Select * from location") or die (mysqli_error($connection));
while($row=mysqli_fetch_array($query))
{
echo
"<tr>
<td> {$row['loc_ID']} </td>
<td> {$row['loc_name']} </td>
<td> {$row['carID']} </td>
</tr>\n";
}

mysql_close($connection);
?>
</table>
</body>
</html>

