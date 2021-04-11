
<html>
	<head>
			<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



  <style>
  		layer {
  			background-color: lightblue;
  			margin-top: 220px;
  			margin-left: 340px;
  			height: 250px;
  			width: 600px;
  			text-align: center;
  			border-top-right-radius: 200px;
  			border-bottom-left-radius: 200px; 
  			opacity: 0.85;

  		}
  		input {
  			margin-top: 10px;
  			border-radius: 12px;
  			height: 40px;
  			width: 350px;
  			font-family: times;
  		opacity: none;

  		}
  		body {
        text-align: center;
        background-color: white;
        background-image: url(images/front.jpg);
  			background-repeat: no-repeat;

  		}
  </style>
	</head>
	<body>
		<nav class="navbar navbar-inverse" style="border-radius: 30px; margin: 0px; padding 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
        <img src="images/download%20(2).jpg" style="height: 30px; margin: 10px">
      <a class="navbar-brand" href="#">Leo College</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="front.php">Home</a></li>
      <li class="active"><a href="contact.php">Contact Us</a></li>
      <li class="active"><a href="front.php#GalleryDiv">Gallery</a></li>
      <li class="active"><a href="front.php#CoursesDiv">Our Courses</a></li>
      <li class="active"><a href="front.php#FeedbackDiv">Student Feedback</a></li>
      <li class="active"><a href="ourTeam.php">Our team</a></li>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="create.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="loginpage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>






		<layer>
			<form action="createdb.php" method="post">	
					<h1>Sign Up</h1>
					<input type="text" name="user" placeholder="Input your name" required="on"><br>
					<input type="password" name="psw" placeholder="Input new password" required="on" minlength="4" maxlength="18"><br>
					<input type="submit" value="Create Account" style="height: 40px; width: 150px; ">
					<input type="reset" value="Cancel" style="height: 40px; width: 150px;"><br>
					<span>Already have an <a href="loginpage.php">Account?</a></span>
			</form>
		</layer>
	</body>
</html>