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
    <img src="WEB 1.jpg" alt="Job Buddy"  width="1520" height="768">
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
            <ul class="nav navbar-nav">
                <li class="active"><a href="Index.php">Home</a></li>
                <li><a href="#">Vocational Training Centres</a></li>
                <li><a href="./3AboutAll.php">About us</a></li>
                <!--Admin Panel-->
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" href="#">User Details
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="./stu_admin_panel.php">Student Details</a></li>
                    <li><a href="./vtc_admin_panel.php">Vocational Training Centre Details</a></li>
                    <li><a href="./com_admin_panel.php">Company Details</a></li>
                  </ul>
                </li><li><a href="./ContactAll.php">Contact</a></li>
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
                  </ul>
                </li>
              </ul>
          </div>          
        </div>
    </nav>

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