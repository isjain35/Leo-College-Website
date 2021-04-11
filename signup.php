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
	 //create database
	 /* $sql = "CREATE DATABASE mainDB";
	 if($conn->query($sql) === TRUE)
		 echo "Database is created";
	 else
		 die("DATABASE is not created due to".$conn->error()); */
	 
	 
	 //create table
	  $sql1 = "CREATE TABLE main_login_data(id int(6) auto_increment primary key, name varchar(30) not null, password varchar(15) not null)"; 
	 if($conn->query($sql1) === TRUE)
	 {
	 	echo "table is created";
	 }
	 else
	 {
	 	echo "table is not create";
	 } 
	 $conn->close();
?>