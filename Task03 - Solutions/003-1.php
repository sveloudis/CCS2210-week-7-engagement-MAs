<html>
<body>

<H1>Web Programming</H1>

<H2>TASK 03 - 1</H2>
<B>Description:</B> The form below allows you to select one of the tables in the Hogwarts database. Upon submit, the file "insertDBrow.php" is called. Your task is to simply the "insertDBrow.php" to see in detail both of these files in order to determine how to insert a row in the Hogwarts database. You have 10 minutes for this task.
<BR><BR><BR>

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
	Student House ID:  <input type="text" name="studenthouseid"><BR><BR>
	<input type="submit" name="submit" value="Submit"> 
</FORM>
<BR><BR>

</body>
</html>