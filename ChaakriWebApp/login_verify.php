<?php

if(isset($_POST['form3']) && $_POST['form4'])
{
	$username = $_POST['form3'];
	$password = $_POST['form4'];
	if($username == "admin" && $password == "admin")
	{
		$url="dashboard.php";
		Header("Location: $url");
	}
	else
	{
		$url="index.html?msg=invalid";
		Header("Location: $url");
	}
}
?>