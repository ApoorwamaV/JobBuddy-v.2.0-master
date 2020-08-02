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
      <form class="form-container" action="loginVtc.php" method="post">
        <div class="form-group">
          <label for="vtcID">Vocational Training Centre ID</label>
          <input type="text" class="form-control" name="vtcID" id="vtcID" 
                  aria-describedby="vtcID" placeholder="Enter Vocational Training Centre ID">
        </div>
        <div class="form-group">
          <label for="vtcPassword">Password</label>
          <input type="password" class="form-control" name="vtcPassword" id="vtcPassword" placeholder="Enter your password">
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
