<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php 
?>
<?php

session_start();

if(isset($_POST['login'])){

$_SESSION['vtcRegId'] = "vtcRegId"; // or $_POST['accountno_1'];
$_SESSION['vtcPassword'] = "vtcPassword";
    
           $vtcRegId = $_POST['vtcRegId'];
            $password = $_POST['vtcPassword'];
           $hashed_password= sha1($password);

            $Query = " SELECT * FROM vtcenters where vtcRegId = '".$vtcRegId."' AND passwordVtc = '".$hashed_password."'limit 1 ";
            $result = mysqli_query($connection,$Query);

            if(mysqli_num_rows($result)==1){
                header("location: ../JobBuddy-v.2.0-master/1.2vtcHome.php");
                echo " You Have Logged in Successfully.";
                $_SESSION['vtcRegId'] = $_POST['vtcRegId'];
                exit();
            }else{
                header("location: ../JobBuddy-v.2.0-master/2.2VTCLogIn.php");
               echo " You Have Entered Incorrect Details.";
               exit(); 
            }
}
?>
