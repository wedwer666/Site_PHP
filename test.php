<?php

$DB_CONN = "sql11.freemysqlhosting.net";
$DB_USER = "sql11163254";
$DB_NAME = "sql11163254";
$DB_PASS = "2SlVD5M62w";

$conn = mysqli_connect($DB_CONN,$DB_USER,$DB_PASS,$DB_NAME);
if(isset($_POST['user'])&&isset($_POST['pass']))
{
	if ($stmt =mysqli_prepare($conn,"SELECT `username` FROM `users` WHERE `username` = ? AND `password` = ?;"))
	{
		$user = "NO USER";
		mysqli_stmt_bind_param($stmt,"ss", $_POST['user'], $_POST['pass']);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt,$user);
		if(mysqli_stmt_fetch($stmt))
		{
			include("index.php");
		//	eval("header('Location: http://localhost:8080/SitePhp/')");
			// echo $user;
		}
		else
		{
			include("login_error.php");
			//header('Location: http://localhost:8080/SitePhp/');
			// echo "ERROR";
		}
	}
}
// mysqli_close($conn);
?>