<?php
session_start();
include('database/dbconfig.php');

if ($dbconfig) {
	//header('Location: index.php');
}
else
{
	header("Location: database/dbconfig.php");
}

if (!$_SESSION['username']) {
	header("Location: login.php");
}

?>

