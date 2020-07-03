<?php 
 
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $dbname = 'jobbuddy';

 $connection = mysqli_connect('localhost','root','','jobbuddy');

 //Checking the Connection

 if(mysqli_connect_errno()){
     die('Database connection Failed'. mysqli_connect_error());
 } else{
     echo "Connection success";    
 }


?>