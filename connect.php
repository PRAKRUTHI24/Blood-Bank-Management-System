<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bloodbank";



$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    echo"    ";
}
else{
    echo"Not connected";
}
?>