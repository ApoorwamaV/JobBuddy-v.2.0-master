<?php
 //require_once('includes/connection.php'); 

 $connection = new PDO('mysql:host=localhost;dbname=jobbuddy', 'root', '');

$query = "
SELECT * FROM posts 
WHERE ParentPostID = '0' 
ORDER BY PostID DESC
";

$statement = $connection->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 <div class="panel panel-default">
  <div class="panel-heading">By <b>'.$row["PostAuthor"].'</b> on <i>'.$row["date"].'</i></div>
  <div class="panel-body">'.$row["Post_Content"].'</div>
  <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["PostID"].'">Reply</button></div>
 </div>
 ';
 $output .= get_reply_comment($connection, $row["PostID"]);
}

echo $output;

function get_reply_comment($connection, $ParentPostID = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM posts WHERE ParentPostID = '".$ParentPostID."'
 ";
 $output = '';
 $statement = $connection->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
    <div class="panel-heading">By <b>'.$row["PostAuthor"].'</b> on <i>'.$row["PostDate"].'</i></div>
    <div class="panel-body">'.$row["PostContent"].'</div>
    <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["PostID"].'">Reply</button></div>
   </div>
   ';
   $output .= get_reply_comment($connection, $row["PostID"], $marginleft);
  }
 }
 return $output;
}

?>