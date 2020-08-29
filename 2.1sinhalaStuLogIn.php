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
  <!--History Manage-->
  <?php     
      include("includes/historyManage.php");
    ?>
<!--Page Body-->

<!--Login Form-->
<section class="container-fluid bg">
  <section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-md-3">
      <form class="form-container" action="loginStu.php" method="post">
      
        <div class="form-group" >
          <label for="exampleInputEmail1">විද්යුත් තැපැල් ලිපිනය </label>
          <input type="email" name="Stu_Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your E mail">
          <small id="emailHelp" class="form-text text-muted"> අපි ඔබේ විද්‍යුත් තැපෑල වෙනත් කිසිවෙකුට ලබා නොදෙමු.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">මුරපදය</label>
          <input type="password" name="StuPassword" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">පරීක්ෂා කරන්න</label>
        </div>
        <button type="submit" name="login" class="btn btn-primary btn-block">මගේ ගිණුමට පිවිසෙන්න</button><br>
        <div class="form-group">
          <a href="" align="Center"> මුරපදය අමතක විය </a>
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
</body>
</html>