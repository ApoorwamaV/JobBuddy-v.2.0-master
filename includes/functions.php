<?php
function verify_query($result_set){
    global $connection;

    if($result_set){
        die("Database query faailed: ".mysqli_error($connection));
    }
}

?>