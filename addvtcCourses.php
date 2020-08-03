<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Vocational Courses</title>

    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
    
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<div class="form-row col-12 col-md-12 col-sm-12">

<section class="container-fluid  bg">

<!--Add vtc courses-->

  <section class="row justify-content-center">
    <!--<section class="col-12 col-sm-6 col-md-3">-->
      <form class="form-container justify-content-start" action="add_vtcCourses.php" method="post" enctype="multipart/form-data" >

        <h2> Add Vocational Courses </h2>
        <div class="form-group" >
          <label for="courseID">Course ID </label>
          <input type="text" name="courseID" id="courseID" class="form-control" id="courseID"  placeholder="Course ID">          
        </div>

        <div class="form-group" >
          <label for="courseName">Course Name </label>
          <input type="text" name="courseName" id="courseName" class="form-control" id="courseName"  placeholder="Course Name">          
        </div>

        <div class="form-group" >
          <label for="vtcID">Vocation Training Centre ID </label>
          <input type="text" name="vtcID" class="form-control" id="vtcID"  placeholder="Vocation Training Centre ID">          
        </div>

        <div class="form-group" >
          <label for="courseDu">Course Duration </label>
          <input type="text" name="courseDu" class="form-control" id="courseDu"  placeholder="Course Duration">          
        </div>

        <div class="form-group" >
          <label for="courseReqEdu">Required Education Qualification  </label>
          <input type="text" name="courseReqEdu" class="form-control" id="courseReqEdu"  placeholder="Required Education Qualification (Minimun)">          
        </div>

        <div class="form-group" >
          <label for="courseNVQ">NVQ Level  </label>
          <select name="courseNVQ" class="form-control"required>
              <option selected>None</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>              
            </select></div>
        

<div class="form-row col-12 col-md-12 col-sm-12"> 
      <div class="form-group justify-content-start col-4 col-md-4 col-sm-4"> 
        <button type="submit" name="register" class="btn btn-primary btn-block">Submit</button>
      </div>
      
      <div class="form-group justify-content-end col-4 col-md-4 col-sm-4">
        <button type="button" href="1.2vtcHome.php" class="btn btn-primary btn-block"> Back</button> 
      </div>
</div>
        
      </form>
    </section>
  </section>
<!--</section>-->

</div></div>
  <!--End of the Page Body-->
    <script.src="js/jquery.js"></script>
    <script.src="js/bootstrap.js"></script>  
</body>
</html>
<?php mysqli_close($connection); ?>