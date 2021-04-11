<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  
  
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
      <li class="active"><a href="index.php">Home</a></li>
      <li class="active"><a href="contact.php">Contact Us<span class="caret"></span></a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="loginpage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="jumbotron text-center" style="margin: 130px; margin-right: 290px; margin-left: 290px; border-radius: 20px;">
    
  <h1>Something is wrong!</h1>
    <h2 style="font-size: 20px;">Maybe you entered wrong username or password</h2>
    <h2>Retry or make <a style="text-decoration: none;" href="sign.php">new account</a> first</h2>
   
</div>
  

</body>
</html>