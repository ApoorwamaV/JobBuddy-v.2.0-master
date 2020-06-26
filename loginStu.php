<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php 

if(isset($_POST['login'])){
   if(empty($_POST['Stu_Email']) || empty($_POST['StuPassword'])){
       header("location: ../JobBuddy%20v.2.0/2.1StuLogIn.php?empty");
       exit();
   }else{
       $StuEmail = $_POST['Stu_Email'];
       $password = $_POST['StuPassword'];

       $Query = " SELECT * FROM students EmailStu = '".$StuEmail."'";  
       $result = mysqli_query($connection,$Query);

       if($row=mysqli_fetch_assoc($result)){
          $HashPass = password_verify($password,$row['passwordStu']);
          if($HashPass==false){
              header("location: ../JobBuddy%20v.2.0/2.1StuLogIn.php?P_Invalid");
              //echo "<script type='text/javascript'>alert('Invalid Password');</script>"; 
        
              exit();
          }elseif ($HashPass==true) {
            echo "<script type='text/javascript'>Logged in Successfully..');</script>"; 
        
             // echo "Logged In Successfully..";
          }

       }else{
        header("location: ../JobBuddy%20v.2.0/2.1StuLogIn.php?U_Invalid");
     
       exit();
       }
   }
}else{
     header("location: ../JobBuddy%20v.2.0/2.1StuLogIn.php");
    // echo "<script type='text/javascript'>alert('Enter pw and email');</script>"; 
        
     exit();
}



?>