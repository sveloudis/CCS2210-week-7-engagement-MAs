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
		
		$sql = "CREATE TABLE House (
				houseid int,
				name char(20),
				primary key (houseid)
				);";

		$sql .= "CREATE TABLE Professor (
				profId int,
				fname char(15),
				lname char(20),
				houseid int,
				primary key (profId),
				foreign key (houseid) references House (houseid)
				);";

		$sql .= "CREATE TABLE Course (
				crscode char(3),
				title char(30),
				primary key (crscode)
				);";

		$sql .= "CREATE TABLE Student (
				studid int,
				fname char(15),
				lname char(20),
				gender char(2),
				houseid int,
				age int,
				primary key (studid),
				foreign key (houseid) references House (houseid)
				);";

		$sql .= "CREATE TABLE Teaching (
				teachId int,
				profid int,
				crscode char(3),
				semester char(12),
				primary key (teachId),
				foreign key (profid) references Professor (profid),
				foreign key (crscode) references Course (crscode)
			);";

		// execute query
		if ($conn->multi_query($sql) === TRUE)
			echo "New tables created successfully";
		else
		    echo "Error: " . $conn->error;

		// Close the db connection
		$conn->close();
	?>
</body>
</html>