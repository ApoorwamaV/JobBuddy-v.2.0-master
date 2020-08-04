<?php require_once('includes/connection.php'); 
$sql = "SELECT * FROM coursedetails  ";  
$result = mysqli_query($connection, $sql);  
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
<!--Nav-->
<div class="icon-bar">
  <a class="active" href="Index.php"><i class="fa fa-home"></i></a>
  <a href="#"><i class="fa fa-search"></i></a>
  <a href="#"><i class="fa fa-trash"></i></a>
</div>

<!-------------------------------------Search Courses------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12">
  
  <!--Sort District-->
          <div class="form-group col-md-3">
          <label for="searchDistrictCourse">District</label>
            <select name="searchDistrictCourse" class="form-control">
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
              <select name="searchEduCourse" class="form-control">
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
              <select name="searchDueCourse" class="form-control">
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
              <select name="searchNVQCourse" class="form-control">
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
    
    

    fetch_data(); });
</script>