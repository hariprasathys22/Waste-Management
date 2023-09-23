<?php
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "hari";
$dbname = "transport";
if (!$con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname))
{
  die("failed to connect!");
}
?>