<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php 

?>
<?php
session_start();

if(isset($_POST['login'])){

    
           $StuEmail = $_POST['Stu_Email'];
            $password = $_POST['StuPassword'];
            $hashed_password= sha1($password);

            $Query = " SELECT * FROM students where EmailStu = '".$StuEmail."' AND passwordStu = '".$hashed_password."'limit 1 ";
            $result = mysqli_query($connection,$Query);

            if(mysqli_num_rows($result)==1){
                header("location: ../JobBuddy-v.2.0-master/1.2StuHome.php");
                echo " You Have Logged in Successfully.";
                $_SESSION['EmailStu'] = $EmailStu;
                
                exit();
            }else{
                header("location: ../JobBuddy-v.2.0-master/2.1StuLogIn.php");
               echo " You Have Entered Incorrect Details.";
               exit(); 
            }
}
?> 