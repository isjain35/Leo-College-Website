<?php

$con = mysqli_connect('localhost', 'root', '', 'maindb');
if($con)
	echo "connected";
else
	die("Not connected".$con->connect->error());

$sql = " create table main_login_data (id int(10) primary key auto_increment,name varchar(30) not null, password varchar(25) not null) ";

if($con->query($sql) === TRUE)
	echo "table is created";
else
	die("Not created".$con->error);

?>