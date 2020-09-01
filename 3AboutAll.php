<?php require_once('includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About All</title>

    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

    
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .carousel-inner img {
    width: 100%;
    height: 100%;
  }</style>
  <style>
* {
  box-sizing: border-box;
}

.container {
  padding: 64px;
}

/* Clear floats */
.row:after {
  content: "";
  display: table;
  clear: both
}

/* 2/3 column */
.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

/* 1/3 column */
.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

/* Add responsiveness - make the columns appear on top of each other instead of next to each other on small screens */
@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
}
</style>
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

<!---------------------------------------------------Nav Bar------------------------------>
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
                <li><a href="Index.php">Home</a></li>
                <li><a href="VocationalTrainingCentres.php">Vocational Training Centres</a></li>
                <li><a href="Companies.php">Companies</a></li>
                <li><a href="viewComment.php">Q & A</a></li>
                <li  class="active"><a href="3AboutAll.php">About us</a></li>
                <li><a href="#contact">Contact</a></li>


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

<!--History Manage-->
<?php     
      include("includes/historyManage.php");
    ?>

<br><br>
  
  <div class= "Parallex">
  </div>
  <form class="container">
      <h1>Agreement Form</h1> 
      <?php     
      include("includes/StuSidedownbar.php");
    ?>
      <h2>For Students</h2>
      <h2>For Vocational Training Centres</h2>
      <h2>For Organizations</h2>
  </form>
  

  <?php     
    include("includes/footer.php");
?>
<!--<img src="success-at-SHL-tests.jpg" alt="JobBuddy" width="2000px" height="1085px"><!-- alt="Mountain View" style="width:304px;height:228px;">-->

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>   
</body>
</html>