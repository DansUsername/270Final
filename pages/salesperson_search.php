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
		<form action="welcome.php" method="get">
			<p class="little">Location</p><br>
			<input type="text">
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