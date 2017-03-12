<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
<ul id="nav">
	<li><a href="http://localhost:8080/SitePhp/">Home</a></li>
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
	<li><a href="">Tendinte</a>
		<ul>
			<li><a href="about.php">Noutati</a>
			</ul>
		</li>
	<li><a href="">Contact</a>
		<ul>
			<li><a href="contact.php">Chisinau</a>
			<li><a href="contact2.php">Bucuresti</a>
			<li><a href="contact3.php">Kiev</a>
		</ul>
		</li>
	<li><a href="">Cumpara</a>
		<ul>
			<li><a href="cumpara.php">Acum</a>
		</ul>
	</li>
	<li><a href="">Logare</a>
		<ul>
			<li><a href="login_user.php">Datele user</a>
			</ul>
		</li>

</ul>