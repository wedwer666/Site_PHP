<?php
  require("head.php");
?>
<article>
<?php
if (isset($_GET['id']))
{
	$id = intval($_GET['id']);
	$rs = mysqli_query ($conn , "SELECT * FROM products WHERE id_products = $id");
	while($row = mysqli_fetch_assoc($rs))
	{
       echo "<div>
        <h1>".$row["name"]."</h1>
        <a href='product.php?id=".$row["id_products"]."'><img src='".$row[image]."'/></a>
        <div>$row[description]</div>
        <div>$row[price] Lei</div>
        </div>";
    }
}
?>
</article>
<?php
  require("footer.php");
?>