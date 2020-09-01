
<?php require_once('includes/functions.php');?>
<?php session_start();
echo $_SESSION['vtcRegID'];
$vtcRegID=$_SESSION['vtcRegID'];
?>

<?php  
 $connect = mysqli_connect("localhost", "root", "", "jobbuddy");  
 $output = '';  
 
 $sql = "SELECT * FROM 
     coursedetails
WHERE vtcRegID='$vtcRegID'";

//WHERE vtcRegID ='".$_GET['id']."'";


 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Course ID</th>  
                     <th width="20%">Course Name</th>
                     <th width="10%">Duration</th>
                     <th width="20%">Edulevel</th>                     
                     
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM coursedetails LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                <td>'.$row["CourseId"].'</td>
                <td class="CourseName" data_id1="'.$row["CourseId"].'" 
                    contenteditable>'.$row["CourseName"].'</td>              
                <td class="Duration" data_id3="'.$row["CourseId"].'" 
                    contenteditable>'.$row["Duration"].'</td>
                <td class="EduLevel" data_id4="'.$row["CourseId"].'" 
                    contenteditable>'.$row["EduLevel"].'</td>
                
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                 <td id="CourseName" contenteditable></td>
                 
                 <td id="Duration" contenteditable></td>
                 <td id="EduLevel" contenteditable></td>
                 
                
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					 <td colspan="4">Data Not Found</td>
                          <td id="CourseName" contenteditable></td>
                          <td id="Duration" contenteditable></td>
                          <td id="EduLevel" contenteditable></td>
                    </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>