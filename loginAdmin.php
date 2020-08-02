<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php 
?>
<?php


if(isset($_POST['login'])){

    
           $adminID = $_POST['adminID'];
            $adminPassword = $_POST['adminPassword'];
          // $hashed_password= sha1($password);

            $Query = " SELECT * FROM admindetails where AdminID = '".$adminID."' AND AdminPassword = '".$adminPassword."'limit 1 ";
            $result = mysqli_query($connection,$Query);

            if(mysqli_num_rows($result)==1){
                header("location: ../JobBuddy-v.2.0-master/AdminHome.php");
                echo " You Have Logged in Successfully.";
                exit();
            }else{
                header("location: ../JobBuddy-v.2.0-master/adminLogIn.php");
               echo " You Have Entered Incorrect Details.";
               exit(); 
            }
}
?>