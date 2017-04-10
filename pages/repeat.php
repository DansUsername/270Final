<?php
	function printHead(){
		echo
			'<!---description:defines title, favicon, rss, and description for browser--->
			<title>Acme Car Dealership</title>
	
			<!---description:ensures that scale is correct on mobile--->
			<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	
			<!---description:links html document to sylesheet--->
			<link rel="stylesheet" type="text/css" href="style.css">';
	}
	function printHeader(){
		echo
			'<!---description:displays title, description of site--->
			<div class="big">
				<p class="title">
					<a href="index.php">Acme Car Dealership</a>
				</p>
				<!---description:displays avatar photo if title is disabled--->
				<a href="index.php">
					<img src="images/avatar.jpg" id="avatar_large" class="circle">        
				</a>
				<!---description:shows sites description--->
				<p class="description">We sell a bunch of cars.</p>
			</div>

			<!---description:displays header image if enabled--->
			<!---<img src="{HeaderImage}" id="header_image">--->

			<!---description:shows links to other pages--->
			<div class="navigation">
				<a href="index.php">Home</a>
				<a href="customer_search.php">Customer Search</a>
				<a href="salesperson_search.php">Salesperson Search</a>
			</div>';
	}
	function printFooter(){
		echo
			'<div class="navigation">
			</div>
			<!---description:displays avatar photo--->
			<a href="index.html">
				<img src="images/avatar.jpg" id="avatar_large" class="circle"> 
			</a>

			<!---description:shows site description--->
			<p class="description little">Words at the bottom of the page look pretty neat.</p>

			<!---description:shows copyright info if it is enabled--->
			<p class="fine center_content line_spacing">This is super-secret fine-print.</p>';
	}
?>