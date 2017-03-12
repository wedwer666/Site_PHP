<?php

$DB_CONN = "sql11.freemysqlhosting.net";
$DB_USER = "sql11163254";
$DB_NAME = "sql11163254";
$DB_PASS = "2SlVD5M62w";

$conn = mysqli_connect($DB_CONN,$DB_USER,$DB_PASS,$DB_NAME);
if(isset($_POST['user'])&&isset($_POST['pass']))
{
	if ($stmt =mysqli_prepare($conn,"INSERT INTO `users` (`uuid`,`username`, `password`) VALUES (uuid(), ? , ?)"))
	{
		$user = "NO USER";
		mysqli_stmt_bind_param($stmt,"ss", $_POST['user'], $_POST['pass']);
		mysqli_stmt_execute($stmt);
		$id = mysqli_stmt_insert_id($stmt); 
		if ($id > 0)
			// echo "OK";
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		else
			// echo "KO";
			header('Location: login_error.php');
	}
}
else
	header('Location: login_error.php');
mysqli_close($conn);
?>