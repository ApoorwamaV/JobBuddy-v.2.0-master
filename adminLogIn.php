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
</head>
<body> 
<!--Page Body-->

<!--Login Form-->
<section class="container-fluid bg">
<section class="row justify-content-center">
<section class="col-12 col-sm-6 col-md-3">
      <form class="form-container" action="loginAdmin.php" method="post">
        <div class="form-group">
          <label for="adminID">Admin ID</label>
          <input type="text" class="form-control" name="adminID" id="adminID" 
                  aria-describedby="adminID" placeholder="Admin ID">
        </div>
        <div class="form-group">
          <label for="adminPassword">Password</label>
          <input type="password" class="form-control" name="adminPassword" id="adminPassword" placeholder="Admin Password">
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
