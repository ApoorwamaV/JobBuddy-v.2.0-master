<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php
 $query = "UPDATE students SET NICStu='".$_POST['NICStu']."',comName='".$_POST['comName']."',district='".$_POST['district']."',contact_No='".$_POST['contact_No']."',email_COM='".$_POST['email_COM']."',dir_Designation='".$_POST['dir_Designation']."',ComAddress='".$_POST['ComAddress']."',dir_firstName='".$_POST['dir_firstName']."',dir_lastName='".$_POST['dir_lastName']."',dir_fullName='".$_POST['dir_fullName']."',dir_initialName='".$_POST['dir_initialName']."',dir_NIC='".$_POST['dir_NIC']."' WHERE ComRegID='".$_POST['ComRegID']."'";
 mysqli_query($connection,$query);
 //echo "Company Details Upadated Successfully..!";
 $result = mysqli_query($connection,$query); 
 if($result){
    echo "<script type='text/javascript'>alert('Vocational Training Center Details Updated Successfully..');</script>"; 
    
 echo "<script>
 window.setTimeout(function() {
     window.location = 'vtc_admin_panel.php';
   }, 500);
 </script>"  ;
 exit();  
}else{
    echo "<script type='text/javascript'>alert('Sorry.Failed to Update.');</script>"; 
    
    echo "<script>
    window.setTimeout(function() {
        window.location = 'com_admin_panel.php';
      }, 500);
    </script>"  ;
}

?>