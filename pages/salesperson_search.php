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
	<p class="block_title big">Salesperson Search</p>
    <div class="media">
		<form action="result.php" method="get">
			<p class="little">Location</p><br>
			<input type="text" name="location">
			
			<p class="little">Vehicle</p><br>
			<input type="text" name="vehicle">
			
			<br>
			<input type="submit" value="Search" class="link_button">
		</form>
	</div>
</div>

<footer>
	<?php
		printFooter();
	?>
</footer>
</body>
</html>