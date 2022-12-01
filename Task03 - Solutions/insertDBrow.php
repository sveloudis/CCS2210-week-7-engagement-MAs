<html>
<body>

<?php
	$sid = $_POST["studentid"];
	$sfn = $_POST["studentfirstname"];
	$sln = $_POST["studentlastname"];
	$sg = $_POST["studentgender"];
	$sa = $_POST["studentage"];
	$shid = $_POST["studenthouseid"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Hogwarts";

	echo "The data that was read from the form are: <BR>";
	echo $sid . "<BR>";
	echo $sfn . "<BR>";
	echo $sln . "<BR>";
	echo $sg . "<BR>";
	echo $sa . "<BR>";
	echo $shid . "<BR><BR>";

	echo "The query to be executed is: <BR>";

	$sql = "INSERT INTO Student Values (" . $sid . ",'" . $sfn . "','" . $sln . "','" . $sg . "'," . $shid . "," . $sa . ");";
	echo $sql;

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Hogwarts";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error)
		die("Connection failed: " . $conn->connect_error);
	else
		echo "Connected to Hogwarts database!<BR><BR>";

	if (mysqli_query($conn, $sql))
		echo "New row entered successfully";
	else
      echo "Error: " . mysqli_error($conn);

	// Close the db connection
	$conn->close();
?>



</body>
</html>