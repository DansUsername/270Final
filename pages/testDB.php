//This is now all in result.php
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "car_dealership";
	$port = 3306;
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully<br>";

	$sql = "select * from vehicle";
	$result = $conn->query($sql);

	if($result->num_rows > 0) {
		echo "There are results.";
	} else{
		echo "There are no results.";
	}
	echo "<br>";

	$sql = "select * from vehicle";
	echo $sql;
1?>