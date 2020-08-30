<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php
$query="SELECT districtStu, count(*) as number FROM students GROUP BY districtStu";
$result = mysqli_query($connection,$query);

?>
<!-- Add social media icons -->
<div >
        <hr>        
                <section class="row justify-content-center">
                    <section class="col-12 col-sm-12 col-md-12 bg-dark"> 
                        <div class="form-col col-4 col-md-4 col-sm-4 justify-content-start bg-dark"> 
                        <h2 style="color:white; font-size: 16px;"> <Strong>  Details  </Strong> </h2>                            
                            <hr><a href="VocationalTrainingCentres.php" style="color:white; font-family:Times New Roman; font-size: 16px;"><img src="Images/teacher.png" alt="Location" width="30" height="30"></n></n>Vocational Training Centres </a></hr>
                            <hr><a href="VocationalTrainingCourses.php" style="color:white; font-family:Times New Roman; font-size: 16px;"><img src="Images/school.png" alt="Location" width="30" height="30"></n></n>Vocational Courses</a></hr>
                            <hr><a href="Companies.php" style="color:white; font-family:Times New Roman; font-size: 16px;"><img src="Images/company.png" alt="Location" width="30" height="30"></n></n>Organizations</a></hr>
                            <hr><a href="QuestionsandAnswers.php" style="color:white; font-family:Times New Roman; font-size: 16px;"><img src="Images/seo-and-web.png" alt="Location" width="30" height="30"></n></n>Questions and Answers</a></hr><br><br>                                                        
                        </div>

                        <div class="form-col col-4 col-md-4 col-sm-4 justify-content-start bg-dark"> 
                        <h2 style="color:white; font-size: 16px;"> <Strong>  Register As A  </Strong> </h2>                            
                            <hr><a href="./1.1RegStu.php" style="color:white; font-family:Times New Roman; font-size: 16px;"><img src="Images/student.png" alt="Location" width="30" height="30"></n></n>Student</a></hr>
                            <hr><a href="./1.1RegVocationalCentre.php" style="color:white; font-family:Times New Roman; font-size: 16px;"><img src="Images/teacher.png" alt="Location" width="30" height="30"></n></n>Vocational Training Centre</a></hr>
                            <hr><a href="./1.1RegCompany.php" style="color:white; font-family:Times New Roman; font-size: 16px;"><img src="Images/company.png" alt="Location" width="30" height="30"></n></n>Organization</a></hr> 
                            <hr><a href="#" style="color:white; font-family:Times New Roman; font-size: 16px;"></a></hr>                                                        
                        </div>
                    
                        <div class="form-col col-4 col-md-4 col-sm-4 justify-content-start bg-dark"> 
                        <h2 style="color:white; font-size: 16px;"> <Strong>  LogIn As A  </Strong> </h2>                            
                            <hr><a href="./2.1StuLogIn.php" style="color:white; font-family:Times New Roman; font-size: 16px;"><img src="Images/student.png" alt="Location" width="30" height="30"></n></n>Student</a></hr>
                            <hr><a href="./2.2VTCLogIn.php" style="color:white; font-family:Times New Roman; font-size: 16px;"><img src="Images/teacher.png" alt="Location" width="30" height="30"></n></n>Vocational Training Centre</a></hr>
                            <hr><a href="./2.3CompanyLogIn.php" style="color:white; font-family:Times New Roman; font-size: 16px;"><img src="Images/company.png" alt="Location" width="30" height="30"></n></n>Organization</a></hr>   
                            <hr><a href="#" style="color:white; font-family:Times New Roman; font-size: 16px;"></a></hr>                                                       
                        </div>
                    </section>
                </section>
    </div>
<h1 style="margin-left:2%;">Students By Districts</h1>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <div id="chart_div" style="width: 900px; height: 600px; align:center;">
  </div>

<!-- Copy Rights -->
<div class="col-12 col-sm-12 col-md-12 bg-light" style="color:black; font-size: 16px;" >
    <br><br>
        <div class="col-md-3">            
            <p class="pull-left">&copy; 2020 JOBBuddy All Rights Reserved.</p>            
        </div>
        
        <div class="col-md-3">            
            <p class="pull-right">Apoorwama Illanganthilake</a></p>            
        </div>

        <div class="col-md-6">            
            <p class="pull-right">Department of Industrial Management,University of Kelaniya, Sri Lanka</p>            
        </div>

    </div>

  
  <script>
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
         ['District','Number'],
         <?php
         while($row = mysqli_fetch_array($result))
         {
             echo  "['".$row["districtStu"]."',".$row["number"]."],"; 
         }
         ?>
        ]);

        var options = {
          title: 'Students By Districts'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
</script>