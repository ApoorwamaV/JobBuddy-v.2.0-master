<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php 

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
    $StuEmail = $_POST['Stu_Email'];
    $password = $_POST['StuPassword']; 
   
    $Query = "SELECT * FROM students WHERE Stu_Email = '".$StuEmail."' and StuPassword = '".$password."'";
   $result = mysqli_query($connection,$Query);
   
   /*if($row=mysqli_fetch_assoc($result)){
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
   
   // If result matched $StuEmail and $password, table row must be 1 row
    /* 
   if($count == 1) {
      session_register("Stu_Email");
      $_SESSION['login_user'] = $StuEmail;
      
      header("location: 1.2StuHome.php");
   }else {
      $error = "Your Login Name or Password is invalid";
   }
}*/
if($row=mysqli_fetch_assoc($result)){
    $HashPass = password_verify($password,$row['passwordStu']);
    if($HashPass==false){
        echo "<script type='text/javascript'> Logged in Successfully..'); </script>"; 
        header("location: ../JobBuddy%20v.2.0-master/2.1StuLogIn.php");
        //echo "<script type='text/javascript'>alert('Invalid Password');</script>"; 
  
        exit();
    }elseif ($HashPass==true) 
      echo "<script type='text/javascript'>Logged in Successfully..');</script>"; 
      header("location: 1.2StuHome.php");
       // echo "Logged In Successfully..";
    }}
exit();
?>