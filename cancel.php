<?php
include("connect.php");
    $request=$_GET['rn'];

    $query="UPDATE request SET comment='REJECTED' where request_id='$request'";
    $query_run=mysqli_query($conn,$query);
    
    if($query_run)
    {
           header("Location: requestorders.php");
    }
?>