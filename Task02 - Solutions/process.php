<html>
<body>

<?php
	$tableName = $_POST["tb2see"];
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

	echo "You selected table: " . $tableName . "<BR><BR>";
	$sql = "select * from " . $tableName .";";
	$result = mysqli_query($conn, $sql);
//	$result = $conn->query($sql);

	if ($result) {
		$numofrows = mysqli_num_rows($result);
		echo "Num of rows: " . $numofrows . "<BR><BR>";

		while($row = mysqli_fetch_assoc($result)) {
			if ($tableName == "house")
				echo $row["houseid"] . " - " . $row["name"] . "<br>";
			else if ($tableName == "professor")
				echo $row["profId"] . " - " . $row["fname"]  . " - " . $row["lname"] . " - " . $row["houseid"] . "<br>";
			else if ($tableName == "course")
				echo $row["crscode"] . " - " . $row["title"] . "<br>";
			else if ($tableName == "student")
				echo $row["studid"] . " - " . $row["fname"]  . " - " . $row["lname"] . " - " . $row["gender"] . " - " . $row["houseid"] . " - " . $row["age"] . "<br>";
			else if ($tableName == "teaching")
				echo $row["teachId"] . " - " . $row["profid"]  . " - " . $row["crscode"] . " - " . $row["semester"] . "<br>";
		}
	}
	else {
		echo "no rows were found.";
	}
?>

<?php
	// Close the db connection
	$conn->close();
?>
</body>
</html>