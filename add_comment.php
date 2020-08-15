<?php

//require_once('includes/connection.php'); 
$connection = new PDO('mysql:host=localhost;dbname=jobbuddy', 'root', '');


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
 (ParentPostID, Post_Content, PostAuthor,PostCategoryId) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name,:PostCategoryId)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["PostID"],
   ':comment'    => $Post_Content,
   ':comment_sender_name' => $PostAuthor,
   ':PostCategoryId'=>$PostCategoryId,
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>
