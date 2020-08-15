<?php require_once('includes/connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Questions and Answers</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
  <br />
    <h2 align="center"><a href="#">Comment System using PHP and Ajax</a></h2>
  <br />
<div class="container">
    <form method="POST" id="comment_form">
        <div class="form-group">            
            <select id="PostCategoryId" class="form-control" name="PostCategoryId">
                <option selected>--All--</option>
                <option>JOB Oppotunities</option>
                <option>Vocational Courses</option>
                <option>NVQ Level</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" name="PostAuthor" id="PostAuthor" class="form-control" placeholder="Enter Name" />
        </div>
        <div class="form-group">
            <textarea name="Post_Content" id="Post_Content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
        </div>
        <div class="form-group">
            <input type="hidden" name="PostID" id="PostID" value="0" />
            <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
        </div>
   </form>

<span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var PostID = $(this).attr("id");
  $('#PostID').val(PostID);
  $('#PostAuthor').focus();
 });
 
});
</script>


