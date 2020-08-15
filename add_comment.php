<?php

//require_once('includes/connection.php'); 
$connect = new PDO('mysql:host=localhost;dbname=jobbuddy', 'root', '');


$error = '';
$PostAuthor = '';
$Post_Content = '';

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

if($error == '')
{
 $query = "
 INSERT INTO posts 
 (ParentPostID, Post_Content, PostAuthor) 
 VALUES (:ParentPostID, :Post_Content, :PostAuthor)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':ParentPostID' => $_POST["ParentPostID"],
   ':Post_Content'    => $comment_content,
   ':PostAuthor' => $comment_name
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>