<?php require_once('includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

    
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Joined Companies</title>

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
                <li><a href="Index.php">Home</a></li>
                <li><a href="VocationalTrainingCentres.php">Vocational Training Centres</a></li>
                <li  class="active"><a href="Companies.php">Companies</a></li>
                <li><a href="viewComment.php">Q & A</a></li>
                <li><a href="3AboutAll.php">About us</a></li>
                <li><a href="#contact">Contact</a></li>

<!--Register
              <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" href="#">Register
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                    <li><a href="./1.1RegStu.php">Student</a></li>
                    <li><a href="./1.1RegVocationalCentre.php">Vocational Training Centre</a></li>
                    <li><a href="./1.1RegCompany.php">Company</a></li>
              </ul>
              </li>
<!--Login
              <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                    <li><a href="./2.1StuLogIn.php">Student</a></li>
                    <li><a href="./2.2VTCLogIn.php">Vocational Training Centre</a></li>
                    <li><a href="./2.3CompanyLogIn.php">Company</a></li>
                    <li><a href="./adminLogIn.php">Administrator</a></li>
              </ul>
              </li>-->

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
</div><br><br>

<!--History Manage-->
<?php     
      include("includes/historyManage.php");
    ?>
    
    <br><br><br><br><br><br><br><br>

<div class="container">  
            <br />  
            
			<br />
			<div class="table-responsive" id="stuDetails">  
            <h1>Company Data</h1>
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
            url:"UserView_Companies_handle.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    } 
    


fetch_data(); 
$(document).on('click', '#btn_add', function(){  
        var first_name = $('#first_name').text();  
        var last_name = $('#last_name').text();  
        if(first_name == '')  
        {  
            alert("Enter First Name");  
            return false;  
        }  
        if(last_name == '')  
        {  
            alert("Enter Last Name");  
            return false;  
        }  
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{first_name:first_name, last_name:last_name},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  

 function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    } 


   $(document).on('blur', '.first_name', function(){  
        var id = $(this).data("id1");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "first_name");  
    });  
    $(document).on('blur', '.last_name', function(){  
        var id = $(this).data("id2");  
        var last_name = $(this).text();  
        edit_data(id,last_name, "last_name");  
    }); 
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id8");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"vtc_delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });
    //Update
    $(document).on('click', '.btn_update', function(){  
        var id=$(this).data("id9");  
            window.location.href ="http://localhost/dashboard/A_Updated_Home/JobBuddy-v.2.0-master/vtc_update.php?id="+id;
           
          
    });  
    });       
</script><?php
   require_once('includes/connection.php');
   require_once('includes/functions.php');?>

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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Profile</title>

    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" type="text/css" href="Lib2.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>
  
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
<!-- The sidebar 
<div class="sidebar">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
 The sidebar END -->
 <br><br>
 <section class="row justify-content-center">
<section class="col-12 col-sm-12 col-md-12">
<div class="form-row col-12 col-md-12 col-sm-12 justify-content-center">  
  <div class="form-group col-md-2"> <a href="#stuDetails">
    <img src="Images/user.png" alt="User Profile" width="80" height="80"> <p>User Profile</p></a>
  </div>
  <div class="form-group col-md-2"><a href="course_search.php">
    <img src="Images/school.png" alt="Search for Courses"  width="80" height="80"> <p>Search Courses</p></a>
  </div>
  <div class="form-group col-md-2"> <a href="UserView_VocationalTrainingCentres.php">
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


<div class="container">  
            <br />  
            
			<br />
			<div class="table-responsive" id="stuDetails">  
            <h1>Vocational Trainig Centers Details Table</h1>
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
        </div>
 

</body>
</html>
<script>



$(document).ready(function(){
    function fetch_data()  
    {  
        $.ajax({  
            url:"UserView_VocationalTrainingCentres_handle.php",  
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
            window.location.href ="http://localhost/dashboard/A_Updated_Home/JobBuddy-v.2.0-master/UserView_VocationalTrainingCentres_Courses.php?id="+id;
           
          
    });  
    });       
</script>