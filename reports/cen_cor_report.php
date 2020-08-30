<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>


<?php

$query_cen_cor ="SELECT vtcRegID, count(*) as number FROM vtcenters GROUP BY vtcRegID";
$result_cen_cor = mysqli_query($connection,$query_cen_cor);

// getting vtc name


?>

<h1 style="margin-left:2%;">Number of Courses By Vocational Training Centers</h1>
<div id="chart_cen_cor" style="width: 900px; height: 600px; align:center;">
  </div>


  <script>
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data_cen_cor = google.visualization.arrayToDataTable([
         ['VT Center','Number'],
         <?php
         while($row_cor = mysqli_fetch_array($result_cen_cor))
         {
             echo  "['".$row_cor["vtcRegID"]."',".$row_cor["number"]."],"; 
         }
         ?>
        ]);

        var options_cen_cor = {
          title: 'Number of Courses By Vocational Training Centers'
        };

        var chart_cen_cor = new google.visualization.BarChart(document.getElementById('chart_cen_cor'));

        chart_cen_cor.draw(data_cen_cor, options_cen_cor);
      }
</script>