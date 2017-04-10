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
			
			<p class="little">Customer</p><br>
			<input type="text" name="customer">
			
			<p class="little">Salesperson</p><br>
			<input type="text" name="salesperson">
			
			<p class="little">Sale</p><br>
			<input type="text" name="sale">
			
			<p class="little">Visit</p><br>
			<input type="text" name="visit">
			
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