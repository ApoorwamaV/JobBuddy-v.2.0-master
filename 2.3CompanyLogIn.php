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
<!--History Manage-->
<?php     
      include("includes/historyManage.php");
    ?>
<!--Login Form-->
<section class="container-fluid bg">
  <section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-md-3">
      <form class="form-container" action="loginStuCompany.php" method="post">
      
        <div class="form-group" >
          <label for="ComRegID">Company Register Id</label>
          <input type="text" name="ComRegID" class="form-control" id="ComRegID"  placeholder="Enter Company Register Id">
          
        </div>
        <div class="form-group">
          <label for="passwordCom">Password</label>
          <input type="password" name="passwordCom" class="form-control" id="passwordCom" placeholder="Enter password">
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
<?php
  if(isset($_POST));
?>
<!--End of the Page Body-->
</body>
</html>
