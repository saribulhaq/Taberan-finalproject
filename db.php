<?php
session_start();
$servername='localhost';
$username='root';
$password='';
$dbname='taberan';
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn)
{
	die('could not connect to the db:' .mysqli_error());
}


?>