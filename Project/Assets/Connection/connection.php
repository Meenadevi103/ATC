<?php
$username="root";
$server="localhost";
$password="";
$db="db_ambalapuzha";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con)
{
	echo "conneceted failed";
}
?>