<html>
<head>
<body>
<table align="center">
<tr>
<td>Car name</td>
</tr>

<?php
$con=mysqli_connect("localhost","root","hinal123","newD");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT name FROM car_avai ORDER BY name;";
$sql .= "SELECT loc_name FROM location";

// Execute multi query
if (mysqli_multi_query($con,$sql))
{
  do
    {
    // Store first result set
    if ($result=mysqli_store_result($con)) {
      // Fetch one and one row
      while ($row=mysqli_fetch_row($result))
        {
        echo 
         "<tr>
           <td> {$row['name']} </td>
           <td> {$row['loc_name']}</td>
            </tr>\n"
        }
      // Free result set
      mysqli_free_result($result);
      }
    }
  while (mysqli_next_result($con));
}

mysqli_close($con);
?>
</table>
</body>
</html>
