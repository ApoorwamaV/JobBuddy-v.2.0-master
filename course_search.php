<?php require_once('includes/connection.php'); 

?>
<!---------------------------------Bring User Name-------------------------------->
<?php session_start();?>

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
    
    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    <title> Search Courses </title>
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
    <ul class="nav navbar-nav justify-content-end">
      <li class="active"><a href="1.2StuHome.php" >Home</a></li>
      <li><a href="#">I want to know more about </a></li>
      <li><a href="3AboutAll.php">About us</a></li>
      <li><a href="4ContactAll.php">Contact</a></li>

<!--Logout-->
<li>
          <span>
            <button class="btn btn-danger" type="submit" name="but_logout">Logout</button>
          </span>
</li>
<li><?php echo $fullNameStu; ?></li>

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
  <br><br>
 <section class="row justify-content-center">
<section class="col-12 col-sm-12 col-md-12">
<div class="form-row col-12 col-md-12 col-sm-12 justify-content-center">  
  <div class="form-group col-md-2"> <a href="#">
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

  
<section class="container-fluid">
    <section class="row ">
    <section class="col-12 col-sm-12 col-md-12">
    <!--<span class="form-container  col-12 col-sm-12 col-md-12 " method="GET" action="experiment.php" enctype="multipart/form-data">
   --> 
   <form action="courseSearch_select.php" method="GET" enctype="multipart/form-data">
<!-------------------------------------Search Courses------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12">
  
  <!--Sort District-->
          <div class="form-group col-md-3">
          <label for="searchDistrictCourse">District</label>
            <select name="searchDistrictCourse" value="searchDistrictCourse" id="searchDistrictCourse" class="form-control">
              <option selected>All</option>
              <option>Colombo</option>
              <option>Gampaha</option>
              <option>Kaluthara</option>
              <option>Rathnapura</option>
              <option>Kegalle</option>
              <option>Anuradhapura</option>
              <option>Polonnaruwa</option>
              <option>Galle</option>
              <option>Matara</option>
              <option>Hambanthota</option>
              <option>Matale</option>
            </select>
          </div> 
  
  <!--Educational Qualification-->
          <div class="form-group col-md-3">
              <label for="searchEduCourse">Educational Qualification (Minimum Required)</label>
              <select name="searchEduCourse"value="searchEduCourse" id="searchEduCourse" class="form-control">
              <option selected>All</option>
              <option>Primary Education</option>
              <option>Secondary Education</option>
              <option>Ordinary Level</option>
              <option>Advanced Level</option>
              <option>Diploma Level</option>
              <option>Degree Level</option>
            </select> </div>
  <!--Course Duration-->
  <div class="form-group col-md-3">
              <label for="searchDueCourse">Course Duration (Month)</label>
              <select name="searchDueCourse" value="searchDueCourse" id="searchDueCourse" class="form-control">
              <option selected>All</option>
              <option>3</option>
              <option>4</option>
              <option>6</option>
              <option>8</option>
              <option>12</option>
              <option>24</option>
              <option>36</option>
            </select></div>
<!--NVQ Level-->
<div class="form-group col-md-3">
              <label for="searchNVQCourse">NVQ Level</label>
              <select name="searchNVQCourse" value="searchNVQCourse" id="searchNVQCourse" class="form-control">
              <option selected>None</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option> 
            </select></div>
      </div>

<!-------------------------------------Search Courses------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12"> 
      <div class="form-group col-md-6 "> 
        <button type="submit" name="Filter" id="Filter" class="btn btn-primary btn-block">Filter</button>
      </div>
      
      <div class="form-group col-md-6">        
        <button type="button" href="course_search.php" class="btn btn-primary btn-block"> Reset</button> 
      </div>
    </div>
<!--</span>--></form>
</section>
</section>
</section>


      
<div class="container">  
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
            <h1>Course Details</h1>
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
        </div>
<?php

?>
      
</body>
<script> 

$(document).ready(function(){
    function fetch_data()  
    {  
        $.ajax({  
            url:"courseSearch_select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    } 
//Register for
    
        $(document).on('click', '.btn_register', function(){  
        var id=$(this).data("id8");  
            window.location.href ="http://localhost/dashboard/A_Updated_Home/JobBuddy-v.2.0-master/stu_update.php?id="+id;
            //C:\xampp\htdocs\dashboard\A_Updated_Home\JobBuddy-v.2.0-master
           
    }); 

    /*
    load_data();
    function load_data(query='')
    {
      $.ajax({
        url:"courseSearch_select",
        method:"POST",
        data:{query:query},
        success:function(data){
          $('coursedetails').html(data);
        }
      })
    }
*/
    fetch_data(); });
</script>