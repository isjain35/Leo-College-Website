<html>
    <head>
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
    border-radius: 30px;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
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
      <li><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="loginpage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

  
</div>
    <h2>Login Form</h2>

<form action="loginpagedb.php" method="POST">
  <div class="imgcontainer">
    <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required="on" minlength="4" maxlength="18">
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">

	<span class="connect">Want to create new <a href="sign.php">Account?</a></span>
    <span class="psw">Create <a href="sign.php">new account</a> again if you forget your password</a></span>
  </div>
</form>

    </body>
</html>