<?php
include("connect.php");
?>



<html>
<head>
    
    <title> search stock and update </title>
    <style>
        body{
		background-image: url(68.jpeg);
                background-repeat: no-repeat;
                background-size: 140%;
            background-color: whitesmoke;
        }
        input{
            width : 40%;
            height: 5%;
            border: 1px;
             border-radius: 5px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }
        input[type=submit] {
            background-color: black;
            color: white;
        }
        input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  appearance: none;
  margin: 0;
}
         a{
                text-decoration: none;
                background-color: #b80811;
                border: 2px solid red;
                padding: 10px;
                float: right;
                color: aliceblue;
                border-radius: 8px;
            }
    
    </style>
    
    </head>
    <body>
    <center>
        <a href="home_of_bloodbank.php">back</a>
        <h1>Search stock and Update</h1>
        <form action="" method="POST" style="background-color:lightblue">
            <input type="text" name="blood_type" class="btn" placeholder="ENTER BLOOD_TYPE" required/><br>
                    <input type="submit" name="search" class= "btn" value="SEARCH">
        
        </form>
        <?php
             
                    if(isset($_POST['search']))
                    {
                        $blood_type = $_POST['blood_type'];
                        
                        $query = "SELECT * FROM stocks where blood_type='$blood_type'";
                        $query_run = mysqli_query($conn,$query);
                        
                        while($row = mysqli_fetch_array($query_run))
                        {
                           ?>
                            <form action="" method="POST">
                                
                     BLOOD TYPE <input type="text" name="blood_type" class="btn" value="<?php echo $row['blood_type'];?>" readonly/><br>
                     STOCKS    <input type="number" name="count_of_blood_type" value="<?php echo $row['d_name'];?>"/><br/>
                     
           
                              <input type="submit" name="update" value="UPDATE DATA"/><br/>
                            </form>
        <?php
                        }
                    }
        ?>
        </center>
    </body>
</html>




<?php

if(isset($_POST['update']))
{
    
    $blood_type=$_POST['blood_type'];

    $query= "UPDATE stocks SET count_of_blood_type ='$_POST[count_of_blood_type]' where blood_type = '$blood_type'";
    $query_run=mysqli_query($conn,$query);
    
    if($query_run)
    {
     echo '<script types="text/javascript"> alert("Data Updated") </script>';
    }
    else
    {
    echo '<script types="text/javascript"> alert("Data Not Updated") </script>';
    }
} 
?>
