<html>
<head>
<title>PHP Test</title>
</head>
<body>
<?php
$con=mysqli_connect("ec2-54-146-91-153.compute-1.amazonaws.com","viurkgajlugnms","3d33c822e23329eb406e2659a016cee4759ac092f4f96157f4a8ba65a3dcbd39","d8hdjv4le2jqun");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM test_lab6");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>
		
