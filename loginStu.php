<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php /*
echo"Hi 1";
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   echo"Hi 21";
    $StuEmail = $_POST['Stu_Email'];
    $password = $_POST['StuPassword']; 
   
    $Query = "SELECT * FROM students WHERE EmailStu = '".$StuEmail."' and passwordStu = '".$password."'";
   $result = mysqli_query($connection,$Query);
   
   $row=mysqli_fetch_assoc($result);
      echo"Hi 3";
/*
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
   
   // If result matched $StuEmail and $password, table row must be 1 row
   
   if($count == 1) { echo"Hi 4";
      session_register("Stu_Email");
      $_SESSION['login_user'] = $StuEmail;
      
      header("location: ../JobBuddy%20v.2.0-master/1.2StuHome.php");
      exit();
   }else {echo"Hi 5";
      $error = "Your Login Name or Password is invalid";
   }
} 
*//*
if($row=mysqli_fetch_assoc($result)){
    $HashPass = password_verify($password,$row['passwordStu']);
    if($HashPass==false){
        echo "<script type=('text/javascript'> alert Logged in Successfully..'); </script>"; 
        header("location: ../JobBuddy%20v.2.0-master/2.1StuLogIn.php");
        //echo "<script type='text/javascript'>alert('Invalid Password');</script>"; 
  
        exit();
    }elseif ($HashPass==true) 
      echo "<script type='text/javascript'>Logged in Successfully..');</script>"; 
      header("location: 1.2StuHome.php");
      echo "Logged In Successfully..";
    }}
exit();

echo"Hi 61";*/
?>
<?php


if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($connection,$_POST['Stu_Email']);
    $password = mysqli_real_escape_string($connection,$_POST['StuPassword']);

    if ($email != "" && $password != ""){

        $Query = "select count(*) as cntStu from students where EmailStu ='".$email."' and passwordStu='".$password."'";
        $result = mysqli_query($connection,$Query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntStu'];

        if($count > 0){
            $_SESSION['EmailStu'] = $email;
            header('Location: 1.2StuHome.php');
        }else{
            echo "Invalid email address and password";
        }

    }

}