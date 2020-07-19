<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php

//Checking if email address already exist
     
    //   $query = "SELECT * FROM students WHERE EmailStu ='{$inputEmailStu}' LIMIT 1";

    //   $result_set = mysqli_query($connection,$query);
      
    //   if($result_set){
    //     if(mysqli_num_rows($result_set)==1){
    //       $errors[]= 'Email address already exists';
    //     }
    //   }
   
//Upload Image attributes
$target = 'uploads/'.basename($_FILES['id_copy']['name']);

$image = $_FILES['id_copy']['name'];
//$text= $_POST['text_id'];
$tmp_name = $_FILES['id_copy']['tmp_name'];


 $hashed_password ='';

  
 $designationStu = $_POST['designationStu'];
 $firstNameStu = $_POST['firstNameStu'];
 $lastNameStu =$_POST['lastNameStu'];
 $fullNameStu = $_POST['fullNameStu'];
 $inputEmailStu = $_POST['inputEmailStu'];
 $initialNameStu =$_POST['initialNameStu'];
 $inputPasswordStu = $_POST['inputPasswordStu'];
 $inputNICStu = $_POST['inputNICStu'];
 $DOBStu = $_POST['DOBStu'];
 $inputGenderStu = $_POST['inputGenderStu'];
 $inputCStatusStu = $_POST['inputCStatusStu'];
 $inputAddressStu = $_POST['inputAddressStu'];
 $inputDistrictStu = $_POST['inputDistrictStu'];
 $inputContactNoStu = $_POST['inputContactNoStu'];
 $eduLevel = $_POST['edu'];
 $hashed_password= sha1($inputPasswordStu);

 //image upload
 if(move_uploaded_file($tmp_name,$target)){
     echo "uploaded succesfully";
 }else{
     echo "not uploaded";
 }

 /*55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555*/
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?><?php
 /*555555555555555555555555555555555555555555555555555555555555555555555555555555555555555*/
 
 $query = "INSERT INTO students(designationStu,firstNameStu,lastNameStu,fullNameStu,initialNameStu,EmailStu,passwordStu,NICStu,DOBStu,genderStu,civilStatusStu,addressStu,districtStu,contactNoStu,eduLevelStu,softCopy) VALUES ('{$designationStu}','{$firstNameStu}','{$lastNameStu}','{$fullNameStu}','{$initialNameStu}','{$inputEmailStu}','{$hashed_password}','{$inputNICStu}','{$DOBStu}','{$inputGenderStu}','{$inputCStatusStu}','{$inputAddressStu}','{$inputDistrictStu}','{$inputContactNoStu}','{$eduLevel}','{$image}')";
  $result='';     
  $result = mysqli_query($connection,$query); 

        if($result){
            echo "<script type='text/javascript'>alert('Student Added Successfully..');</script>"; 
         //   header("location: ../JobBuddy%20v.2.0/1.1RegStu.php");     
         echo "<script>
         window.setTimeout(function() {
             window.location = '1.1RegStu.php';
           }, 5000);
         </script>"  ;
         exit();  
        }else{
          $errors[] = 'Failed to add New Record';
        }

        

?>