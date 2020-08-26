<?php
   require_once('includes/connection.php');
   require_once('includes/functions.php');?>

<?php session_start();?>

<?php echo $_SESSION['vtcRegId'];
$vtcRegId= $_SESSION['vtcRegId']; 

$sql="select * from vtcenters where vtcRegId='$vtcRegId'";

/*
$sql = "SELECT vtcenters.vtcName, vtcenters.district, 
                vtcenters.contact_No, vtcenters.vtc_Email, 
                vtcenters.dir_Designation, vtcenters.dir_fullName, 
                coursedetails.CourseId,coursedetails.CourseName,                 
                coursedetails.Duration, coursedetails.EduLevel, coursedetails.NVQ
    FROM 
                vtcenters
    INNER JOIN 
                coursedetails   
    ON
    coursedetails.vtcRegID=vtcenters.vtcRegID WHERE coursedetails.vtcRegID='$vtcRegId' vtcenters.vtcRegID='$vtcRegId' " ;*/

$result=mysqli_query($connection,$sql);
$result1=$result->fetch_object();
/*
SELECT * FROM `vtcenters` WHERE 1`ID`, `vtcName`, `vtcRegID`, `district`, `contact_No`, `vtc_Email`, `vtcAddress`,
 `dir_Designation`, `passwordVtc`, `dir_firstName`, `dir_lastName`, `dir_fullName`, 
 `dir_initialName`, `dir_NIC`, `certificete`, `courses`
*/
$vtcName=$result1->vtcName;
$district=$result1->district;
$contact_No=$result1->contact_No;
$vtc_Email=$result1->vtc_Email;
$dir_Designation=$result1->dir_Designation;
$dir_fullName=$result1->dir_fullName;/*
$CourseId=$result1->CourseId;
$CourseName=$result1->CourseName;
$Duration=$result1->Duration;
$EduLevel=$result1->EduLevel;
$NVQ=$result1->NVQ;*/
isset($_POST['vtcRegID'])?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vocational Training Centre Profile</title>

    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>

</head>

<body>
<?php
//logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: Index.php');
}
?>
<!--VTC Name-->
<nav class="navbar justify-content-center navbar-expand-sm navbar-default navbar-dark bg-dark">
<h1>
  <div class= "Username" Style="color:white">
<?php echo $vtcName; ?>
</div>
</h1>
</nav>
<!----------------------------------------------------------------------------------------------Nav Bar----------------------------------------------------->
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
      
      <li class="active"><a href="1.2vtcHome.php" >Home</a></li>
      <li><a href="#contact">Contact</a></li>

<!--Logout-->
      <li>
          <form method='post' action="">
            <button class="btn btn-danger" type="submit" name="but_logout">Logout</button>
          </form>
      </li>
</ul>
</div>
</nav> 
                
<!-- Language -->
    <div class="Lang" align="left">

      <li class=btn><a href="1.2StuHome.php"><button type="button" href class="btn btn-primary btn-block">English</button></a></li>
      <li class=btn><a href="1.2sinhalaStuHome.php"><button type="button" href class="btn btn-primary btn-block">සිංහල</button></a></li>
      <li class=btn><a href="tamil1.2StuHome.php"><button type="button" href class="btn btn-primary btn-block">தமிழ்</button></a></li>
    </div>
          </div>          
  </div>

  <div class="bg-image img1"></div>

  <section class="row justify-content-center">
<section class="col-12 col-sm-12 col-md-12">
<div class="form-row col-12 col-md-12 col-sm-12 justify-content-center">  
  <div class="form-group col-md-2"> <a href="#stuDetails">
    <img src="Images/user.png" alt="User Profile" width="80" height="80"> <p>User Profile</p></a>
  </div>
  <div class="form-group col-md-2"><a href="course_search.php">
    <img src="Images/school.png" alt="Search for Courses"  width="80" height="80"> <p>Search Courses</p></a>
  </div>
  <div class="form-group col-md-2"> <a href="course_search.php">
    <img src="Images/teacher.png" alt="Vocational Training Courses" width="80" height="80"> <p>Vocational Training Centres</p></a>
  </div>
  <div class="form-group col-md-2"> <a href="course_search.php">
    <img src="Images/company.png" alt="Company Details" width="80" height="80"> <p>Companies</p></a>
  </div>
  
  <div class="form-group col-md-2"> <a href="course_search.php">
    <img src="Images/update.png" alt="Update Profile" width="80" height="80"> <p>Update Profile</p></a>
  </div>
  <div class="form-group col-md-2"> <a href="course_search.php">
    <img src="Images/delete.png" alt="Delete Profile" width="80" height="80"> <p>Delete Profile</p></a>
  </div>
  
</section></section>

  <a href="./vtc_admin_panel.php"><i class="fa fa-fw fa-wrench"></i> View Courses</a>

  <a href="addvtcCourses.php"><i class="fa fa-fw fa-wrench"></i> Add Courses</a>


<!--Image as a link-->
<div class="form-group col-12 col-md-12 col-sm-12">
  <div class="form-row col-md-4">
      <a href="default.asp">
      <img src="smiley.gif" alt="HTML tutorial" style="width:42px;height:42px;">
      </a>
  </div>  
  <div class="form-row col-md-4">
      <a href="default.asp">
      <img src="smiley.gif" alt="HTML tutorial" style="width:42px;height:42px;">
      </a>
  </div>
  <div class="form-row col-md-4">
      <a href="default.asp">
      <img src="smiley.gif" alt="HTML tutorial" style="width:42px;height:42px;">
      </a>
  </div>
</div>

<!-- Add social media icons -->

<br>
<span>
 <section class=" justify-content-center" id="contact">
<section class="col-12 col-sm-12 col-md-12">
<div class="form-row col-12 col-md-12 col-sm-12 justify-content-center bg-dark">  
  <div class="form-group col-md-2 justify-content-center"> <a href="#">
    <img src="Images/location.png" alt="Location" width="50" height="50"> <p class="justify-content-center">Kalagedihena, <br>Nittambuwa,<br>Sri Lanka.</p></a>
  </div>
  <div class="form-group col-md-2 justify-content-center"> <a href="#">
    <img src="Images/call.png" alt="Contact Number" width="50" height="50"> <p class="justify-content-center">+94 70 588 2716</p></a>
  </div>
  <div class="form-group col-md-2 justify-content-center"> <a href="https://www.facebook.com/106660131113039?referrer=whatsapp">
    <img src="Images/facebook.png" alt="Facebook" width="50" height="50"> <p class="justify-content-center">JOBBuddy Career</p></a>
  </div>
  <div class="form-group col-md-2 justify-content-center"><a href="mailto:jobbuddycareer@gmail.com">
    <img src="Images/gmail.png" alt="Gmail"  width="50" height="50"> <p class="justify-content-center">jobbuddycareer@gmail.com</p></a>
  </div>
  <div class="form-group col-md-2 justify-content-center"> <a href="#">
    <img src="Images/whatsapp.png" alt="Whatsapp" width="50" height="50"> <p class="justify-content-center">+94 70 588 2716</p></a>
  </div>
  <div class="form-group col-md-2 justify-content-center"> <a href="https://www.youtube.com/channel/UCzh1By4MZccb8SsgAlvyFSA">
    <img src="Images/youtube.png" alt="Youtube" width="50" height="50"> <p class="justify-content-center">JOBBuddy Career</p></a>
  </div>
  </section></section> </span>
<!--<img src="success-at-SHL-tests.jpg" alt="JobBuddy" width="2000px" height="1085px"><!-- alt="Mountain View" style="width:304px;height:228px;">-->

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

 
</body>
</html>