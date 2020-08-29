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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

    
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
            <ul class="nav navbar-nav">
                <li class="active"><a href="Index.php">මුල් පිටුව</a></li>
                <li><a href="#">වෘත්තීය පුහුණු මධ්‍යස්ථාන</a></li>
                
                <li><a href="3AboutAll.php">අප පිළිබඳව</a></li>
                <li><a href="4ContactAll.php">සන්නිවේදනය</a></li>

<!--Register-->
              <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" href="#">ලියාපදිංචි වන්න
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="./1.1sinhalaRegStu.php">ශිෂ්‍ය</a></li>
                    <li><a href="./1.1RegVocationalCentre.php">වෘත්තීය පුහුණු මධ්‍යස්ථාන</a></li>
                    <li><a href="./1.1RegCompany.php">ආයතන</a></li>
              </ul>
              </li>


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

  <!--History Manage-->
  <?php     
      include("includes/historyManage.php");
    ?>
    
  <div class="para">
  <div class="container-fluid">
    <h1> අප පිළිබඳව </h1>
    <span class="about"> <p> මෙම වෙබ් අඩවිය මූලික වශයෙන් සිසුන්ට වෘත්තීය පාඨමාලා සොයා ගැනීමට පහසුකම් සපයයි.වෘත්තීය පුහුණු 
මගින් පාඨමාලා මාලා සහ රැකියා අවස්ථා සඳහා නව ප්‍රවේශයන් ප්‍රකාශයට පත් කළ යුතු අතර සිසුන්ට අවස්ථා හඳුනාගෙන ලියාපදිංචි විය හැකිය.<p></span>
  </div>  
  </div>

  
  <div class= "Parallex">
  </div>
  <form class="container">
<h1>Agreement Form</h1>
<h2>For Students</h2>
<h2>For Vocational Training Centres</h2>
<h2>For Organizations</h2>
</form>
  <!--
  <button class="btn"><i class="fa fa-home"></i> Home</button>
<button class="btn"><i class="fa fa-bars"></i> Menu</button>
<button class="btn"><i class="fa fa-trash"></i> Trash</button>
<button class="btn"><i class="fa fa-close"></i> Close</button>
<button class="btn"><i class="fa fa-folder"></i> Folder</button>


  
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>
<div class="bg-image img5"></div>
  </div> -->  

<!-- Add social media icons -->
<div class="social-icons">
  <div class="justify-content-end" >
<div class=" form-row col-12 col-md-12 col-sm-12">
  
<div class="form-group col-md-3">
    <a href="https://www.facebook.com/106660131113039?referrer=whatsapp" class="fa fa-facebook"></a> </div>
<div class="form-group col-md-3">
    <a href="#" class="fa fa-google"></a> </div>
<div class="form-group col-md-3">
    <a href="#" class="fa fa-whatsapp"></a> </div>
<div class="form-group col-md-3">
    <a href="https://www.youtube.com/channel/UCzh1By4MZccb8SsgAlvyFSA" class="fa fa-youtube"></a> </div>
    </div></div>
</div>
<!-- Add social media names -->
<div class="social justify-content-center" >
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
</div>
<!--<img src="success-at-SHL-tests.jpg" alt="JobBuddy" width="2000px" height="1085px"><!-- alt="Mountain View" style="width:304px;height:228px;">-->

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>   
</body>
</html>                                   