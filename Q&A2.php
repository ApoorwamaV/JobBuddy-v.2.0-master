<?php
   require_once('includes/connection.php');
   require_once('includes/functions.php');?>

<?php session_start();?>

<?php 
$sql="select * from posts";
$result=mysqli_query($connection,$sql);
$rows = mysqli_num_rows($result);
$result1=$result->fetch_object();

$PostID=$result1->PostID;
$PostCategoryId=$result1->PostCategoryId;
$PostTitle=$result1->PostTitle;
$PostAuthor=$result1->PostAuthor;
$PostDate=$result1->PostDate;
$Post_Image=$result1->Post_Image;
$Post_Content=$result1->Post_Content;
$Post_Tags=$result1->Post_Tags;
$PostContent_Count=$result1->PostContent_Count;
$Post_Status=$result1->Post_Status;

isset($_POST['Stu_NIC'])?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="Lib.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="javascript" href="js/bootstrap.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

    
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    
<?php
    if($rows > 0) {
        while($row = mysqli_fetch_array($result))  
        {  
            $output .= '
            <div class="Posts">
                <div class="form-row col-12 col-md-12 col-sm-12 justify-content-center">  
                    <div class="form-group col-md-6">
                        
                    </div>
                </div>
            </div>
            ';
        }
    } else {
        $output .= '
				<tr>  
					 <td colspan="4">Data Not Found</td>';
    }
    ?>
</body>
</html>