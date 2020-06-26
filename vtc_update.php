<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php
//Update Function


$result = mysqli_query($connection,"SELECT * FROM vtcenters WHERE vtcRegID ='".$_GET['id']."'");
$row= mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocational Training Centre Register</title>

    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">

</head>
<body>
<!--Page Body-->
    <!--<img src="Stu Reg.jpg" alt="Student Registration"  width="1550" height="768">-->
  
<!--VTC Register Form-->
<section class="container-fluid">
    <section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-md-10">
    <form class="form-container justify-content-center col-12 col-sm-6 col-md-10 "  method="post" action="vtc_update_process.php" enctype="multipart/form-data">
    <form class="stuReg">
<!-------------------------------------Row 01------------------------------------------------>
<!--Centre Name-->
    <div class="form-group col-12 col-md-12 col-sm-12">
      <label for="vtcName">Vocational Training Centre</label>
      <input type="text" class="form-control" name="vtcName" id="vtcName" placeholder="Vocational Training Centre - Gampaha" value="<?php echo $row['vtcName']; ?>"  required>
    </div>
<!-------------------------------------Row 02------------------------------------------------>
<!--Centre ID-->
    <div class="form-group col-12 col-md-12 col-sm-12">
      <label for="vtcRegID">Registered Number</label>
      <input type="text" class="form-control" name="vtcRegID" id="vtcRegID" placeholder="1111-222-555-888" value="<?php echo $row['vtcRegID']; ?>"  required>
    </div>
<!--Centre District-->

<div class="form-row col-md-12">
  <div class="form-group col-md-6">
    <label for="inputDistrict">District</label>
    <select id="inputDistrict" name="district" class="form-control"required>
      <option selected><?php echo $row['district']; ?></option>
      <option>Colombo</option>
      <option>Gampaha</option>
      <option>Kaluthara</option>
      <option>Rathnapur</option>
      <option>Kegalle</option>
      <option>Anuradhapura</option>
      <option>Polonnaruwa</option>
      <option>Galle</option>
      <option>Matara</option>
      <option>Hambanthota</option>
      <option>Matale</option>
    </select>
  </div>
  <div class="form-group col-md-6">
    <label for="inputContactNo">Contact No</label>
    <input type="text" class="form-control" id="inputContactNo" name="contact_No" value="<?php echo $row['contact_No']; ?>"  placeholder="+94 7# ## ## ###">
  </div>
</div>
<!-------------------------------------Row 06------------------------------------------------>
<!--Address-->
<div class="form-group">
            <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" name="vtcAddress" placeholder="1234, Kandy road, Nittambuwa." value="<?php echo $row['vtcAddress']; ?>"  required>
          </div>
<h4 align="center">Details of Director</h4>
<!-------------------------------------Row 03------------------------------------------------>
<!--Director Details-->
    <div class="form-row col-12 col-md-12 col-sm-12">
<!--Miss/ Mrs/ Mr-->
        <div class="form-group col-md-2"><br>
            <select id="StatusVtc" name="dir_Designation"  class="form-control">
                <option selected><?php echo $row['dir_Designation']; ?></option>
                <option>Mr.</option>
                <option>Mrs.</option>
                <option>Miss.</option>
            </select>
        </div>  
<!--First Name-->
        <div class="form-group col-md-5">
            <label for="firstNameVtc">First Name</label>
            <input type="text" class="form-control" id="firstNameVtc" name="dir_firstName" placeholder="Prathiba" value="<?php echo $row['dir_firstName']; ?>" required>
        </div>
<!--Last Name-->
        <div class="form-group col-md-5">
            <label for="lastNameVtc">Last Name</label>
            <input type="text" class="form-control" id="lastNameVtc" name="dir_lastName" placeholder="Iddamalgoda" value="<?php echo $row['dir_lastName']; ?>" required>
        </div>
    </div>
<!-------------------------------------Row 02------------------------------------------------>
<div class="form-row col-md-12">
<!--Full Name-->
            <div class="form-group col-md-12">
                <label for="fullNameVtc">Full Name</label>
                <input type="text" class="form-control" id="fullNameVtc" name="dir_fullName" placeholder="PRATHIBA IDDAMALGODA" value="<?php echo $row['dir_fullName']; ?>" required>
            </div>        
</div>
<!-------------------------------------Row 03------------------------------------------------>
<div class="form-row col-md-12">
<!--Name with initials-->
            <div class="form-group col-md-12">
                <label for="initialNameVtc">Name with initials</label>
                <input type="text" class="form-control" id="initialNameVtc" name="dir_initialName" placeholder="P.Iddamalgoda" value="<?php echo $row['dir_initialName']; ?>" required>
            </div>         
</div>  
<!-------------------------------------Row 05------------------------------------------------>
<div class="form-row col-md-12">
<!--NIC number-->
        <div class="form-group col-6 col-md-6">
            <label for="NICVtc">NIC number</label>
            <input type="text" class="form-control" id="NICVtc" name="dir_NIC" placeholder="95******" value="<?php echo $row['dir_NIC']; ?>" required> 
        </div>

</div>  
<!-------------------------------------Row 04------------------------------------------------>
<h4 align="center">Please Input E-mail & Password to Register</h4><br>
<div class="form-row col-md-12">

<!--E mail-->
        <div class="form-group col-md-6">
            <label for="EmailVtc">Email</label>
            <input type="email" class="form-control" id="EmailVtc" name="email_VTC" value="<?php echo $row['vtc_Email']; ?>" placeholder="prathiba@email.com">
        </div>
<!--Password-->
        
</div>



<!-------------------------------------Row 08------------------------------------------------>
<fieldset class="form-group " id="eduLevel">
<div class="row">
<div class="eduLevel">
<!-------------------------------------Row 09------------------------------------------------>
<div class=" row col-md-12"><!--

<-----------------------------------Row 10------------------------------------------------>

<!-------------------------------------Row 11------------------------------------------------>
<div class="form-row col-md-12">

</div>
<!-------------------------------------Row 12------------------------------------------------>      
    
</fieldset>

<!-------------------------------------Row 13------------------------------------------------>
<label for="inputNICPhoto">Drop Your Certification as a Vocational Training Center</label>
<div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" name="vtc_certificate" value="<?php echo $row['certificete']; ?>" required>
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
</div>
<!-------------------------------------Row 09------------------------------------------------>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
<!-------------------------------------Row 10------------------------------------------------>               
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
<!-- </form>-->
</section>
</section>
</section><br><br><br><br>
  <!-- End of the Student Registration Form-->


  <!--End of the Page Body-->
    <script.src="js/jquery.js"></script>
    <script.src="js/bootstrap.js"></script>  
</body>
</html>

