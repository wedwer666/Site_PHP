<?php
  require("head.php");
  require("db.php");

  $users = mysqli_query ($conn , "SELECT * FROM `users`");
  print_r($users);
  require("footer.php");
?>