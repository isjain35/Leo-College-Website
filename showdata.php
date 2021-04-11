<?php
	include('session.php');
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	</head>
<body>
	<nav class="navbar navbar-inverse" style="border-radius: 30px; margin: 0px; padding 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
        <img src="images/download%20(2).jpg" style="height: 30px; margin: 10px; transform: rotate(0deg); border-radius: 10px;">
      <a class="navbar-brand" href="#">Leo College</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="active"><a href="contact.php">Contact Us<span class="caret"></span></a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
    
	</body>
</html>

<?php
	$con = mysqli_connect('localhost','root','', 'maindb');
	if($con)
	{
		$query ="select * from student_queries";
		$result = mysqli_query($con, $query);
	}
	else
	{
		echo "you are not connected";
	}

	
?>

<!doctype html>
<html>
	<head>
		<title>
			Data from main_login_database
		</title>
		<style>
			table {
			text-align: center;
			border: 1px;
			width: 1200px;
			line-height: 30px;
		}
		body {
			text-align: center;
		}
		tr:hover {
			background-color: #999;

		}
		.header {
			background-color: #999;
			font-family: times;

		}
		td {
			font-family: cursive;


		}
		td:hover {
			background-color: lightblue;
			transform: rotateY(20deg);
		}
		h1:hover {
			transform: rotate(2.5deg);
			text-align: center;

		}
		h1 {
			font-family: cursive;
		}
		marquee:hover {
			background-color: lightblue;
		}
		 marquee {
		 	font-family: monospace;
		 }
		 .messageTD {
		 	text-align: left;
		 }
		</style>
	</head>
	<body><hr width="130px">
		<h1><u>Student's Query Record</u></h1>
		<marquee>You may have reply all the queries on their Email or sms one by one.</marquee>
		<table border="1px">
			
			<tr class="header">
				<th>ID</th>
				<th>Name</th>
				<th>E-mail</th>
				<th>Mobile</th>
				<th>Message</th>
			</tr>

			<?php
			while($rows = mysqli_fetch_assoc($result))
			{
				?>
				<tr>
					<td> <?php echo $rows['id']; ?> </td>
					<td class="messageTD"> <?php echo $rows['name']; ?> </td>
					<td class="messageTD"> <?php echo $rows['email']; ?> </td>
					<td> <?php echo $rows['mobile']; ?> </td>
					<td class="messageTD"> <?php echo $rows['message']; ?> </td>

				</tr>
				<?php
			}
			?>
		</table>

	</body>
</html>