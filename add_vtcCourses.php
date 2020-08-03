<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php
  
 $courseID = $_POST['courseID'];
 $courseName = $_POST['courseName'];
 $vtcID = $_POST['vtcID'];
 $courseDu = $_POST['courseDu'];
 $courseReqEdu =$_POST['courseReqEdu'];
 $NVQ =$_POST['NVQ'];

 /*555555555555555555555555555555555555555555555555555555555555555555555555555555555555555*/
 
 $query = "INSERT INTO courseDetails(CourseId,CourseName,vtcRegID,Duration,EduLevel,NVQ) VALUES ('{$courseID}','{$courseName}','{$vtcID}','{$courseDu}','{$courseReqEdu}','{$NVQ}')";

  $result='';     
  $result = mysqli_query($connection,$query); 

        if($result){
            echo "<script type='text/javascript'>alert('Course Details Added Successfully..');</script>"; 
         //   header("location: ../JobBuddy%20v.2.0/addvtcCourses.php");     
         echo "<script>
         window.setTimeout(function() {
             window.location = 'addvtcCourses.php';
           }, 5000);
         </script>"  ;
         exit();  
        }else{
          $errors[] = 'Failed to add New Record';
        }
      
?>
<?php 
 /*
 $inputPasswordStu = $_POST['inputPasswordStu'];
 $hashed_password= sha1($inputPasswordStu);
*/
/*
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Course ID
  if (empty($_POST["CourseId"])) {
    $nameErr = "Course ID is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
// Course Name
  if (empty($_POST["CourseName"])) {
    $nameErr = "Course Name is required";
  } else {
    $name = test_input($_POST["CourseName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$courseName)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
*/
?>
?>