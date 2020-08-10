<?php session_start();
      //Put session start at the beginning of the file
?>
<?php require_once('includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

</head>
<body> 
<!--Page Body-->

<!--Login Form-->
<section class="container-fluid bg">
  <section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-md-3">
      <form class="form-container" action="loginStu.php" method="post">
      
        <div class="form-group" >
          <label for="exampleNIC">NIC Number</label>
          <input type="text" name="Stu_NIC" class="form-control" id="exampleNIC"  placeholder="Enter your NIC">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="StuPassword" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="login" class="btn btn-primary btn-block">Log in</button><br>
        <div class="form-group">
          <a href="" align="Center"> Forgot Password </a>
        </div>
      </form>
    </section>
  </section>
</section>
<!-- End of the Login Form-->

<!--End of the Page Body-->
<?php
  if(isset($_POST));
?>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['name'] = $_POST['name'];
        
        if($_SESSION['name']) {
            header('location: printName.php');
        }
    }
?>
</body>
</html>