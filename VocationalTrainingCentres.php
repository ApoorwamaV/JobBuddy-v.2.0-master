<?php require_once('includes/connection.php'); ?>

<?php require_once('includes/nav.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Joined Vocational Training Centres</title>

    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

    
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Vocational Training Centers Admin Panel</title>

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

<div class="Navigation Bar">
    <nav class="navbar  navbar-expand-md navbar-default navbar-dark bg-dark">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Job Buddy</a>
          </div>
<!--logo-->
  <a class="navbar-brand" href="#">
    <img src="LOGO.jpg" alt="logo" style="width:100px;">
  </a>     
<!--Creating toggle-->
          
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barLink" aria-expanded="false">
    <span class="navbar-toggler-icon"></span>
  </button>

          <div class="collapse navbar-collapse justify-content-end" id="barLink">
            <ul class="nav navbar-nav justify-content-end">
                <li ><a href="Index.php">Home</a></li>
                <li class="active"><a href="VocationalTrainingCentres.php">Vocational Training Centre</a></li>
                <li><a href="Companies.php">Company</a></li>
                <li><a href="viewComment.php">Q & A</a></li>
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
</ul>
</div>
</nav>  
</div>            
        

<div class="form-row col-12 col-md-12 col-sm-12 ">

  <div class="form-group col-md-7 justify-content-start "><br>
    <div class="para">
      <div class="container-fluid">
        <h1 class="aboutH1"> About us </h1>
          <span class="about"> <p> This web platform is basically facilitating students to find vocational courses according to
            their qualifications and facilitates to publish about the vocational training centers and the
            courses. The vocational training centres have to publish about new intakes for the courses
            and job opportunities and students can identify the opportunities and register.<p>
          </span>
      </div>  
    </div>
  </div>
  <!-- Language -->
  <div class="form-group col-md-5 justify-content-end"><br>
    <div class="Lang" align="left">
      <li class=btn><a href="Index.php"><button type="button" href class="btn btn-primary btn-block">English</button></a></li>
      <li class=btn><a href="sinhalaIndex.php"><button type="button" href class="btn btn-primary btn-block">සිංහල</button></a></li>
      <li class=btn><a href="tamilIndex.php"><button type="button" href class="btn btn-primary btn-block">தமிழ்</button></a></li>
    </div>
  </div>
</div><br><br><br><br><br><br><br><br><br><br>

<!--History Manage-->
<?php     
      include("includes/historyManage.php");
    ?>

<div class="container">  
            <br />  
            
			<br />
			<div class="table-responsive" id="stuDetails">  
            <h1>Vocational Trainig Centers Details Table</h1>
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
        </div>
        
  <?php     
    include("includes/footer.php");
?>

</body>
</html>
<script>



$(document).ready(function(){
    function fetch_data()  
    {  
        $.ajax({  
            url:"VocationalTrainingCentres_handle.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    } 
    


fetch_data(); 
    //Update
    $(document).on('click', '.btn_show', function(){  
        var id=$(this).data("id8");  
            window.location.href ="http://localhost/dashboard/A_Updated_Home/JobBuddy-v.2.0-master/VocationalTrainingCentre_Courses.php?id="+id;
           
          
    });  
    });       
</script>