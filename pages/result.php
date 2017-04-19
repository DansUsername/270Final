<!DOCTYPE html>
<html>
<head>
	<?php 
		include 'repeat.php';
		printHead();
	?>
</head>
<body>
<header>
	<?php 
		printHeader();
	?>
</header>
<div class="block">
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
		//testing sql
		$sql = "select * from vehicle";
		$result = $conn->query($sql);

		if($result->num_rows > 0) {
			echo "There are results.";
		} else{
			echo "There are no results.";
		}
		echo "<br>";

		$sql = "select model from vehicle";
		$result = $conn->query($sql);
		echo $sql;	
		//Items from form
		echo "<br>The location is " . $_GET["location"] . "<br>";
		echo "The vehicle is " . $_GET["vehicle"] . "<br>";
		echo "The customer is " . $_GET["customer"] . "<br>";
		echo "The salesperson is " . $_GET["salesperson"] . "<br>";
		echo "The sale is " . $_GET["sale"] . "<br>";
		echo "The visit is " . $_GET["visit"] . "<br>";

		if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row['model'] . "<br>";
		}
		} else {
			echo "0 results";
		}
		$conn->close();
	?>
</div>
<footer>
	<?php
		printFooter();
	?>
</footer>
</body>
</html>