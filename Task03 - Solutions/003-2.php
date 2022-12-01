<html>
<body>

<H1>Web Programming</H1>

<H2>TASK 03 - 2</H2>
<B>Description:</B> The form below allows you to select one of the tables in the Hogwarts database. Upon submit, the file "insertDBrow.php" is called. Like the previous one. HOWEVER, ther is a catch. Your mission, should you choose to accept it, is to edit this file (003-2.php) in order to create a drop down menu for the field "Student House Name" which is automatically populated with the appropriate values (Gryffindor, Hufflepuff, Ravenclaw, Slytherin) from the database. You have 25 minutes for this task.
<BR><BR><BR>



<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Hogwarts";
	$houses = array();

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error)
		die("Connection failed: " . $conn->connect_error);
	else
		echo "Connected to Hogwarts database!<BR><BR>";

	$sql = "select name from House;";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		while($row = mysqli_fetch_assoc($result))
			array_push($houses , $row["name"]);
	}
	else
		echo "no rows were found.";

	// Close the db connection
	$conn->close();
?>

<B>EXAMPLE OF INSERTING A NEW STUDENT:</B><BR><BR>

<FORM method="POST" action="insertDBrow.php">
	Student id: <input type="text" name="studentid"><BR><BR>
	Student first name: <input type="text" name="studentfirstname"><BR><BR>
	Student last name: <input type="text" name="studentlastname"><BR><BR>
	Student Gender: <select name="studentgender">
						<option value="" selected>
						<option value="F">Female
						<option value="M">Male
					</select><BR><BR>
	Student Age:  <input type="text" name="studentage"><BR><BR>
	Student House Name:
	<select name="studenthouseid">
		<option value="" selected>
		<?php
			$housenumber = 1;
			foreach ($houses as $nameOfHouse) {
		?>
				<option value="<?php echo $housenumber ?>"><?php echo $nameOfHouse ?></option>
		<?php 
				$housenumber++;
			}
		?>
	</select><BR><BR>
					
	<input type="submit" name="submit" value="Submit"> 
</FORM>
<BR><BR>

</body>
</html>