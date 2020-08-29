<?php
 //require_once('includes/connection.php'); 
//echo "fetch";
 $connect = new PDO('mysql:host=localhost;dbname=jobbuddy', 'root', '');
//Get all comments
 $query = "SELECT * FROM posts 
 WHERE ParentPostID = '0' 
 ORDER BY PostID DESC
 ";
 
 $statement = $connect->prepare($query);
 
 $statement->execute();
 
 $result = $statement->fetchAll();
 $output = '';
 foreach($result as $row)
 {
  $output .= '
  <div class="panel panel-default">
                <div class="panel-heading">By <b>'.$row["PostAuthor"].'</b> on <i>'.$row["PostDate"].'</i></div>
                <div class="panel-body">'.$row["Post_Content"].'</div>
                
                <div class="panel-footer" align="right">
                    <form method="POST" id="reply_form" >
                        <div class="form-group" >
                            <input type="text" name="PostAuthor" id="PostAuthor" class="form-control" placeholder="Enter Name" />
                        </div>

                        <div class="form-group">
                            <textarea name="Post_Content" id="Post_Content" class="form-control" placeholder="Enter Comment" rows="1"></textarea>
                        </div>

                        <input type="hidden" name="PostID" id="PostID" value="'.$row["PostID"].'" />
                        <input type="submit" name="submit" id="'.$row["PostID"].'" class="btn btn-info" value="Reply" />

                        <button type="button" class="btn btn-default reply" id="'.$row["PostID"].'">Reply</button>
                </div>
  </div>
  ';
  $output .= get_reply_comment($connect, $row["PostID"]);
 }/*
 <div class="form-group">
        <input type="text" name="PostAuthor" id="PostAuthor" class="form-control" placeholder="Enter Name" />
        <textarea name="Post_Content" id="Post_Content" class="form-control" placeholder="Enter Comment" rows="3"></textarea>
    </div>
 */
 echo $output;
 //Get all rplys
 function get_reply_comment($connect, $parent_id, $marginleft = 0)
 {
  $query = "
  SELECT * FROM posts WHERE ParentPostID = '".$parent_id."'
  ";
  $output = '';
  $statement = $connect->prepare($query);
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
     <div class="panel-body">'.$row["Post_Content"].'</div>
     <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["PostID"].'">Reply</button></div>
    </div>
    ';
    $output .= get_reply_comment($connect, $row["PostID"], $marginleft);
   }
  }
  return $output;
 }
 
 ?>