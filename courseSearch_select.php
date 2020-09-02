
<?php  
 $connect = mysqli_connect("localhost", "root", "", "jobbuddy");  
 $output = ''; 
 if(!empty($_GET)){?>
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

<!--History Manage-->
<?php     
      include("includes/historyManage.php");
    ?> 
 <?php
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
    coursedetails.vtcRegID=vtcenters.vtcRegID WHERE vtcenters.district='$a' OR coursedetails.EduLevel='$b' 
    OR coursedetails.Duration='$c'  " ;
    
    
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
     /*---------------------------------------------------------------------------------------------------------*/
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
 