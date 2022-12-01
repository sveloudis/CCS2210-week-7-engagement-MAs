<html>
<body>
<?php
	$con = mysqli_connect("localhost","root","");
	if (!$con)
		die("Could not connect: " . mysqli_connect_error());
	
	echo "Connected to MySQL!<BR>";
	
	if ($con->query("CREATE DATABASE Hogwarts"))
		echo "Database created successfully.";
	else
		echo "Error creating database: " . mysqli_error($con);
	
	mysqli_close($con);
?>
</body>
</html>