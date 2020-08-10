<?php
   require_once('includes/connection.php');
   require_once('includes/functions.php');
   $output = ''; ?>

<?php session_start();
?>

<?php echo $_SESSION['Stu_NIC'];
$Stu_NIC= $_SESSION['Stu_NIC']; 


echo $Stu_NIC;
$sql="select * from students where NICStu='$Stu_NIC'";
$result=mysqli_query($connection,$sql);
$result1=$result->fetch_object();
$fullNameStu=$result1->fullNameStu;
$EmailStu=$result1->EmailStu;
$contactNoStu=$result1->contactNoStu;
$eduLevelStu=$result1->eduLevelStu;
$addressStu=$result1->addressStu;
$districtStu=$result1->districtStu;
$DOBStu=$result1->DOBStu;
isset($_POST['Stu_NIC'])?>

<?php
if(isset($_POST['Stu_NIC'])){
$sql = "SELECT students.fullNameStu, 
students.EmailStu, 
students.NICStu, 
students.DOBStu, 
students.addressStu, 
students.districtStu, 
students.contactNoStu, students.eduLevelStu FROM students WHERE NICStu LIKE '".$Stu_NIC."' ";  
$result = mysqli_query($connection, $sql);  
$rows = mysql_fetch_array($result);

 if($rows > 0)  
 { 


  ?>