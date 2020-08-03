<?php require_once('includes/connection.php'); 
$sql = "SELECT * FROM coursedetails  ";  
$result = mysqli_query($connection, $sql);  
$result = mysqli_query($connection, $sql); 
$output .= '
<table class="table table-bordered">  
      <tr>  
           <th width="10%">Course ID</th>  
           <th width="20%">Course Name</th>
           <th width="10%">Center Name</th>
           <th width="10%">Duration</th>
           <th width="20%">Educational Qualification</th>
           <th width="10%">NVQ Level</th>                     
      </tr>';

$rows = mysqli_num_rows($result);
     if($rows > 0)  
     {  
          if($rows > 10)
          {
               $delete_records = $rows - 10;
               $delete_sql = "DELETE FROM companies LIMIT $delete_records";
               mysqli_query($connection, $delete_sql);
          }
          while($row = mysqli_fetch_array($result))  
          {  
          $output .= '  
          <tr>
          <td><?php echo $rows['CourseId']; ?></td>
          <td><?php echo $rows['CourseName']; ?></td>
          <td><?php echo $rows['vtcRegID']; ?></td>
          <td><?php echo $rows['Duration']; ?></td>
          <td><?php echo $rows['EduLevel']; ?></td>
          <td><?php echo $rows['NVQ']; ?></td>
      </tr>';}
?>