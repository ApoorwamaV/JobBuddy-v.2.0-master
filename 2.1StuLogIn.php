<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
</head>
<body> 
<!--Page Body-->

<!--Login Form-->
<section class="container-fluid bg">
  <section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-md-3">
      <form class="form-container" action="loginStu.php" method="post">
      <?php 
      if(isset($_GET['empty'])){
        $Message=$_GET['empty'];
        $Message= "Please Enter Both User Email & Password";
      
      
      ?>
      <div class="alert alert-danger text-center"><?php echo $Message?></div>
      <?php 
      }
      ?>
      <?php 
      if(isset($_GET['U_Invalid'])){
        $Message=$_GET['U_Invalid'];
        $Message= "Invalid User Credentials";
      
      
      ?>
      <div class="alert alert-danger text-center"><?php echo $Message?></div>
      <?php 
      }
      ?>
       <?php 
      if(isset($_GET['P_Invalid'])){
        $Message=$_GET['P_Invalid'];
        $Message= "Invalid Password";
      
      
      ?>
      <div class="alert alert-danger text-center"><?php echo $Message?></div>
      <?php 
      }
      ?>
        <div class="form-group" >
          <label for="exampleInputEmail1">Email address or NIC</label>
          <input type="email" name="Stu_Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your E mail">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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
  if(isset($_POST))
?>
</body>
</html>
