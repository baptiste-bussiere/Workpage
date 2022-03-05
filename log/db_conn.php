<?php

$sname= "127.0.0.1:3306";
$unmae= "mmi21d03";
$password = "6d68E8Q9_";

$db_name = "mmi21d03";

$conn = mysqli_connect($sname, $unmae, $password, $db_name, $mail);

if (!$conn) {
	echo "Connection failed!";
}