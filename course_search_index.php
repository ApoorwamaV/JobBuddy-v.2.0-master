<?php require_once('includes/connection.php'); 
    $sql = "SELECT 
    coursedetails.CourseId,coursedetails.CourseName, 
    coursedetails.vtcRegID, vtcenters.vtcName, vtcenters.district, 
    coursedetails.Duration, coursedetails.EduLevel, coursedetails.NVQ
   FROM 
        coursedetails
   INNER JOIN 
        vtcenters 
   ON
   coursedetails.vtcRegID=vtcenters.vtcRegID ORDER BY coursedetails.CourseId DESC";
   
    $result = mysqli_query($connection, $sql);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">

    <!--Calling libraries for data sorting-->
    <script src="https://ajax.googleapis.com/ajax/
                    libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/
                    bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://cdn.datatables.net/1.10.12/js/
                    jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/
                    dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/
                    dataTables.bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/
                    bootstrap.min.js"></script>
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    <div class="container">
        <h1 align="center">Search Course Details</h1> <br><br><br><br>

        <div class="table-responsive">
            <table id="product_data" class="table table-bordered table-striped">
                <thead>
                     <th width="15%">Course ID</th>  
                     <th width="20%">Course Name</th>
                     <th width="10%">Vocational Training Centre ID</th>
                     <th width="30%">Vocational Training Centre Name</th>
                     <th width="40%">
                        <select name="District" id="District" class="form-control">
                            <option value="">
                                District
                            </option>
                            <?php
                            while($row = mysqli_fetch_array($result)){
                                echo'<option value="'.$row["CourseId"].'">'.$row["District"].'</option>';
                            }?>
                        </select>District</th>
                     <th width="10%">
                     <!--<select name="Duration" id="Duration" class="form-control">
                            <option value="">
                            Duration
                            </option>
                            <?php
                            while($row = mysqli_fetch_array($result)){
                                echo'<option value="'.$row["CourseId"].'">'.$row["Duration"].'</option>';
                            }?>
                        </select>--></th>Duration</th>
                     <th width="20%">Edulevel</th> 
                     <th width="10%">Select</th> 
                     <th width="10%">Like</th>  
                </thead>
            </table>

        </div>
    </div>
</body>
</html>
<!--To activate the data table-->
<script type="text/javascript" language="javascript">
$(document).ready(function(){

    load_data();

    function load_data(is_District){ /* is_category*/ 
        var dataTable = $('#product_data').DataTable({
            "processing":true,
            "serverSide":true,
            "order":[],
            "ajax":{
                url:"fetch.php",
                type:"POST",
                data:{is_District:is_District} /* is_category*/ 
            },
            "columnDefs":[
                {
                    "targets":[2],
                    "oderable":false,
                },
            ],
        });
    }

$(document).on('change', '#district', function(){
    var district = $(this).val();
    $('#product_data').DataTable().destroy();
    if(district != ''){
        load_data(district);

    }else{
        load_data();
    }
});

});
</script>