
<?php  
 $connect = mysqli_connect("localhost", "root", "", "jobbuddy");  
 $output = ''; 
 if(!empty($_GET)){
     $a=$_GET['searchDistrictCourse'];
     $b=$_GET['searchEduCourse'];
     $c=$_GET['searchDueCourse'];
    
     //$d=$_GET['searchNVQCourse'];
    
    $sql = "SELECT 
     coursedetails.CourseId,coursedetails.CourseName, 
     coursedetails.vtcRegID, vtcenters.vtcName, vtcenters.district, 
     coursedetails.Duration, coursedetails.EduLevel, coursedetails.NVQ
    FROM 
         coursedetails
    INNER JOIN 
         vtcenters 
    ON
    coursedetails.vtcRegID=vtcenters.vtcRegID WHERE vtcenters.district='$a' OR coursedetails.EduLevel='$b' 
    OR coursedetails.Duration='$c'  " ;
    
    
     $result = mysqli_query($connect, $sql);  
     $output .= '  
          <div class="table-responsive">  
               <table class="table table-bordered">  
                    <tr>  
                         <th width="10%">Course ID</th>  
                         <th width="20%">Course Name</th>
                         <th width="10%">Vocational Training Centre ID</th>
                         <th width="30%">Vocational Training Centre Name</th>
                         <th width="10%">District</th>
                         <th width="10%">Duration</th>
                         <th width="20%">Edulevel</th>                     
                         <th width="20%">Action</th>
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
                   <td class="vtcRegID" data_id2="'.$row["CourseId"].'" 
                        contenteditable>'.$row["vtcRegID"].'</td>
                   <td class="vtcName" data_id6="'.$row["CourseId"].'" 
                        contenteditable>'.$row["vtcName"].'</td>
                   <td class="district" data_id5="'.$row["CourseId"].'" 
                        contenteditable>'.$row["district"].'</td>
                    <td class="Duration" data_id3="'.$row["CourseId"].'" 
                        contenteditable>'.$row["Duration"].'</td>
                    <td class="EduLevel" data_id4="'.$row["CourseId"].'" 
                        contenteditable>'.$row["EduLevel"].'</td>
                    <td>
                        <button type="button" name="btn_delete"  
                             data-id7="'.$row["CourseId"].'" class="btn btn-xs btn-danger btn_delete">Like</button>
                        <button type="button" name="btn_register"  
                             data-id8="'.$row["CourseId"].'" class="btn btn-xs btn-primary btn_register">
                             <a href="Reg_StuCourse.php">Register<a></button></td>
                      
                    </tr>  
               ';  
          }  
          $output .= '  
               <tr>  
                    <td></td>  
                     <td id="CourseName" contenteditable></td>
                     <td id="vtcRegID" contenteditable></td>
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
                              <td id="vtcRegID" contenteditable></td>
                              <td id="Duration" contenteditable></td>
                              <td id="EduLevel" contenteditable></td>
                        </tr>';  
     }  
     $output .= '</table>  
          </div>';  
     echo $output;  } 
else{
$sql = "SELECT 
 coursedetails.CourseId,coursedetails.CourseName, 
 coursedetails.vtcRegID, vtcenters.vtcName, vtcenters.district, 
 coursedetails.Duration, coursedetails.EduLevel, coursedetails.NVQ
FROM 
     coursedetails
INNER JOIN 
     vtcenters 
ON
coursedetails.vtcRegID=vtcenters.vtcRegID";


 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Course ID</th>  
                     <th width="20%">Course Name</th>
                     <th width="10%">Vocational Training Centre ID</th>
                     <th width="30%">Vocational Training Centre Name</th>
                     <th width="10%">District</th>
                     <th width="10%">Duration</th>
                     <th width="20%">Edulevel</th>                     
                     <th width="20%">Action</th>
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
               <td class="vtcRegID" data_id2="'.$row["CourseId"].'" 
                    contenteditable>'.$row["vtcRegID"].'</td>
               <td class="vtcName" data_id6="'.$row["CourseId"].'" 
                    contenteditable>'.$row["vtcName"].'</td>
               <td class="district" data_id5="'.$row["CourseId"].'" 
                    contenteditable>'.$row["district"].'</td>
                <td class="Duration" data_id3="'.$row["CourseId"].'" 
                    contenteditable>'.$row["Duration"].'</td>
                <td class="EduLevel" data_id4="'.$row["CourseId"].'" 
                    contenteditable>'.$row["EduLevel"].'</td>
                <td>
                    <button type="button" name="btn_delete"  
                         data-id7="'.$row["CourseId"].'" class="btn btn-xs btn-danger btn_delete">Like</button>
                    <button type="button" name="btn_register"  
                         data-id8="'.$row["CourseId"].'" class="btn btn-xs btn-primary btn_register">
                         <a href="Reg_StuCourse.php">Register<a></button></td>
                  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                 <td id="CourseName" contenteditable></td>
                 <td id="vtcRegID" contenteditable></td>
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
                          <td id="vtcRegID" contenteditable></td>
                          <td id="Duration" contenteditable></td>
                          <td id="EduLevel" contenteditable></td>
                    </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output; } 
 ?>