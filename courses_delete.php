<?php  
	$connect = mysqli_connect("localhost", "root", "", "jobbuddy");
	$sql = "DELETE FROM coursedetails WHERE CourseId = '".$_POST["id"]."'";  
    //echo $_POST["id"];

	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>