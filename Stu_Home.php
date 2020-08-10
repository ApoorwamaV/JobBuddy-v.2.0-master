<?php
   require_once('includes/connection.php');
   require_once('includes/functions.php');
   $output = ''; ?>

<?php session_start();
?>

<?php echo $_SESSION['Stu_NIC'];
$Stu_NIC= $_SESSION['Stu_NIC']; 
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

    $output .= '
    $fullNameStu = $_POST['fullNameStu'];
    $EmailStu = $_POST['EmailStu'];
    $NICStu = $_POST['NICStu'];
    $DOBStu = $_POST['DOBStu'];
    $addressStu = $_POST['addressStu'];
    $districtStu = $_POST['districtStu'];
    $contactNoStu = $_POST['contactNoStu'];
    $eduLevelStu = $_POST['eduLevelStu'];
     ';
  
  $fullNameStu = $_POST['fullNameStu'];
  $EmailStu = $_POST['EmailStu'];
  
  $NICStu = $_POST['NICStu'];
  $DOBStu = $_POST['DOBStu'];
  $addressStu = $_POST['addressStu'];
  $districtStu = $_POST['districtStu'];
  $contactNoStu = $_POST['contactNoStu'];
  $eduLevelStu = $_POST['eduLevelStu'];
  
  } else {
    
  $fullNameStu = $_POST['fullNameStu'];
  $EmailStu = $_POST['EmailStu'];
  
  $NICStu = $_POST['NICStu'];
  $DOBStu = $_POST['DOBStu'];
  $addressStu = $_POST['addressStu'];
  $districtStu = $_POST['districtStu'];
  $contactNoStu = $_POST['contactNoStu'];
  $eduLevelStu = $_POST['eduLevelStu'];
  }

  ?>