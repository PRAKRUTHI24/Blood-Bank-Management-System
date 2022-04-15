<?php
    include("connect.php");
    $did =$_GET['rn'];
    $query = "delete from donors where d_id='$did'";
    $result = mysqli_query($conn, $query);
    if($result) 
    {
        header("Location: Donordelete.php");
    } 

    ?>