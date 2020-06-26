<?php  
	$connect = mysqli_connect("localhost", "root", "", "jobbuddy");
	$sql = "DELETE FROM vtcenters WHERE vtcRegID = '".$_POST["id"]."'";  
    echo $_POST["id"];

	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>