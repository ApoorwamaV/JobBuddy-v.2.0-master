<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php
$query="SELECT districtStu, count(*) as number FROM students GROUP BY districtStu";
$result = mysqli_query($connection,$query);

?>

<h1 style="margin-left:2%;">Students By Districts</h1>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <div id="chart_div" style="width: 900px; height: 600px; align:center;">
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