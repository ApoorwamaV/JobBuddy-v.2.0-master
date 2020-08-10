<?php
require_once('includes/connection.php');
require_once('includes/function.php');
$column=array("coursedetails.CourseId","coursedetails.CourseName", 
"coursedetails.vtcRegID", "vtcenters.vtcName", "vtcenters.district", 
"coursedetails.Duration", "coursedetails.EduLevel", "coursedetails.NVQ");
$sql = "SELECT 
    coursedetails.CourseId,coursedetails.CourseName, 
    coursedetails.vtcRegID, vtcenters.vtcName, vtcenters.district, 
    coursedetails.Duration, coursedetails.EduLevel, coursedetails.NVQ
   FROM 
        coursedetails
   INNER JOIN 
        vtcenters 
   ON
   coursedetails.vtcRegID=vtcenters.vtcRegID ORDER BY coursedetails.CourseId DESC";
$sql.="WHERE";  
if(isset($_POST["is_District"])){
    $query.="coursedetails.vtcenters="'".$_POST["is_District"]."'AND;
}
if(isset($_POST["search"]["value"])){

    $sql.='(coursedetails.CourseId LIKE "%'.$_POST["search"]["value"].'%" ';
    $sql.='OR coursedetails.CourseName LIKE "%'.$_POST["search"]["value"].'%" ';
    $sql.='OR coursedetails.vtcRegID LIKE "%'.$_POST["search"]["value"].'%" ';
    $sql.='OR vtcenters.vtcName LIKE "%'.$_POST["search"]["value"].'%" ';
    $sql.='OR vtcenters.district LIKE "%'.$_POST["search"]["value"].'%" ';
    $sql.='OR coursedetails.Duration LIKE "%'.$_POST["search"]["value"].'%" ';
    $sql.='OR coursedetails.EduLevel LIKE "%'.$_POST["search"]["value"].'%" ';
    $sql.='OR coursedetails.NVQ LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"])){
    $query.='ORDER BY'.$column[$_POST['order']['0']['column']].' '
            .$_POST['order']['0']['column'].' ';
}else{
    $query.='ORDER BY coursedetails.CourseId DESC';
}
/*This query is for fetch limit data*/
$query1='';

if($_POST["length"]!= =1){
    $query1.='LIMIT'.$_POST['start'].','.$_POST['length'];
}

$number_filter_row=mysqli_num_rows(mysqli_query($connection, $query));

$result = mysqli_query($connection,$query.$query1);

$data=array();

while($row=mysqli_fetch_array($result)){
    $sub_array=array();
    $sub_array[]=$row["CourseId"];
    $sub_array[]=$row["CourseName"];
    $sub_array[]=$row["vtcRegID"];
    $sub_array[]=$row["vtcName"];
    $sub_array[]=$row["district"];
    $sub_array[]=$row["Duration"];
    $sub_array[]=$row["EduLevel"];
    $sub_array[]=$row["NVQ"];
    $data[]=$sub_array;
}

/*Get total number of rows*/
function get_all_data($connection){
    $query="SELECT * FROM coursedetails";
    $result= mysqli_query($connection, $query);
    return mysqli_num_rows($result);
}

$output=array(
    "draw"              => intval($_POST["draw"]),
    "recordsTotal"      => get_all_data($connection),
    "recordsFiltered"   => $number_filter_row,
    "data"              => $data
);

echo json_encode($output);

?>