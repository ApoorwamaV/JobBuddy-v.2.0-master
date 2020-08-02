<?php require_once('includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
    
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<!--Background Slider Start-->
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <!--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('Images/WEB_2.jpg')">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('Images/WEB_1.jpg')">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>
<div class="Navigation Bar">
    <nav class="navbar navbar-expand-sm navbar-default navbar-dark bg-dark">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Job Buddy</a>
          </div>
<!--logo-->
  <a class="navbar-brand" href="#">
    <img src="LOGO.jpg" alt="logo" style="width:100px;">
  </a>     
<!--Creating toggle-->
          <button class="navbar-toggler" data-toggle="collapse" data-target="#barLink"> <!--# for a id-->
                <span class="navbar-toggler-icon">

                </span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="barLink">
            <ul class="nav navbar-nav justify-content-end">
                <li class="active"><a href="Index.php">Home</a></li>
                <li><a href="#">Vocational Training Centres</a></li>
                
                <li><a href="3AboutAll.php">About us</a></li>
                <li><a href="4ContactAll.php">Contact</a></li>

<!--Register-->
              <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" href="#">Register
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                    <li><a href="./1.1RegStu.php">Student</a></li>
                    <li><a href="./1.1RegVocationalCentre.php">Vocational Training Centre</a></li>
                    <li><a href="./1.1RegCompany.php">Company</a></li>
              </ul>
              </li>
<!--Login-->
              <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                    <li><a href="./2.1StuLogIn.php">Student</a></li>
                    <li><a href="./2.2VTCLogIn.php">Vocational Training Centre</a></li>
                    <li><a href="./2.3CompanyLogIn.php">Company</a></li>
                    <li><a href="./adminLogIn.php">Administrator</a></li>
              </ul>
              </li>
<!--Search-->
      <form class="form-inline" action="/action_page.php">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-success" type="submit">Search</button>
      </form>
</ul>
</div>
</nav>              
                
<!-- Language -->
    <!-- Language -->
    <div class="Lang" align="left">

      <li class=btn><a href="Index.php"><button type="button" href class="btn btn-primary btn-block">English</button></a></li>
      <li class=btn><a href="sinhalaIndex.php"><button type="button" href class="btn btn-primary btn-block">සිංහල</button></a></li>
      <li class=btn><a href="tamilIndex.php"><button type="button" href class="btn btn-primary btn-block">தமிழ்</button></a></li>
    </div>
          </div>          
  </div>

  <div class="para">
  <div class="container-fluid">
    <h1> About us </h1>
    <span class="about"> <p> This web platform is basically facilitating students to find vocational courses according to
their qualifications and facilitates to publish about the vocational training centers and the
courses. The vocational training centres have to publish about new intakes for the courses
and job opportunities and students can identify the opportunities and register.<p></span>
  </div>  
  </div>

  
  <div class= "Parallex">
  </div><!--
  <button class="btn"><i class="fa fa-home"></i> Home</button>
<button class="btn"><i class="fa fa-bars"></i> Menu</button>
<button class="btn"><i class="fa fa-trash"></i> Trash</button>
<button class="btn"><i class="fa fa-close"></i> Close</button>
<button class="btn"><i class="fa fa-folder"></i> Folder</button>


  
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>
<div class="bg-image img5"></div>
  </div>   -->
  <a href="1.2StuHome.php" >StuHome</a>
  <a href="1.2vtcHome.php" >vtcHome</a>

<!-- Add social media icons -->
<div class="social-icons">
  <div class="justify-content-end" >
<div class=" form-row col-12 col-md-12 col-sm-12">
  
<div class="form-group col-md-3">
    <a href="https://www.facebook.com/106660131113039?referrer=whatsapp" class="fa fa-facebook"></a> </div>
<div class="form-group col-md-3">
    <a href="mailto:jobbuddycareer@gmail.com" class="fa fa-google"></a> </div> 
<div class="form-group col-md-3">
    <a href="#" class="fa fa-whatsapp"></a> </div>
<div class="form-group col-md-3">
    <a href="https://www.youtube.com/channel/UCzh1By4MZccb8SsgAlvyFSA" class="fa fa-youtube"></a> </div>
    </div></div>
</div>
<!-- Add social media names -->
<div class="social" >
<div class="justify-content-end" >
<div class="form-row col-12 col-md-12 col-sm-12">
<div class="form-group col-md-3">
    <p> JOBBuddy Career </p></div>
<div class="form-group col-md-3">
    <p> JOBBuddy Career </p></div>
<div class="form-group col-md-3">
    <p> +94 70 588 2716 </p></div>
<div class="form-group col-md-3">
    <p> JOBBuddy Career </p></div>
</div>
</div></div>
<!--<img src="success-at-SHL-tests.jpg" alt="JobBuddy" width="2000px" height="1085px"><!-- alt="Mountain View" style="width:304px;height:228px;">-->

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>   
</body>
</html>