<?php

session_start();
$pid = intval($_POST['idp']);
$uid = intval($_SESSION['uuid']);
if( $pid > 0 && $uid > 0)
{
	require "db.php";
	$sql =  "SELECT id_up, `count` FROM user_product WHERE id_user = $uid AND id_produs = $pid";
	$rs = mysqli_query ($conn , $sql);
	if($r=mysqli_fetch_assoc($rs))
	{

		$r['count']++;
		$sql = "UPDATE `user_product` SET `count` = ".$r['count']." WHERE `id_up` = ".$r[id_up].";";
		mysqli_query($conn, $sql);
	
	}
	else
	{
		mysqli_query($conn, "INSERT INTO user_product(id_user,id_produs) VALUES($uid,$pid);");
	}

}
mysqli_close($conn);
header('Location: ' . $_SERVER['HTTP_REFERER']);