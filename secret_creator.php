<?php
	$con = mysqli_connect('localhost', 'root', '', 'maindb');

	

	 $sql = "INSERT INTO secretCode(code) VALUES (5008)";
     if($con->query($sql) === TRUE)
     {
        echo "data is inserted succesfully";
     }
     else
     {
        echo "data is not inserted".$conn->error;
     }
?>