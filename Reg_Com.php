<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>


<?php 
 $hashed_password='';

 //Upload Image attributes
$target = 'uploads/com_files/'.basename($_FILES['com_certificate']['name']);

$image = $_FILES['com_certificate']['name'];
//$text= $_POST['text_id'];
$tmp_name = $_FILES['com_certificate']['tmp_name'];


 $comName = $_POST['comName'];
 $ComRegID = $_POST['ComRegID'];
 $district =$_POST['district'];
 $contact_No = $_POST['contact_No'];
 $email_COM = $_POST['email_COM'];
 $ComAddress = $_POST['ComAddress'];
 $dir_Designation =$_POST['dir_Designation'];
 $inputPasswordCom = $_POST['inputPasswordCom'];
 $dir_firstName = $_POST['dir_firstName'];
 $dir_lastName = $_POST['dir_lastName'];
 $dir_fullName = $_POST['dir_fullName'];
 $dir_initialName = $_POST['dir_initialName'];
 $dir_NIC = $_POST['dir_NIC'];
 
 $hashed_password= sha1($inputPasswordCom);

//file upload
if(move_uploaded_file($tmp_name,$target)){
    echo "uploaded succesfully";
}else{
    echo "not uploaded";
}

$query = "INSERT INTO companies(comName,ComRegID,district,contact_No,email_COM,ComAddress,dir_Designation,passwordCom,dir_firstName,dir_lastName,dir_fullName,dir_initialName,dir_NIC,certificete) VALUES ('{$comName}','{$ComRegID}','{$district}','{$contact_No}','{$email_COM}','{$ComAddress}','{$dir_Designation}','{$hashed_password}','{$dir_firstName}','{$dir_lastName}','{$dir_fullName}','{$dir_initialName}','{$dir_NIC}','{$image}')";
       
  $result = mysqli_query($connection,$query); 

        if($result){
            echo "<script type='text/javascript'>alert('Comapany Details Added Successfully..');</script>"; 
         //   header("location: ../JobBuddy%20v.2.0/1.1RegStu.php");     
         echo "<script>
         window.setTimeout(function() {
             window.location = '1.1RegCompany.php';
           }, 5000);
         </script>"  ;
         exit();  
        }else{
          $errors[] = 'Failed to add New Record';
        }



?>