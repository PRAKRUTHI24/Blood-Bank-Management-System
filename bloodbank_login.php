<!DOCTYPE html>
<html>
<body>

<?php require 'home_of_bloodbank.php'; ?>
</body>

</html> 
<?php
session_start();
include("connect.php");
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password =  $_POST['password']; 
    
    if(empty($username)){
        header("Location: FirstPage.php?error=username is required");
        exit();
    }else if(empty($password)){
        header("Location: FirstPage.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM bloodbank_login WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) != NULL) {
               header("Location: home_of_bloodbank.php");
               die();
         }else{
            header("Location: FirstPage.php?error=Incorrect user_name or Password");
            die();
        }
    } 
}
