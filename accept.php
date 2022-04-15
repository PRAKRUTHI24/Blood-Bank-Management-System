<?php
include("connect.php");
    $request=$_GET['rn'];

    $query="UPDATE request r, stocks s SET r.comment='ACCEPTED', s.count_of_blood_type = 	s.count_of_blood_type - r.units where request_id='$request' and r.blood_type = 	s.blood_type";
    $query_run=mysqli_query($conn,$query);
    
    if($query_run)
    {
           header("Location: requestorders.php");
		exit(0);
    }
?>