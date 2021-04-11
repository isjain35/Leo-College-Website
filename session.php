<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "maindb";

    $con = mysqli_connect($servername, $username, $password, $dbname);
	session_start();

	$user_check = $_SESSION['login_user'];
	$sql="select name from main_login_data where name ='$user_check'";
	$ses_sql=mysqli_query($con,$sql);
	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$login_session = $row['name'];

	if(!isset($_SESSION['login_user']))
	{
		echo "please login ";
		header('location: loginpage.php');
	}else {
		echo "Welcome <b><u> $user_check <u><b>";
	}
?>