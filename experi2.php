<?php require_once('includes/connection.php'); 

?>

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
        <button type="button" href="courseSearch_select.php" class="btn btn-primary btn-block"> Reset</button> 
      </div>
    </div>
<!--</span>--></form>
</section>
</section>
</section>
<?php  
 $connect = mysqli_connect("localhost", "root", "", "jobbuddy");  
 $output = ''; 
 if(!empty($_GET)){
     $a=$_GET['searchDistrictCourse'];
     $b=$_GET['searchEduCourse'];
     $c=$_GET['searchDueCourse'];
    
     //$d=$_GET['searchNVQCourse'];
    
    $sql = "SELECT 
     coursedetails.CourseId,coursedetails.CourseName, 
     coursedetails.vtcRegID, vtcenters.vtcName, vtcenters.district, 
     coursedetails.Duration, coursedetails.EduLevel, coursedetails.NVQ
    FROM 
         coursedetails
    INNER JOIN 
         vtcenters 
    ON
    coursedetails.vtcRegID=vtcenters.vtcRegID WHERE vtcenters.district='$a' AND coursedetails.EduLevel='$b' 
    AND coursedetails.Duration='$c'  " ;
    
    
     $result = mysqli_query($connect, $sql);  
     $output .= '  
          <div class="table-responsive">  
               <table class="table table-bordered">  
                    <tr>  
                         <th width="10%">Course ID</th>  
                         <th width="20%">Course Name</th>
                         <th width="10%">Vocational Training Centre ID</th>
                         <th width="30%">Vocational Training Centre Name</th>
                         <th width="10%">District</th>
                         <th width="10%">Duration</th>
                         <th width="20%">Edulevel</th>                     
                         <th width="20%">Action</th>
                    </tr>';  
     $rows = mysqli_num_rows($result);
    
     if($rows > 0)  
     {  
           if($rows > 10)
           {
                $delete_records = $rows - 10;
                $delete_sql = "DELETE FROM coursedetails LIMIT $delete_records";
                mysqli_query($connect, $delete_sql);
           }
          while($row = mysqli_fetch_array($result))  
          {  
               $output .= '  
                    <tr>  
                    <td>'.$row["CourseId"].'</td>
                    <td class="CourseName" data_id1="'.$row["CourseId"].'" 
                        contenteditable>'.$row["CourseName"].'</td>
                   <td class="vtcRegID" data_id2="'.$row["CourseId"].'" 
                        contenteditable>'.$row["vtcRegID"].'</td>
                   <td class="vtcName" data_id6="'.$row["CourseId"].'" 
                        contenteditable>'.$row["vtcName"].'</td>
                   <td class="district" data_id5="'.$row["CourseId"].'" 
                        contenteditable>'.$row["district"].'</td>
                    <td class="Duration" data_id3="'.$row["CourseId"].'" 
                        contenteditable>'.$row["Duration"].'</td>
                    <td class="EduLevel" data_id4="'.$row["CourseId"].'" 
                        contenteditable>'.$row["EduLevel"].'</td>
                    <td>
                        <button type="button" name="btn_delete"  
                             data-id7="'.$row["CourseId"].'" class="btn btn-xs btn-danger btn_delete">Like</button>
                        <button type="button" name="btn_register"  
                             data-id8="'.$row["CourseId"].'" class="btn btn-xs btn-primary btn_register">
                             <a href="Reg_StuCourse.php">Register<a></button></td>
                      
                    </tr>  
               ';  
          }  
          $output .= '  
               <tr>  
                    <td></td>  
                     <td id="CourseName" contenteditable></td>
                     <td id="vtcRegID" contenteditable></td>
                     <td id="Duration" contenteditable></td>
                     <td id="EduLevel" contenteditable></td>
                     
                    
               </tr>  
          ';  
     }  
     else  
     {  
          $output .= '
                        <tr>  
                              <td colspan="4">Data Not Found</td>
                              <td id="CourseName" contenteditable></td>
                              <td id="vtcRegID" contenteditable></td>
                              <td id="Duration" contenteditable></td>
                              <td id="EduLevel" contenteditable></td>
                        </tr>';  
     }  
     $output .= '</table>  
          </div>';  
     echo $output;  } 
else{
$sql = "SELECT 
 coursedetails.CourseId,coursedetails.CourseName, 
 coursedetails.vtcRegID, vtcenters.vtcName, vtcenters.district, 
 coursedetails.Duration, coursedetails.EduLevel, coursedetails.NVQ
FROM 
     coursedetails
INNER JOIN 
     vtcenters 
ON
coursedetails.vtcRegID=vtcenters.vtcRegID";


 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Course ID</th>  
                     <th width="20%">Course Name</th>
                     <th width="10%">Vocational Training Centre ID</th>
                     <th width="30%">Vocational Training Centre Name</th>
                     <th width="10%">District</th>
                     <th width="10%">Duration</th>
                     <th width="20%">Edulevel</th>                     
                     <th width="20%">Action</th>
                </tr>';  
 $rows = mysqli_num_rows($result);

 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM coursedetails LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                <td>'.$row["CourseId"].'</td>
                <td class="CourseName" data_id1="'.$row["CourseId"].'" 
                    contenteditable>'.$row["CourseName"].'</td>
               <td class="vtcRegID" data_id2="'.$row["CourseId"].'" 
                    contenteditable>'.$row["vtcRegID"].'</td>
               <td class="vtcName" data_id6="'.$row["CourseId"].'" 
                    contenteditable>'.$row["vtcName"].'</td>
               <td class="district" data_id5="'.$row["CourseId"].'" 
                    contenteditable>'.$row["district"].'</td>
                <td class="Duration" data_id3="'.$row["CourseId"].'" 
                    contenteditable>'.$row["Duration"].'</td>
                <td class="EduLevel" data_id4="'.$row["CourseId"].'" 
                    contenteditable>'.$row["EduLevel"].'</td>
                <td>
                    <button type="button" name="btn_delete"  
                         data-id7="'.$row["CourseId"].'" class="btn btn-xs btn-danger btn_delete">Like</button>
                    <button type="button" name="btn_register"  
                         data-id8="'.$row["CourseId"].'" class="btn btn-xs btn-primary btn_register">
                         <a href="Reg_StuCourse.php">Register<a></button></td>
                  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                 <td id="CourseName" contenteditable></td>
                 <td id="vtcRegID" contenteditable></td>
                 <td id="Duration" contenteditable></td>
                 <td id="EduLevel" contenteditable></td>
                 
                
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					 <td colspan="4">Data Not Found</td>
                          <td id="CourseName" contenteditable></td>
                          <td id="vtcRegID" contenteditable></td>
                          <td id="Duration" contenteditable></td>
                          <td id="EduLevel" contenteditable></td>
                    </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output; } 
 ?>
</body>
</html>