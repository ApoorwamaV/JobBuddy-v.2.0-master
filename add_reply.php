<?php
echo "HI";
//require_once('includes/connection.php'); 
$connect = new PDO('mysql:host=localhost;dbname=jobbuddy', 'root', '');


$ParentPostID = $_POST['PostID'];
 $Post_Content = $_POST['Post_Content'];
 $PostAuthor =$_POST['PostAuthor'];


$error = '';
$PostAuthor = '';
$Post_Content = '';
//data validation-------------------------------------------------------------------------------

if(empty($_POST["PostAuthor"]))
{
 $error .= '<p class="text-danger">Name is required</p>';
}
else
{
 $PostAuthor = $_POST["PostAuthor"];
}

if(empty($_POST["Post_Content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $Post_Content = $_POST["Post_Content"];
}
//---------------------------------end of validation-----------------------------------------------------
if($error == '')
{ 
 $query = "INSERT INTO posts
 (ParentPostID, Post_Content, PostAuthor) 
 VALUES ('{$ParentPostID}', '{$Post_Content}', '{$PostAuthor}')";

 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   '$ParentPostID' => $ParentPostID,
   '$Post_Content'    => $Post_Content,
   '$PostAuthor' => $PostAuthor
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>
