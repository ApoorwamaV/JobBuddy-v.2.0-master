<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php 

?>
<?php
session_start();

if(isset($_POST['login'])){

    
$_SESSION['ComRegID'] = "ComRegID"; // or $_POST['accountno_1'];
$_SESSION['StuPassword'] = "StuPassword"; // or $_POST['accountno_2'];

    
           $ComRegID = $_POST['ComRegID'];
            $passwordCom = $_POST['passwordCom'];
            $hashed_password= sha1($passwordCom);

            $Query = " SELECT * FROM companies where ComRegID = '".$ComRegID."' AND passwordCom = '".$hashed_password."'limit 1 ";
            $result = mysqli_query($connection,$Query);

            if(mysqli_num_rows($result)==1){
                header("location: ../JobBuddy-v.2.0-master/1.2CompanyHome.php");
                echo " You Have Logged in Successfully.";
                $_SESSION['ComRegID'] = $_POST['ComRegID'];
                                
                exit();
            }else{
                header("location: ../JobBuddy-v.2.0-master/2.3CompanyLogIn.php");
               echo " You Have Entered Incorrect Details.";
               exit(); 
            }
}
?> 