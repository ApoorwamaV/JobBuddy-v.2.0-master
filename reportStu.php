<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    
    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
</head>
<body>
<br>
<button id="print" class="btn btn-primary btn-block" style="width:10%; margin-left:1%;">Print</button>
<div class="container-print">
<?php     
    include("reports/stu_dis_report.php");
   
    
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





