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
	<p class="block_title big">Customer Search</p>
    <div class="media">
		<form action="result.php" method="get">
			<p class="little">Location</p>
			<input type="text" name="location"><br>
			
			<p class="little">Vehicle</p>
			<input type="text" name="vehicle"><br>
			
			<br>
			<input type="submit" value="Search" class="link_button little">
		</form>
	</div>
</div>
<footer>
	<?php
		printFooter();
	?>
<!-- Dan -->
</footer>
</body>
</html>