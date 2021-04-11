<?php
	$conn = mysqli_connect('localhost', 'root', '', 'maindb');
	 if($conn)
	 {
	 	echo "connection succesfull <br>";
	 }
	 else
	 {
	 	die("connection lost".$conn->connect_error);
	 }
	 
	$name = $_POST['NAME'];
	$email = $_POST['EMAIL'];
	$mobile = $_POST['MOBILE'];
	$message = $_POST['MESSAGE'];



	 //insert value in table
	 $sql = "INSERT INTO student_queries(name, email, mobile, message) VALUES ('$name', '$email', '$mobile', '$message')";
	 if($conn->query($sql) === TRUE)
	 {
	 	echo "data is inserted succesfully";
	 }
	 else
	 {
	 	echo "data is not inserted".$conn->error;
	 }
	 header('location: thanks.php');
	 $conn->close();
?>