<?php  
 $connect = mysqli_connect("localhost", "root", "", "jobbuddy");  
 $output = '';  
 $sql = "SELECT * FROM students ORDER BY NICStu DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">NIC</th>  
                     <th width="20%">Full Name</th>
                     <th width="10%">Email</th>
                     <th width="10%">Gender</th>
                     <th width="20%">Address</th>
                     <th width="10%">District</th>
                     <th width="10%">Contact No</th>
                     <th width="10%">Education Level</th>
                     <th width="10%">Action</th>
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM students LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                <td>'.$row["NICStu"].'</td>
                <td class="first_name" data_id1="'.$row["NICStu"].'" 
                contenteditable>'.$row["fullNameStu"].'</td>
                <td class="email" data_id2="'.$row["NICStu"].'" 
                contenteditable>'.$row["EmailStu"].'</td>
                <td class="gender" data_id3="'.$row["NICStu"].'" 
                contenteditable>'.$row["genderStu"].'</td>
                <td class="address" data_id4="'.$row["NICStu"].'" 
                contenteditable>'.$row["addressStu"].'</td>
                <td class="district" data_id5="'.$row["NICStu"].'" 
                contenteditable>'.$row["districtStu"].'</td>
                <td class="contact_no" data_id6="'.$row["NICStu"].'" 
                contenteditable>'.$row["contactNoStu"].'</td>
                <td class="edu_level" data_id7="'.$row["NICStu"].'" 
                contenteditable>'.$row["eduLevelStu"].'</td>
                <td><button type="button" name="btn_delete" 
                data-id8="'.$row["NICStu"].'" class="btn btn-xs btn-danger btn_delete">X</button>
                <button type="button" name="btn_update" 
                data-id9="'.$row["NICStu"].'" class="btn btn-xs btn-primary btn_update">U</button></td>
                  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                 <td id="first_name" contenteditable></td>
                 <td id="email" contenteditable></td>
                 <td id="gender" contenteditable></td>
                 <td id="address" contenteditable></td>
                 <td id="district" contenteditable></td>
                 <td id="contact_no" contenteditable></td>
                 <td id="edu_level" contenteditable></td>
                 </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
				 <td colspan="4">Data Not Found</td>
                     <td id="first_name" contenteditable></td>  
                     <td id="email" contenteditable></td>
                     <td id="gender" contenteditable></td>
                     <td id="address" contenteditable></td>
                     <td id="district" contenteditable></td>
                     <td id="contact_no" contenteditable></td>
                     <td id="edu_level" contenteditable></td>  
	                 
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>