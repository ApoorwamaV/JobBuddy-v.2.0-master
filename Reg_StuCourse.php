<?php/*  
	$connect = mysqli_connect("localhost", "root", "", "jobbuddy");
	$sql = "SELECT * FROM coursedetails WHERE CourseId = '".$_POST["id"]."'";  
    //echo $_POST["id"];
*/
session_start();
echo $_SESSION['variable'];
 ?>
 <?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
 <?php
 $sql="SELECT * FROM students WHERE NICStu ='".$_POST['id']."'";
$result = mysqli_query($connection,$sql);
$row= mysqli_fetch_array($result);

?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register for Courses</title>

    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--Adding Styles-->
<script>
.dotted {border-style: dotted;}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</script>

</head>
<body>

<?php

//logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: Index.php');
}
?>
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
      <li class="active"><a href="1.2StuHome.php" >Home</a></li>
      <li><a href="#">I want to know more about </a></li>
      <li><a href="3AboutAll.php">About us</a></li>
      <li><a href="4ContactAll.php">Contact</a></li>

<!--Search-->
      <li>
      <form class="form-inline" action="/action_page.php">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-success" type="submit">Search</button>
      </form>
</li> 

<!--Logout-->
<li>
          <span>
            <button class="btn btn-danger" type="submit" name="but_logout">Logout</button>
          </span>
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

  <a href="course_search.php"><i class="fa fa-fw fa-wrench"></i> Add Courses</a>
  <a href="courses_admin_panel_copy.php.php"><i class="fa fa-fw fa-wrench"></i> Add Courses admin wage</a>
  
  <section class="container-fluid">
    <section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-md-10">
    <form class="form-container justify-content-center col-12 col-sm-6 col-md-10 " method="post" action="Reg_StuCourse.php" enctype="multipart/form-data">
    <form class=" solid stuReg">
<!-------------------------------------Row 01------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12">
  
  <div class="form-group col-md-6">
	  <label for="CourseId">Vocational Course ID</label>
	  <input type="text" class="form-control" name="CourseId" value="<?php echo $row['CourseId']; ?>" required>
  </div>
  <div class="form-group col-md-6">
	  <label for="CourseName">Vocational Course Name</label>
	  <input type="text" class="form-control" name="CourseName" value="<?php echo $row['CourseName']; ?>" required>
  </div>
</div>
<!-------------------------------------Row 02------------------------------------------------>
    <div class="form-row col-12 col-md-12 col-sm-12">
  
		<div class="form-group col-md-6">
            <label for="vtcRegID">Vocational Training Centre ID</label>
            <input type="text" class="form-control" name="vtcRegID" value="<?php echo $row['vtcRegID']; ?>" required>
        </div>
		<div class="form-group col-md-6">
            <label for="vtcName">Vocational Training Centre Name</label>
            <input type="text" class="form-control" name="vtcName" value="<?php echo $row['vtcName']; ?>" required>
        </div>
	</div>
	<!-------------------------------------Row 03------------------------------------------------>
    <div class="form-row col-12 col-md-12 col-sm-12">
  
		<div class="form-group col-md-6">
            <label for="NICStu">Student NIC Number</label>
            <input type="text" class="form-control" name="NICStu" value="<?php echo $row['NICStu']; ?>" required>
        </div>
		<div class="form-group col-md-6">
            <label for="fullNameStu">Student Full Name (English Capital Letters)</label>
            <input type="text" class="form-control" name="fullNameStu" value="<?php echo $row['fullNameStu']; ?>" required>
        </div>
	</div>
<!-------------------------------------Row 04------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12">
  
  <div class="form-group col-md-6">
	  <label for="contactNoStu">Student Contact Number</label>
	  <input type="text" class="form-control" name="contactNoStu" value="<?php echo $row['contactNoStu']; ?>" required>
  </div>
  <div class="form-group col-md-6">
	  <label for="EmailStu">Student Email Address</label>
	  <input type="text" class="form-control" name="EmailStu" value="<?php echo $row['EmailStu']; ?>" required>
  </div>
</div>
	
	</form></form></section></section></section>

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>   
</body>
</html>