<?php  
 $connect = mysqli_connect("localhost", "root", "", "jobbuddy");  
 $output = '';  
 $sql = "SELECT * FROM companies ORDER BY ComRegID DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Register No.</th>  
                     <th width="20%">Name of the Company</th>
                     <th width="10%">Email</th>
                     <th width="10%">District</th>
                     <th width="20%">Address</th>
                     <th width="10%">Name of Director</th>
                     <th width="10%">Contact No</th>
                     <th width="10%">Action</th>
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM vtcenters LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                <td>'.$row["ComRegID"].'</td>
                <td class="com_name" data_id1="'.$row["ComRegID"].'" 
                contenteditable>'.$row["comName"].'</td>
                <td class="email" data_id2="'.$row["ComRegID"].'" 
                contenteditable>'.$row["email_COM"].'</td>
                <td class="district" data_id3="'.$row["ComRegID"].'" 
                contenteditable>'.$row["district"].'</td>
                <td class="address" data_id4="'.$row["ComRegID"].'" 
                contenteditable>'.$row["ComAddress"].'</td>
                <td class="dir_fullName" data_id5="'.$row["ComRegID"].'" 
                contenteditable>'.$row["dir_fullName"].'</td>
                <td class="contact_no" data_id6="'.$row["ComRegID"].'" 
                contenteditable>'.$row["contact_No"].'</td>
                <td><button type="button" name="btn_delete"  
                data-id7="'.$row["ComRegID"].'" class="btn btn-xs btn-danger btn_delete">X</button>
                <button type="button" name="btn_update"  
                data-id8="'.$row["ComRegID"].'" class="btn btn-xs btn-primary btn_update">U</button></td>
                  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                 <td id="vtc_name" contenteditable></td>
                 <td id="email" contenteditable></td>
                 <td id="district" contenteditable></td>
                 <td id="address" contenteditable></td>
                 <td id="dir_fullName" contenteditable></td>
                 <td id="contact_no" contenteditable></td>
                 
                
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					 <td colspan="4">Data Not Found</td>
                     <td id="vtc_name" contenteditable></td>
                     <td id="email" contenteditable></td>
                     <td id="district" contenteditable></td>
                     <td id="address" contenteditable></td>
                     <td id="dir_fullName" contenteditable></td>
                     <td id="contact_no" contenteditable></td>
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>