
 <?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

?>
<!---------------------------------Bring User Name-------------------------------->
<?php session_start();
?>

<?php echo $_SESSION['Stu_NIC'];
$Stu_NIC= $_SESSION['Stu_NIC']; 


$sql="select * from students where NICStu='$Stu_NIC'";
$result=mysqli_query($connection,$sql);
$result1=$result->fetch_object();

$fullNameStu=$result1->fullNameStu;
$EmailStu=$result1->EmailStu;
$contactNoStu=$result1->contactNoStu;
$eduLevelStu=$result1->eduLevelStu;
$addressStu=$result1->addressStu;
$districtStu=$result1->districtStu;
$DOBStu=$result1->DOBStu;
isset($_POST['Stu_NIC'])?>


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
<?php/
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
  <div class="collapse navbar-collapse justify-content-end" id="barLink">
    <ul class="nav navbar-nav justify-content-end">
      <li class="active"><a href="1.2StuHome.php" >Home</a></li>
      <li><a href="simpleComment.php">Q & A </a></li>
      <li><a href="3AboutAll.php">About us</a></li>
      <li><a href="#contact">Contact</a></li>

<!--Logout-->
<li>
          <span>
            <button class="btn btn-danger" type="submit" name="but_logout">Logout</button>
          </span>
</li>
<li> 
    <div class= "Username" Style="color:white">
        <?php echo $fullNameStu; ?>
    </div>
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
  
  <!--History Manage-->
  <?php     
      include("includes/historyManage.php");
    ?>

  <section class="container-fluid">
    <section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-md-10">
    <form class="form-container justify-content-center col-12 col-sm-6 col-md-10 " method="post" action="Reg_StuCourse_handle.php" enctype="multipart/form-data">
    <form class=" solid stuReg">
<!-------------------------------------Row 01------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12">
  
  <div class="form-group col-md-6">
	  <label for="CourseId">Vocational Course ID</label>
	  <input type="text" class="form-control" name="CourseId" >
  </div>
  <div class="form-group col-md-6">
	  <label for="CourseName">Vocational Course Name</label>
	  <input type="text" class="form-control" name="CourseName" >
  </div>
</div>

	<!-------------------------------------Row 03------------------------------------------------>
    <div class="form-row col-12 col-md-12 col-sm-12">
  
		<div class="form-group col-md-6">
            <label for="NICStu">Student NIC Number</label>
            <input type="text" class="form-control" name="NICStu" value="<?php echo $Stu_NIC; ?>" readonly>
        </div>
		<div class="form-group col-md-6">
            <label for="fullNameStu">Student Full Name (English Capital Letters)</label>
            <input type="text" class="form-control" name="fullNameStu" value="<?php echo  $fullNameStu; ?>" required>
        </div>
	</div>
<!-------------------------------------Row 04------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12">
  
  <div class="form-group col-md-6">
	  <label for="contactNoStu">Student Contact Number</label>
	  <input type="text" class="form-control" name="contactNoStu" value="<?php echo $contactNoStu; ?>" required>
  </div>
  <div class="form-group col-md-6">
	  <label for="EmailStu">Student Email Address</label>
	  <input type="text" class="form-control" name="EmailStu" value="<?php echo $EmailStu; ?>" required>
  </div>
</div>

<!-------------------------------------Row 04------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12"> 
      <div class="form-group col-4 col-md-4 col-sm-4"> 
        <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
      </div>
      
      <div class="form-group col-4 col-md-4 col-sm-4">
        <button type="button" href="course_search.php" class="btn btn-primary btn-block"> Back</button> 
      </div>
</div>
	
	</form></form></section></section></section>

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>   
</body>
</html>