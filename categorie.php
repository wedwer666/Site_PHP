<?php
  require("head.php");
?>
<article>
<?php
if (isset($_GET['cat']))
{
	$id = intval($_GET['cat']);
	$rs = mysqli_query ($conn , "SELECT * FROM products WHERE id_cat = $id");
	while($row = mysqli_fetch_assoc($rs))
	{
       echo "<div>
        <h1>".$row["name"]."</h1>
        <a href='product.php?id=".$row["id_products"]."'><img src='".$row[image]."'/></a>
        <div>$row[price] Lei</div>
        <div><form action='add.php' method='post'/><input type='submit' value='Add'/><input type='hidden' name='idp' value='$row[id_products]'/></form>
        </div>";
        
    }
}
else
{

	$rs = mysqli_query ($conn , "SELECT * FROM category");
	while($row = mysqli_fetch_assoc($rs))
	{
        echo "<div>
        <h1>".$row["name"]."</h1>
        <a href='?cat=".$row["id_cat"]."'><img src='".$row[image]."'/></a>
        </div>";
    }
}
?>
</article>
<?php
  require("footer.php");
?>