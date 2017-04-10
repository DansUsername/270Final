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
			<p class="little">Location</p>
			<input type="text" name="location"><br>
			
			<p class="little">Vehicle</p>
			<input type="text" name="vehicle"><br>
			
			<p class="little">Customer</p>
			<input type="text" name="customer"><br>
			
			<p class="little">Salesperson</p>
			<input type="text" name="salesperson"><br>
			
			<p class="little">Sale</p>
			<input type="text" name="sale"><br>
			
			<p class="little">Visit</p>
			<input type="text" name="visit"><br>
			
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