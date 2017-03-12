<?php

session_start();
$pid = intval($_GET['upid']);
$uid = intval($_SESSION['uuid']);
if( $pid > 0 && $uid > 0)
{
	require "db.php";
	$sql =  "DELETE  FROM user_product WHERE id_user = $uid AND id_up = $pid";
	mysqli_query ($conn , $sql);
}
mysqli_close($conn);
header('Location: ' . $_SERVER['HTTP_REFERER']);