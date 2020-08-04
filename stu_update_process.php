<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php

 $query = "UPDATE students SET designationStu='".$_POST['designationStu']."',
                              firstNameStu='".$_POST['firstNameStu']."',
                              lastNameStu='".$_POST['lastNameStu']."',
                              fullNameStu='". $_POST['fullNameStu']."',
                              initialNameStu='".$_POST['initialNameStu']."',
                              EmailStu='".$_POST['inputEmailStu']."',
                              DOBStu='".$_POST['DOBStu']."',
                              genderStu='".$_POST['inputGenderStu']."',
                              civilStatusStu='".$_POST['inputCStatusStu']."',
                              addressStu='".$_POST['inputAddressStu']."',
                              districtStu='".$_POST['inputDistrictStu']."',
                              contactNoStu='".$_POST['inputContactNoStu']."',
                              eduLevelStu='".$_POST['edu']."',
                              softCopy='".$_POST['dir_initialName']."',
                              WHERE NICStu='".$_POST['inputNICStu']."'";
 mysqli_query($connection,$query);
 //echo "Company Details Upadated Successfully..!";
 $result = mysqli_query($connection,$query); 
 if($result){
    echo "<script type='text/javascript'>alert('Vocational Training Center Details Updated Successfully..');</script>"; 
    
 echo "<script>
 window.setTimeout(function() {
     window.location = 'stu_admin_panel.php';
   }, 500);
 </script>"  ;
 exit();  
}else{
    echo "<script type='text/javascript'>alert('Sorry.Failed to Update.');</script>"; 
    
    echo "<script>
    window.setTimeout(function() {
        window.location = 'stu_admin_panel.php';
      }, 500);
    </script>"  ;
}
?>
  