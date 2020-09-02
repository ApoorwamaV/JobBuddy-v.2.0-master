<?php
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


<!--Trying to review student data --- Start-->
  <section class="container-fluid stuHome" id="stuDetails">   <!--Added ID to link sections in same ID-->
    <section class="row justify-content-start">
    <section class="col-6 col-sm-6 col-md-6">
      
    <form class="form-container justify-content-start col-12 col-sm-6 col-md-10 " > 
    <form class=" solid stuReg">
      
<!-----------------------------------View Stu NIC & Email----------------------------------------------->
<div class="form-row col-12 col-md-12 col-sm-12">  
  <div class="form-group col-md-6">
	  <label for="Stu_NIC">Student NIC</label>
	  <input type="text" class="form-control" name="Stu_NIC" value="<?php echo $Stu_NIC; ?>" readonly>
  </div>
  <div class="form-group col-md-6">
	  <label for="EmailStu">Student Email</label>
	  <input type="text" class="form-control" name="EmailStu" value="<?php echo $EmailStu; ?>" readonly>
  </div>
</div>

<!------------------------------------View Full Name---------------------------------------------->
<div class="form-row col-12 col-md-12 col-sm-12">  
  <div class="form-group col-md-12">
	  <label for="fullNameStu">Full Name</label>
	  <input type="text" class="form-control" name="fullNameStu" value="<?php echo $fullNameStu; ?>" readonly/>
  </div>
</div>

<!-----------------------------------View Stu contact no and edu--------------------------------------------->
<div class="form-row col-12 col-md-12 col-sm-12">  
  <div class="form-group col-md-6">
	  <label for="contactNoStu">Student Contact Number</label>
	  <input type="text" class="form-control" name="contactNoStu" value="<?php echo $contactNoStu; ?>" readonly>
  </div>
  <div class="form-group col-md-6">
	  <label for="eduLevelStu">Educational Qualification</label>
	  <input type="text" class="form-control" name="eduLevelStu" value="<?php echo $eduLevelStu; ?>" readonly>
  </div>
</div>

<!-----------------------------------Address ------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12">  
  <div class="form-group col-md-12">
	  <label for="addressStu">Address</label>
	  <input type="text" class="form-control" name="addressStu" value="<?php echo $addressStu; ?>" readonly>
  </div> 
</div>
<!-----------------------------------District and DOB---------------------------------------------->
<div class="form-row col-12 col-md-12 col-sm-12"> 
  <div class="form-group col-md-12">
	  <label for="districtStu">District</label>
	  <input type="text" class="form-control" name="districtStu" value="<?php echo $districtStu; ?>" readonly>
  </div>
  <div class="form-group col-md-12">
	  <label for="DOBStu">Date of Birth</label>
	  <input type="text" class="form-control" name="DOBStu" value="<?php echo $DOBStu; ?>" readonly>
  </div>
</div>

</form></form></section></section></section>

<!-- Add social media icons -->

<br>
 <section class="row justify-content-center" id="contact">
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
  </section></section> 

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</div> 
</body>
</html>
<script>
  $(document).ready(function(){
    function fetch_data()  
    {  
        $.ajax({  
            url:"Stu_Home.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    } ;
    fetch_data();

//delete details
$(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id8");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"stu_delete.php",  
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
 //Update dtails
 $(document).on('click', '.btn_update', function(){  
        var id=$(this).data("id9");  
            window.location.href ="http://localhost/dashboard/A_Updated_Home/JobBuddy-v.2.0-master/stu_update.php?id="+id;
            //C:\xampp\htdocs\dashboard\A_Updated_Home\JobBuddy-v.2.0-master
           
          
    }); 

</script>