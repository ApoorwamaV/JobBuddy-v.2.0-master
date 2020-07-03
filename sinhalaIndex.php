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

</head>
<body>

  <div class="Title" align="center">
    
  </div>
<div class = "Container">

<div class="Navigation Bar">
  
    <nav class="navbar navbar-expand-sm navbar-default navbar-dark bg-dark">
        <div class="container-fluid">
          
<!--Creating toggle-->
          <button class="navbar-toggler" data-toggle="collapse" data-target="#barLink"> <!--# for a id-->
                <span class="navbar-toggler-icon">

                </span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="barLink">
            <ul class="nav navbar-nav" >
                <li class="active"><a href="sinhalaIndex.php">මුල් පිටුව</a></li>
                <li><a href="#">වෘත්තීය පුහුණු මධ්‍යස්ථාන</a></li>
                <li><a href="./3sinhalaAboutAll.php">අප පිළිබඳව</a></li>
                <!--Admin Panel-->
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" href="#">පරිශීලක විස්තර
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="./sinhalastu_admin_panel.php">ශිෂ්‍ය විස්තර</a></li>
                    <li><a href="./sinhalavtc_admin_panel.php">වෘත්තීය පුහුණු මධ්‍යස්ථාන විස්තර</a></li>
                    <li><a href="./sinhalacom_admin_panel.php">ආයතනික විස්තර</a></li>
                  </ul>
                </li><li><a href="./ContactAll.php">සන්නිවේදනය</a></li>
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
                <!--Login-->
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">පවතින ගිණුමට පිවිසෙන්න
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="./2.1sinhalaStuLogIn.php">ශිෂ්‍ය</a></li>
                    <li><a href="./2.2sinhalaVTCLogIn.php">වෘත්තීය පුහුණු මධ්‍යස්ථාන</a></li>
                    <li><a href="./2.3sinhalaCompanyLogIn.php">ආයතන</a></li>
                  </ul>
                </li>
                
              </ul>
              
        </div>
    </nav>
<!-- Language -->
<div class="Lang" align="left">
      <li><a href="Index.php"><button type="button" href class="btn btn-primary btn-block">English</button></a></li>
      <li><a href="sinhalaIndex.php"><button type="button" href class="btn btn-primary btn-block">සිංහල</button></a></li>
      <li><a href="tamilIndex.php"><button type="button" href class="btn btn-primary btn-block">தமிழ்</button></a></li>
    </div>
          </div>          
  </div>

  
  <div class= "Parallex">
  </div>
  </div>   
<!--<img src="success-at-SHL-tests.jpg" alt="JobBuddy" width="2000px" height="1085px"><!-- alt="Mountain View" style="width:304px;height:228px;">-->

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>   
</body>
</html>