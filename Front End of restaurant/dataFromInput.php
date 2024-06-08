<?php

session_start();
$username=$_POST["username"];
$password=$_POST["password"];
$check=-1;

if($username=="admin"&&$password=="12345")
{
	$check=1;
	header("location:index.php");
}
else
{
	header("location:login.php");

}

?>