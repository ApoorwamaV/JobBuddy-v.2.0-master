<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <link rel="javascript" href="dashboard.js">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

    
    <!-- Add icon library -->
</head>
<body>
<?php     
    include("includes/printHead.php");
   
    
?>
<br>

<div class="container-print">
<?php     
    include("reports/stu_dis_report.php");
    include("reports/vtc_dis_report.php");
    
?>
</div>

<script src="js\jquery-3.5.1.min.js"></script>
<script src="js\printThis.js"></script>   
<script>
   $('#print').click(function(){
      $('.container-print').printThis();
   })
</script>
</body>
</html>