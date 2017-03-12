<?php
session_start();
// error_reporting(0);
$user_name = "";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
<ul id="nav">

	<li><a href="index.php">Home</a></li>
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
	<?php
		if(intval($_SESSION['uuid']) > 0)
		{
			$sql = "SELECT `username` FROM `users` WHERE `uuid` = ".intval($_SESSION['uuid']);
			$rs = mysqli_query($conn, $sql);
			if($row = mysqli_fetch_assoc($rs))
			{
				$user_name = $row['username'];
				echo "<li><a href=\"logout.php\">Logout From $user_name</a></li>";
				$sum = 0;
				$sql =  "SELECT price,`count` FROM up WHERE id_user = ".intval($_SESSION['uuid']);
				$rs2 = mysqli_query ($conn , $sql);
					echo "<li>";
				while($r = mysqli_fetch_assoc($rs2))
				{
					try
					{
						$sum += $r['count']*$r['price'];
					}
					catch(Exception $ex)
					{

					}
					//$sum+=floatval($r['price'])*intval($['count']);
				}
			echo "Total $sum lei.</li>";
			}
			else  
				echo "<li><a href=\"login_user.php\">Logare</a></li>";
		}
		else
			echo "<li><a href=\"login_user.php\">Logare</a></li>";
	?>
</ul>

<html>
<head>

<!-- <a href= "install.php">In</a> -->

</html>
</head>
