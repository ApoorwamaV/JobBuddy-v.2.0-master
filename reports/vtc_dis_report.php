<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php

$query_dis_vtc ="SELECT district, count(*) as number FROM vtcenters GROUP BY district";
$result_dis_vtc = mysqli_query($connection,$query_dis_vtc);

?>

<h1 style="margin-left:2%;">Vocational Training Centers By Districts</h1>
<div id="chart_div_vtc_dis" style="width: 900px; height: 600px; align:center;">
  </div>

<script>
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data_vtc_dis = google.visualization.arrayToDataTable([
         ['District','Number'],
         <?php
         while($row_dis = mysqli_fetch_array($result_dis_vtc))
         {
             echo  "['".$row_dis["district"]."',".$row_dis["number"]."],"; 
         }
         ?>
        ]);

        var options_dis_vtc = {
          title: 'Vocational Training Centers By Districts'
        };

        var chart_vtc_dis = new google.visualization.PieChart(document.getElementById('chart_div_vtc_dis'));

        chart_vtc_dis.draw(data_vtc_dis, options_dis_vtc);
      }
</script>