<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ශිෂ්‍ය ලියාපදිංචි වීම</title>

    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">

</head>
<body>
  <!--History Manage-->
  <?php     
      include("includes/historyManage.php");
    ?>
<!--Page Body-->
    <img src="Stu Reg.jpg" alt="Student Registration"  width="1550" height="768">
  
    <div class="form-row col-12 col-md-12 col-sm-12" >
    පෝරමය පිරවීම සඳහා උපදෙස්<br>
    1. ලියාපදිංචි කිරීමේ පෝරමය පුරවන විට කරුණාකර ඉංග්‍රීසි භාෂාව භාවිතා කරන්න. </br>
    2. සම්පූර්ණ නම පුරවන විට කරුණාකර ඉංග්රීසි කැපිටල් අකුරු භාවිතා කරන්න. </div>

<!--Student Register Form-->
<section class="container-fluid">
    <section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-md-10">
    <form class="form-container justify-content-center col-12 col-sm-6 col-md-10 " method="post" action="Reg_Student.php" enctype="multipart/form-data">
    <form class="stuReg">
    
<!-------------------------------------Row 01------------------------------------------------>
    <div class="form-row col-12 col-md-12 col-sm-12">
  
<!--Miss/ Mrs/ Mr-->
        <div class="form-group col-md-2"><br>
            <select id="designationStu" class="form-control" name="designationStu">
                <option selected>Mr.</option>
                <option>Mrs.</option>
                <option>Miss.</option>
            </select>
        </div>  
<!--First Name-->
        <div class="form-group col-md-5">
            <label for="firstNameStu">මුල් නම</label>
            <input type="text" class="form-control" name="firstNameStu" placeholder="Prathiba"  required>
        </div>
<!--Last Name-->
        <div class="form-group col-md-5">
            <label for="lastNameStu">වාසගම</label>
            <input type="text" class="form-control" name="lastNameStu" placeholder="Iddamalgoda"  required>
        </div>
    </div>
    
<!-------------------------------------Row 02------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12">
<!--Full Name-->
            <div class="form-group col-md-12">
                <label for="fullNameStu">සම්පූර්ණ නම</label> 
                <input type="text" class="form-control" name="fullNameStu" placeholder="PRATHIBA IDDAMALGODA"  required>
            </div>        
</div>
<!-------------------------------------Row 03------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12">
<!--Name with initials-->
            <div class="form-group col-md-12">
                <label for="initialNameStu">මුලකුරු සහිත නම</label>
                <input type="text" class="form-control" name="initialNameStu" placeholder="P.Iddamalgoda"  required>
            </div>         
</div>    
<!-------------------------------------Row 04------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12">
<!--E mail-->
        <div class="form-group col-md-6">
            <label for="inputEmailStu">විද්යුත් තැපැල් ලිපිනය</label> 
            <input type="email" class="form-control" name="inputEmailStu" placeholder="prathiba@email.com">
        </div>
<!--Password-->
        <div class="form-group col-md-6">
            <label for="inputPasswordStu">මුරපදය</label>
            <input type="password" class="form-control" name="inputPasswordStu" required>
        </div>
</div>
<div class="form-row col-12 col-md-12 col-sm-12">
<a href="https://www.youtube.com/channel/UCzh1By4MZccb8SsgAlvyFSA"> විද්‍යුත් තැපැල් ලිපිනයක් නිර්මාණය කරන්නේ කෙසේද </a>
</div><br>
<!-------------------------------------Row 05------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12">
<!--NIC number-->
        <div class="form-group col-6 col-md-6">
            <label for="inputNICStu">ජාතික හැඳුනුම්පත් අංකය</label>
            <input type="text" class="form-control" name="inputNICStu" placeholder="95******" required> 
        </div>
<!--Date of Birth-->
        <div class="form-group col-md-6">
          <label for="DOBStu">උපන්දිනය</label>
          <input type="date" class="form-control" name="DOBStu" required>
        </div>
</div>
<!-------------------------------------Row 05------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12">
<!--Gender-->
        <div class="form-group col-6 col-md-6">
            <label for="inputGenderStu">ස්ත්‍රී පුරුෂ භාවය (Male-පිරිමි, Female-ගැහැණු)</label>
            <div class="form-group col-md-4">
            <select name="inputGenderStu"  class="form-control">
              <option selected>Male</option>
              <option>Female</option>
            </select>
            </div>
        </div>
<!--Civil Status-->
        <div class="form-group col-6 col-md-6">
            <label for="inputCStatusStu">සිවිල් තත්වය (Maried-විවාහක,Single-අවිවාහක)</label>
            <select name="inputCStatusStu" class="form-control">
              <option selected>Married</option>
              <option>Single</option>
            </select>
          </div>
</div>
<!-------------------------------------Row 06------------------------------------------------>
<!--Address-->
          <div class="form-group col-12 col-md-12 col-sm-12">
            <label for="inputAddressStu">ලිපිනය</label>
              <input type="text" class="form-control" name="inputAddressStu" placeholder="1234, Kandy road, Nittambuwa." required>
          </div>
