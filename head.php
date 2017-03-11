<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
<ul id="nav">
	<li><a href="">Home</a></li>
	<li><a href="">Produsele</a>
	
		<ul>
			<li><a href="categorie.php">All</a>
			<?php
				require "db.php";
				$rs = mysqli_query ($conn , "SELECT id_cat,name FROM category ORDER BY id_cat ASC");
				while($row = mysqli_fetch_assoc($rs))
				{
        			echo "<li><a href='categorie.php?cat=".$row[id_cat]."'>" . $row["name"]. "</a></li>";
    			}
			?>
		</ul>

	</li>
	<li><a href="#">About</a></li>
	<li><a href="#">Contact Us</a></li>
</ul>