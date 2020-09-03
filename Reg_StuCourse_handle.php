<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php
$CourseId = $_POST['CourseId'];
$NICStu = $_POST['NICStu'];

$query="INSERT INTO `courseregstu`(`CourseId`, `NICStu`) VALUES ('{$CourseId}','{$NICStu}')";


$result='';     
  $result = mysqli_query($connection,$query); 

        if($result){
            echo "<script type='text/javascript'>alert('Student Registered for the course Successfully..');</script>"; 
         //   header("location: ../JobBuddy%20v.2.0/1.1RegStu.php");     
         echo "<script>
         window.setTimeout(function() {
             window.location = '1.2StuHome.php';
           }, 5000);
         </script>"  ;
         exit();  
        }else{
          $errors[] = 'Failed to add New Record';
        }

        
?>