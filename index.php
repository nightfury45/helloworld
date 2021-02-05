<html>
<head>
<title>PHP Test</title>
</head>
<body>
<?php
	echo '<p>TEST DATABASE </p>;
	$host_heroku = "ec2-54-146-91-153.compute-1.amazonaws.com";
	$db_heroku = "d8hdjv4le2jqun";
	$user_heroku = "viurkgajlugnms";
	$pw_heroku = "3d33c822e23329eb406e2659a016cee4759ac092f4f96157f4a8ba65a3dcbd39";
	
	$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
	$pg_heroku = pg_connect($conn_string);
	
	if (!$pg_heroku)
	{
		die('Error: Could not connect: ' . pg_last_error());
	}
	
	$query = 'select * from test_lab6';
	$result = pg_query($pg_heroku, $query);
	
	$i = 0;
	echo '<html><body><table><tr>';
	while ($i < pg_num_fields($result))
	{
		$fieldName = pg_field_name($result, $i);
		echo '<td>' . $fieldName . '</td>';
		$i = $i + 1;
	}
	echo '</tr>'
	
	$i = 0;
	while ($row = pg_fetch_row($result))
	{
		echo '<tr>';
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			echo '<td>' . $c_row . '</td>';
			next($row);
			$y = $y + 1;
		}
		echo '</tr>';
		$i = $i + 1;
	}
	pg_free_result($result);
	
	echo '</table></body></html>';
?>



</body>
</html>
		
