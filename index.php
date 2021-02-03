<html>
<head>
<title>PHP Test</title>
</head>
<body>
<?php
try{
	$myPDO = new PDO("pgsql:host=ec2-54-146-91-153.compute-1.amazonaws.com,dbname=d8hdjv4le2jqun","viurkgajlugnms","3d33c822e23329eb406e2659a016cee4759ac092f4f96157f4a8ba65a3dcbd39");
	echo "Connected to PostgreSQL with PDO";
}catch(PDOException $e){
	echo $e->getMessage();
}
?>



</body>
</html>
		
