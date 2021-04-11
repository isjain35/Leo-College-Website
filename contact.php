

<!DOCTYPE HTML>  
<html>
<head>
<style>
    input {
      
        
        
          width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
    border-radius: 30px;
    }
</style>
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
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="loginpage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

    </ul>
  </div>
</nav>

    
    
    
    
<h2 style="text-align: center;"><img src="images/download%20(2).jpg"></h2>
<h2>Ask with college staff</h2>

<form method="post" action="contacttarget.php">  
    <h6 style="font-size: 25px;"> Name:</h6> 
    <input type="text" name="NAME" required="on">
    <br><br>
 <h6 style="font-size: 25px;"> E-mail:</h6> <input type="text" name="EMAIL" required="on">
  
  <br><br>
  <h6 style="font-size: 25px;">Mobile:</h6> <input type="text" name="MOBILE" required="on" maxlength="10" minlength="10">
  
  <br><br>
  <h6 style="font-size: 25px;">Message</h6>: <textarea name="MESSAGE" rows="5" cols="40" required="on"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit to Leo college" style="background-color: lightblue;">  <br><br>
     <input type=reset style="background-color: lightblue;"> 
</form>
<hr>

    
</body>
</html>
