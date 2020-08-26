<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php
//Update Function


$result = mysqli_query($connection,"SELECT * FROM vtcenters WHERE vtcRegID ='".$_GET['id']."'");
$row= mysqli_fetch_array($result);

?>