<!-------------------------------------Row 07------------------------------------------------>      
<!--Password-->               
<div class="form-row col-12 col-md-12 col-sm-12">
          <div class="form-group col-md-6">
            <label for="inputDistrictStu">දිස්ත්‍රික්ක</label>
            <select name="inputDistrictStu" class="form-control"required>
              <option selected>Colombo</option>
              <option>Gampaha</option>
              <option>Kaluthara</option>
              <option>Rathnapura</option>
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
            <label for="inputContactNoStu">ඇමතුම් අංකය</label>
            <input type="text" class="form-control" name="inputContactNoStu" placeholder="+94 7# ## ## ###">
          </div>
</div>
<!-------------------------------------Row 08------------------------------------------------>
<fieldset class="form-group" id="eduLevelStu">
<div class="form-row col-12 col-md-12 col-sm-12">
<legend class="col-form-label col-sm-2 pt-0">අධ්‍යාපන මට්ටම</legend>
<div class="eduLevel">
<!-------------------------------------Row 09------------------------------------------------>
<div class=" form-row col-12 col-md-12 col-sm-12">
<!--Primary-->
          <div class="form-check col-6 col-md-6 col-sm-6">
            <input class="form-check-input" type="radio" name="edu" id="gridRadiosPrimary" value="Primary" >
            <label class="form-check-label" for="gridRadiosPrimary">
              Primary Eduction
            </label>
          </div>
<!--Secondary-->
          <div class="form-check col-6 col-md-6 col-sm-6">
            <input class="form-check-input" type="radio" name="edu" id="gridRadiosSecondary" value="Secondary" >
            <label class="form-check-label" for="gridRadiosSecondary">
              Secondary Education
            </label>
          </div>
</div>
<!-------------------------------------Row 10------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12">
<!--Ordinary-->
            <div class="form-check col-6 col-md-6 col-sm-6">
              <input class="form-check-input" type="radio" name="edu" id="gridRadiosOrdinary" value="Ordinary_Level" >
              <label class="form-check-label" for="gridRadiosOrdinary">
                Ordinary Level
              </label>
            </div>
<!--Advanced-->
            <div class="form-check col-6 col-md-6 col-sm-6">
              <input class="form-check-input" type="radio" name="edu" id="gridRadiosAdvanced" value="Advanced_Level" >
              <label class="form-check-label" for="gridRadiosAdvanced">
                Advanced Level
              </label>
            </div>
</div>
<!-------------------------------------Row 11------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12">
<!--Diploma-->
            <div class="form-check col-6 col-md-6 col-sm-6">
              <input class="form-check-input" type="radio" name="edu" id="gridRadiosDiploma" value="Diploma" >
              <label class="form-check-label" for="gridRadiosDiploma">
                Diploma Level
              </label>
            </div>
<!--Degree-->
            <div class="form-check col-6 col-md-6 col-sm-6">
              <input class="form-check-input" type="radio" name="edu" id="gridRadiosDegree" value="Degree" >
              <label class="form-check-label" for="gridRadiosDegree">
                Degree Level
              </label>
            </div>
</div>
<!-------------------------------------Row 12------------------------------------------------>      
      <div class="form-check col-12 col-md-12 col-sm-12 disabled">
        <input class="form-check-input" type="radio" name="edu" id="gridRadiosNone" value="None" checked>
        <label class="form-check-label" for="gridRadiosNone">
          None
        </label>
      </div>
    </div>
    </div>
  </div>
</fieldset>
<!-------------------------------------Row 13------------------------------------------------>
<div class="form-row col-12 col-md-12 col-sm-12"><label for="inputNICPhoto">ඔබේ ජාතික හැඳුනුම්පත් මෘදුකාංග ගොනුව දෙන්න</label>
<div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" name="id_copy">
        <label class="custom-file-label" for="validatedCustomFile" name="text_id">ගොනුව තෝරන්න...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
</div>
</div>
<!-------------------------------------Row 09- Agreement------------------------------------------------>
<div class="form-group col-12 col-md-12 col-sm-12">
                  <div class="form-check"> <br><br><br>
                    <p> <a href="3sinhalaAboutAll.php"> මම ගිවිසුම් ප්‍රකාශය පරීක්ෂා කළ අතර සියලු නියමයන් සහ කොන්දේසි මම පිළිගනිමි. </a> </p>
                    <div class="form-group col-6 col-md-6 col-sm-6">
                    <input class="form-check-input" type="checkbox" id="gridCheckStu">
                    <label class="form-check-label" for="gridCheck">
                    මම එකඟයි.
                    </label>
                    <div class="form-group col-6 col-md-6 col-sm-6">
                    <input class="form-check-input" type="checkbox" id="gridCheckStu">
                    <label class="form-check-label" for="gridCheck">
                    මම එකඟ නොවෙමි.
                    </label>
                  </div>
                </div>
<!-------------------------------------Row 10------------------------------------------------>               
    <button type="submit" name="register" class="btn btn-primary btn-block">ලියාපදිංචි කිරීම</button> </br></br>
    <a href="Index.php"><button type="button" href class="btn btn-primary btn-block"> ආපසු</button> </a>
    </form><br><br>
    
</form>
<!-- </form>-->
</section>
</section>
</section><br><br><br><br>
  <!-- End of the Student Registration Form-->

<section class="container-fluid ">
<section class="row justify-conte nt-center bg-last">
<section class="col-12 col-sm-6 col-md-10">
  <!--width="1550" height="768"-->

</section>
</section>
</section>
  
  <!--End of the Page Body-->
    <script.src="js/jquery.js"></script>
    <script.src="js/bootstrap.js"></script>  
</body>
</html>
<?php mysqli_close($connection); ?>
