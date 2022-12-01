<html>
<body>
	<?php
		$servername = "localhost";	
		$username = "root";
		$password = "";
		$dbname = "Hogwarts";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error)
			die("Connection failed: " . $conn->connect_error);
		else
			echo "Connected to Hogwarts database!<BR>";

		$sql = "drop table Teaching;";
		$sql .= "drop table Professor;";
		$sql .= "drop table Course;";		
		$sql .= "drop table Student;";
		$sql .= "drop table House;";

		// execute query
		if ($conn->multi_query($sql) === TRUE)
			echo "Tables were dropped successfully";
		else
		    echo "Error: " . $conn->error;

		// Close the db connection
		$conn->close();
	?>
</body>
</html>