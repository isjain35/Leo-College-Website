<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project Web</title>
    
    
    <style>
        .carousel-control.right, .carousel-control.left {
  background-image: none;
  color: #f4511e;
}

.carousel-indicators li {
  border-color: #f4511e;
}

.carousel-indicators li.active {
  background-color: #f4511e;
}

.item h4 {
  font-size: 19px;
  line-height: 1.375em;
  font-weight: 400;
  font-style: italic;
  margin: 70px 0;
}

.item span {
  font-style: normal;
}
        footer .glyphicon {
  font-size: 20px;
  margin-bottom: 20px;
  color: #f4511e;
}
img:hover {
      transform: rotate(3deg);
}
div {
  overflow: hidden;
}
.maker {
  color: #4;
  background-color: none;
}
html {
  scroll-behavior: smooth;
  cursor: pointer;
}
.ButtonUp {
  color: #000;
  border-radius: 15px;
  background-color: orange;
  width: 60px;
  height: 50px;
  text-align: center;
  margin-left: 1100px;
  font-family: cursive;
  font-size: 17px;
}
.ButtonUp:hover {
  color: red;
  transform: rotate(-5deg);
  background-color: lightblue;

}
.maker:hover {
  transform: rotate(-1deg);
}
.active:hover {
  transform: rotate(-2deg);
}
.navbar-brand:hover {
  transform: rotate(2deg);
}
.okay {
  color: white;
  margin-top: 14px;
  margin-left: 5px;

}
.okay:hover {
  transform: rotate(-2deg);
}

* {
        padding: 0px;
        margin: 0px;
        font-family: sans-serif;
      }

body {
        background-size: 1500px 930px;
      }



    </style>
    
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

    
    
    
<body>

<nav class="navbar navbar-inverse" id="NavDiv" style="border-radius: 30px; margin: 0px; padding 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
        <img src="images/download%20(2).jpg" style="height: 30px; margin: 10px; transform: rotate(0deg); border-radius: 10px;">
      <a class="navbar-brand" href="#">Leo College</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="front.php">Home</a></li>
      <li class="active"><a href="contact.php">Contact Us</a>
      </li>
      <li class="active"><a href="#GalleryDiv">Gallery</a></li>
      <li class="active"><a href="#CoursesDiv">Our Courses</a></li>
      <li class="active"><a href="#FeedbackDiv">Student Feedback</a></li>
      <li class="active"><a href="ourTeam.php">Our team</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="loginpage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">    
    <div class="container" style="margin-top: 20px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <img src="images/IMG_20190722_140438.jpg" alt="Leo college pool side" style="width:100%; transform: rotate(0deg);">
      </div>

      <div class="item">
        <img src="images/front.jpg" alt="Leo college front" style="width:100%; transform: rotate(0deg);">
      </div>
    
      <div class="item">
        <img src="images/backview.jpg" alt="bus parking" style="width:100%; transform: rotate(0deg);">
      </div>


      <div class="item">
        <img src="images/LOVELEO.jpg" alt="bus parking" style="width:99%; transform: rotate(0deg);">
      </div>

      <div class="item">
        <img src="images/busses_copy.jpg" alt="bus parking" style="width:100%; transform: rotate(0deg);">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    
    
    
    
    
    
    
    
<!-- 1 row======================================================================================================-->
    <div class="container" id="GalleryDiv">
  <h2 style="cursor: pointer;">Image Gallery</h2>
  <p>Leo college provide best facilities for comfortable study of students.</p>
  
  
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/download%20(1).jpg" alt="Lights" style="width:100%; border-radius: 10px;">
          <div class="caption">
            <p>Leo college building overview, Well its totally change now due to renovation.</p>
          </div>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/download%20(3).jpg" alt="Nature" style="width:70%; border-radius: 10px;">
          <div class="caption">
            <p>Leo college bus facilities for student to drop and pickup service.</p>
          </div>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/download%20(4).jpg" alt="Fjords" style="width:70%; border-radius: 10px;">
          <div class="caption">
            <p>Leo college casual functional look from outside of building.</p>
          </div>
       
      </div>
    </div>
  </div>
</div>

 <!-- 2 row======================================================================================================-->   
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/download.jpg" alt="Lights" style="width:100%; border-radius: 10px;">
          <div class="caption">
            <p>Leo college side look of bulding.</p>
          </div>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/images.jpg" alt="Nature" style="width:75%; border-radius: 10px;">
          <div class="caption">
            <p>The director of leo college, Mr Manish Trivedi</p>
          </div>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/download%20(2).jpg" alt="Fjords" style="width:65%; border-radius: 10px;">
          <div class="caption">
            <p>Logo of faith.</p>
          </div>
       
      </div>
    </div>
  </div>
