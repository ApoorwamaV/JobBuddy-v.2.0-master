<?php
   require_once('includes/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Profile</title>

    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!---------------------------------------------Add Column---------------------------------------------------->
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.columnLayout {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.rowLayout:after {
  content: "";
  display: table;
  clear: both;
}
/* Style the buttons */
.btnLayout {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btnLayout:hover {
  background-color: #ddd;
}

.btnLayout.active {
  background-color: #666;
  color: white;
}
</style>

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
  <div class="collapse navbar-collapse " id="barLink">
    <ul class="nav navbar-nav justify-content-end">
      <li class="active"><a href="1.2StuHome.php" >Home</a></li>
      <li><a href="#">I want to know more about </a></li>
      <li><a href="3AboutAll.php">About us</a></li>
      <li><a href="4ContactAll.php">Contact</a></li>
<!--Admin Panel-->
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" href="#">User Details
                  <span class="caret"></span>
          </a>
        <ul class="dropdown-menu">
            <li><a href="./stu_admin_panel.php">Student Details</a></li>
            <li><a href="./vtc_admin_panel.php">Vocational Training Centre Details</a></li>
            <li><a href="./com_admin_panel.php">Company Details</a></li>
            <li><a href="./courses_admin_panel.php">Courses Details</a></li>
        </ul>
      </li>

<!--Logout-->
      <li>
          <form method='post' action="">
            <button class="btn btn-danger BG-DANGER" type="submit" name="but_logout">Logout</button>
          </form>
      </li>
    </ul>
  </div>
</div>
</nav> 
</div>
<!-- Language -->
<div class="form-group col-md-5 justify-content-end"><br>
  <div class="Lang justify-content-end" align="left">
    <li class=btn><a href="Index.php"><button type="button" href class="btn btn-primary bg-primary btn-block">English</button></a></li>
    <li class=btn><a href="sinhalaIndex.php"><button type="button" href class="btn btn-primary bg-primary  btn-block">සිංහල</button></a></li>
    <li class=btn><a href="tamilIndex.php"><button type="button" href class="btn btn-primary bg-primary  btn-block">தமிழ்</button></a></li>
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
  <div class="form-group col-md-2"><a href="./simpleComment.php">
    <img src="Images/campaign.png" alt="Search for Courses"  width="80" height="80"> <p>Q & A</p></a>
  </div>
  <div class="form-group col-md-2"> <a href="./stu_admin_panel.php">
    <img src="Images/student.png" alt="Update Profile" width="80" height="80"> <p>Students</p></a>
  </div>
  <div class="form-group col-md-2"> <a href="./vtc_admin_panel.php">
    <img src="Images/teacher.png" alt="Vocational Training Centres" width="80" height="80"> <p>Vocational Training Centres</p></a>
  </div>
  <div class="form-group col-md-2"> <a href="./com_admin_panel.php">
    <img src="Images/company.png" alt="Company Details" width="80" height="80"> <p>Companies</p></a>
  </div>
  <div class="form-group col-md-2"> <a href="./courses_admin_panel.php">
    <img src="Images/school.png" alt="Company Details" width="80" height="80"> <p>Vocational Training Courses</p></a>
  </div>
</section>
</section>
<!--History Manage-->
<?php     
      include("includes/historyManage.php");
    ?>
<!------------------------------Layout-------------------------------------------->


<div id="btnContainer">
  <button class="btnLayout" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
  <button class="btnLayout active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>
<br>

<div class="rowLayout">
        <!------------------------------Manage Admins-------------------------------------------->

  <div class="columnLayout" style="background-color:black; color:white">
    <h2 style="font-size:24px">Manage Admins</h2>
            <button class="button" style="background-color:gray" >
                  <a href="#addadmin" style="color:white">Manage Admin</a>
            </button>
  </div>
        <!------------------------------Manage Admins-------------------------------------------->
  <div class="columnLayout" style="background-color:black; color:white">
    <h2 style="font-size:24px">District vise Students</h2>
            <button class="button" style="background-color:gray" >
                  <a href="reportStu.php" style="color:white">View Report</a>
            </button>
  </div>
</div>

<div class="rowLayout">
        <!------------------------------Manage Admins-------------------------------------------->

  <div class="columnLayout" style="background-color:black; color:white">
    <h2 style="font-size:24px">District vise Vocational Training Centres</h2>
            <button class="button" style="background-color:gray" >
                  <a href="reportVtc.php" style="color:white">View Report</a>
            </button>
  </div>
        <!------------------------------Manage Admins-------------------------------------------->
  <div class="columnLayout" style="background-color:black; color:white">
    <h2 style="font-size:24px">Check Emails</h2>
            <button class="button" style="background-color:gray" >
                  <a href="https://mail.google.com/mail/u/3/?tab=wm&ogbl#inbox" style="color:white">Emails</a>
            </button>
  </div>
</div>

<script>
// Get the elements with class="columnLayout"
var elements = document.getElementsByClassName("columnLayout");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btnLayout");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

  <!---------------------------------------------------Image------------------------------------------------------->
  <img src="Images/z_bus-piv-Future-of.jpg" alt="Image" width="100%" height="100%">
  
<!---------------------------------------------------Add new admin------------------------------------------------------->
<div class="container-fluid">
  <form class="bg-dark form-container col-12 col-md-12 col-sm-12 justify-content-center bg-dark" method="post" action="Reg_Admin.php" id="addadmin" enctype="multipart/form-data">                  
  <h1 class="aboutH1 " align="center" style="color:white"> Add Admin </h1>    
      <div class="form-row col-12 col-md-12 col-sm-12 bg-dark">  
            <div class="form-group col-md-6 justify-content-start bg-dark"><br>        
                <label for="AdminID" style="color:white">Admin ID</label>
                <input type="text" class="form-control" name="AdminID" placeholder="adminX"  required>         
            </div>
            <div class="form-group col-md-6 justify-content-end "><br>
                <label for="AdminName" style="color:white">Admin Name</label>
                <input type="text" class="form-control" name="AdminName" placeholder="Admin Name"  required> 
            </div>
      </div>
      <div class="form-row col-12 col-md-12 col-sm-12 bg-dark">  
            <div class="form-group col-md-6 justify-content-start bg-dark"><br>        
                <label for="AdminEmail" style="color:white">Admin Email</label>
                <input type="text" class="form-control" name="AdminEmail" placeholder="admin@gmail.com"  required>         
            </div>
            <div class="form-group col-md-6 justify-content-end "><br>
                <label for="AdminPassword" style="color:white">Admin Password</label>
                <input type="text" class="form-control" name="AdminPassword" placeholder="Admin Password"  required> 
            </div>
      </div>
      <div class="form-group  " align="center" col="5"> 
        <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
      </div>
  </form>
</div>
  
<!-- Add social media icons -->

<br><br><br><br><br><br><br><br><br><br><br><br>
<div>
<section class="row justify-content-center">
<section class="col-12 col-sm-12 col-md-12">
  <div class="form-row col-12 col-md-12 col-sm-12 justify-content-center bg-dark"> <br><br><br><br><br><br><br><br> 
    <div class="form-group col-md-2 justify-content-center"> <a href="#" style="color:white">
      <img src="Images/location.png" alt="Location" width="50" height="50"> <p class="justify-content-center">Kalagedihena, <br>Nittambuwa,<br>Sri Lanka.</p></a>
    </div>
    <div class="form-group col-md-2 justify-content-center"> <a href="#" style="color:white">
      <img src="Images/call.png" alt="Contact Number" width="50" height="50"> <p class="justify-content-center">+94 70 588 2716</p></a>
    </div>
    <div class="form-group col-md-2 justify-content-center"> <a href="https://www.facebook.com/106660131113039?referrer=whatsapp" style="color:white">
      <img src="Images/facebook.png" alt="Facebook" width="50" height="50"> <p class="justify-content-center">JOBBuddy Career</p></a>
    </div>
    <div class="form-group col-md-2 justify-content-center"> <a href="#" style="color:white">
      <img src="Images/whatsapp.png" alt="Whatsapp" width="50" height="50"> <p class="justify-content-center">+94 70 588 2716</p></a>
    </div>
    <div class="form-group col-md-2 justify-content-center"> <a href="https://www.youtube.com/channel/UCzh1By4MZccb8SsgAlvyFSA" style="color:white">
      <img src="Images/youtube.png" alt="Youtube" width="50" height="50"> <p class="justify-content-center">JOBBuddy Career</p></a>
    </div>
    <div class="form-group col-md-2 justify-content-center"><a href="mailto:jobbuddycareer@gmail.com" style="color:white">
      <img src="Images/gmail.png" alt="Gmail"  width="50" height="50"> <p class="justify-content-center">jobbuddycareer@gmail.com</p></a>
    </div>  
  </div>
</section>
</section>
</div>

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>   
</body>
</html>