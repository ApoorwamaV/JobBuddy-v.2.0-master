<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>


<?php 
 $hashed_password='';

 //Upload Image attributes
$target = 'uploads/vtc_files/'.basename($_FILES['vtc_certificate']['name']);

$image = $_FILES['vtc_certificate']['name'];
//$text= $_POST['text_id'];
$tmp_name = $_FILES['vtc_certificate']['tmp_name'];


 $vtcName = $_POST['vtcName'];
 $vtcRegID = $_POST['vtcRegID'];
 $district =$_POST['district'];
 $contact_No = $_POST['contact_No'];
 $email_VTC = $_POST['email_VTC'];
 $vtcAddress = $_POST['vtcAddress'];
 $dir_Designation =$_POST['dir_Designation'];
 $inputPasswordVtc = $_POST['inputPasswordVtc'];
 $dir_firstName = $_POST['dir_firstName'];
 $dir_lastName = $_POST['dir_lastName'];
 $dir_fullName = $_POST['dir_fullName'];
 $dir_initialName = $_POST['dir_initialName'];
 $dir_NIC = $_POST['dir_NIC'];
 
 $hashed_password= sha1($inputPasswordVtc);

//file upload
if(move_uploaded_file($tmp_name,$target)){
    echo "uploaded succesfully";
}else{
    echo "not uploaded";
}

 $query = "INSERT INTO vtcenters(vtcName,vtcRegID,district,contact_No,vtc_Email,vtcAddress,dir_Designation,passwordVtc,dir_firstName,dir_lastName,dir_fullName,dir_initialName,dir_NIC,certificete) VALUES ('{$vtcName}','{$vtcRegID}','{$district}','{$contact_No}','{$email_VTC}','{$vtcAddress}','{$dir_Designation}','{$hashed_password}','{$dir_firstName}','{$dir_lastName}','{$dir_fullName}','{$dir_initialName}','{$dir_NIC}','{$image}')";
       
  $result = mysqli_query($connection,$query); 

        if($result){
            echo "<script type='text/javascript'>alert('Training Center Details Added Successfully..');</script>"; 
         //   header("location: ../JobBuddy%20v.2.0/1.1RegStu.php");     
         echo "<script>
         window.setTimeout(function() {
             window.location = '1.1RegVocationalCentre.php';
           }, 5000);
         </script>"  ;
         exit();  
        }else{
          $errors[] = 'Failed to add New Record';
        }

?>