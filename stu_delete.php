<?php  
	$connect = mysqli_connect("localhost", "root", "", "jobbuddy");
	$sql = "DELETE FROM students WHERE NICStu = '".$_POST["id"]."'";  
    //echo $_POST["id"];

	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>