</div>


<!-- 3 row======================================================================================================-->
 <div class="row">
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/front.jpg" alt="Lights" style="width:90%; border-radius: 10px;">
          <div class="caption">
            <p>Leo college front look of bulding.</p>
          </div>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/backview.jpg" alt="Nature" style="width:90%; border-radius: 10px;">
          <div class="caption">
            <p>Student behaviour development presentation</p>
          </div>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/hacking.jpg" alt="Fjords" style="width:90%; border-radius: 10px;">
          <div class="caption">
            <p>presentation 2</p>
          </div>
       
      </div>
    </div>
  </div>
</div>


<!-- 4 row======================================================================================================-->
 <div class="row">
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/ART.jpg" alt="Lights" style="width:97%; border-radius: 10px;">
          <div class="caption">
            <p></p>
          </div>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/basket.jpg" alt="Nature" style="width:90%; border-radius: 10px;">
          <div class="caption">
            <p>Basket-ball Ground.</p>
          </div>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/bat-court.jpg" alt="Fjords" style="width:90%; border-radius: 10px;">
          <div class="caption">
            <p>badminton-court in the middle of leo college compound.</p>
          </div>
       
      </div>
    </div>
  </div>
</div>


<!-- 5 row======================================================================================================-->
 <div class="row">
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/busses.jpg" alt="Lights" style="width:30; border-radius: 10px;%">
          <div class="caption">
            <p>Leo college also provide bus facilities for students upto 60km away from college</p>
          </div>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/classes.jpg" alt="Nature" style="width:100%; border-radius: 10px;">
          <div class="caption">
            <p>Leo college's classes</p>
          </div>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/cricket.jpg" alt="Fjords" style="width:90%; border-radius: 10px;">
          <div class="caption">
            <p>Leo college's cricket ground.</p>
          </div>
       
      </div>
    </div>
  </div>
</div>





<!-- 6 row======================================================================================================-->
 <div class="row">
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/economy.jpg" alt="Lights" style="width:80%; border-radius: 10px;">
          <div class="caption">
            <p>Activities presentation for students</p>
          </div>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/library.jpg" alt="Nature" style="width:75%; border-radius: 10px;">
          <div class="caption">
            <p>Leo college's Library</p>
          </div>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail" style="border-style: none!important;">
       
          <img src="images/school.jpg" alt="Fjords" style="width:90%; border-radius: 10px;">
          <div class="caption">
            <p>Leo international school campus.</p>
          </div>
       
      </div>
    </div>
  </div>
</div>



    
    <br><br>
    <div class="container" id="CoursesDiv" style="text-align: center;">
    <layer style="background-color: lightgrey; opacity: 0.8; border-radius: 10px;"><h1 style="font-size: 50px; font-family: times;">Our Courses</h1></layer>
    <h2>BCA</h2>
  <img src="images/backview.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"> 

  <h2 style="margin-top: 45px;">BSC MATHS</h2>
  <img src="images/bsc-maths.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236">

  <h2 style="margin-top: 45px;">BSC BIO</h2>
  <img src="images/bsc-bio.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236">

  <h2 style="margin-top: 45px;">B.COM</h2>
  <img src="images/bcom.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236">

  <h2 style="margin-top: 45px;">BA</h2>
  <img src="images/ba.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236">
</div>
<hr>
    
    
    <br><br><br></div>
    <h2 id="FeedbackDiv">What our students say</h2>
<div id="myCarousel2" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel2" data-slide-to="1"></li>
    <li data-target="#myCarousel2" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>"This college is the best. I am so happy with the result!"<br><span style="font-style:normal;">Leo college, Comment Box</span></h4>
    </div>
    <div class="item">
      <h4>"One word... WOW!!"<br><span style="font-style:normal;">students who visit here for enquiry.</span></h4>
    </div>
    <div class="item">
      <h4>"Could I... BE any more happy with this college?"<br><span style="font-style:normal;">Every final year students</span></h4>
    </div>
    <div class="item">
      <h4>"Me after graduation:"<br><span style="font-style:normal;">Bada heavy college hai...</span></h4>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel2" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
<footer class="container-fluid text-center">
  <a href="#NavDiv" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <br>
  <p class="maker">Copyright goes to Ishan, Shabbir and Divyansh for this website.[<u>LEO COLLEGE]</u></p> 
</footer>




<div class="container mt-3">
  <!-- Button to Open the Modal -->
  

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Group Members</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <ul><li>Ishan Jain</li></ul>
          Project faculty :- Sweeti kakhani
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


</body>
</html>
