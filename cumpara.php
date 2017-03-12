<?php
  require("head.php");
?>

<article>
<?php
    $uuid = $_SESSION['uuid'];
    if(intval($uuid) > 0)
    {
        $sql =  "SELECT * FROM `up` WHERE id_user = $uuid";
        $rs = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($rs))
        {
           echo "<form action='del.php' method='get'><h1>$row[name]</h1>
                <img src='$row[image]'/>
                <input type = \"hidden\" name=\"upid\" value=\"$row[id_up]\"/>
                <input type = \"submit\"/>
                </form>
           ";    
        }
    }    
?>
</article>

<?php
  require("footer.php");
?>