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
  <div class="form-group col-md-2"><a href="#">
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

<div class="icon-bar">
  <a class="active" href="Index.php"><i class="fa fa-home"></i></a>
  <a href="#"><i class="fa fa-search"></i></a>
  <a href="#"><i class="fa fa-trash"></i></a>
</div>
<a href="Index.php" class="previous round">&#8249;</a>
<div class="container">  
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
            <h1>Student Details Table</h1>
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
        </div>

<!-- Add social media icons -->

<br><br>
 <section class="row justify-content-center">
<section class="col-12 col-sm-12 col-md-12">
<div class="form-row col-12 col-md-12 col-sm-12 justify-content-center">  
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

</body>
</html>
<script>
$(document).ready(function(){
    function fetch_data()  
    {  
        $.ajax({  
            url:"stu_select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    } 
    


fetch_data(); /*
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
*/
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

    });       
</script>