<?php //require_once('includes/connection.php'); 
$connection = new PDO('mysql:host=localhost;dbname=jobbuddy', 'root', '');
echo "simpleComment";
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Comment System using PHP and Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
<li>
<?php //echo $fullNameStu; ?>
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
  <br />
  <div class="form-group col-md-7">
          <p class="about" >You can 
              find questions which are related to your prefered area, and also you can comment on relevant areas</p></div>
<!------------------------------------Q & A ----------------------------------------->

<form action="simpleComment_select.php" method="GET" enctype="multipart/form-data">
<!-------------------------------------Search Courses------------------------------------------------>
    <div class="form-row col-12 col-md-12 col-sm-12">
  
  <!--Sort District-->
          
          <div class="form-group col-md-5">
          <label class="Justify-content-end" for="PostCategoryId">Category</label>
            <select name="PostCategoryId" value="PostCategoryId" id="PostCategoryId" class="form-control">
              <option selected>--None--</option>
              <option>About Job Oppotunities</option>
              <option>About Vocational Training Courses</option>
              <option>About Vocational Training Courses</option>
              <option>About Required Educational Qualifications for Job Oppotunities</option>
              <option>About Required Educational Qualifications for Vocational Training Courses</option>
              <option>About Organizational Job Vacancies</option>
              
            </select>
          </div> 
    </div>
</form>
  <h2 align="center"><a href="#">Q & A </a></h2>
  <br />
  <div class="container">
  <!--action="add_comment.php" enctype="multipart/form-data"-->
   <form method="POST" id="comment_form" >
    
    <div class="form-group">
     <input type="text" name="PostAuthor" id="PostAuthor" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="Post_Content" id="Post_Content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="PostID" id="PostID" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
 </body>
 <?php echo "Test"?>
</html>

<script>
/*-----------------------------Add Comment-------------------------------------------------*/
$(document).ready(function(){
 
    $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#PostID').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();
/*-----------------------------Load Comment-------------------------------------------------*/
 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 };

 $(document).on('click', '.reply', function(){
  var PostID = $(this).attr("id");
  $('#PostID').val(PostID);
  $('#PostAuthor').focus();
 });
 
});
</script>


