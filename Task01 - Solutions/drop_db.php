<html>
<body>
<?php
	$con = mysqli_connect("localhost","root","");
	if (!$con)
		die("Could not connect: " . mysqli_connect_error());
	
	echo "Connected!<BR>";
	
	if ($con->query("DROP DATABASE Hogwarts"))
		echo "Database was dropped";
	else
		echo "Error dropping database: " . mysqli_error($con);
	
	mysqli_close($con);
?>
</body>
</html>