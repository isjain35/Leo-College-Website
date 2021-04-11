<?php
	$code = $_POST['code'];

	//$CODE = stripcslashes($code);
	//$CODE = mysql_real_escape_string($code);

	mysqli_connect('localhost', 'root', '', 'maindb');


	$result = mysql_query("select * from secretCode where code = $code ") 
		or die("failed to load".mysqli_error());

		$row = mysql_fetch_array($result);
		if($row['code'] == $CODE)
		{
			echo "login success welcome ".$row['code'];
			header('location :create.php');
		}
		else
		{
			echo "failed to login";
			header('location :create.php');
		}
?>