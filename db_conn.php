<?php  

$sname = "localhost";
$uname = "root";
$password = "hari";

$db_name = "loginform";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}