<?php
include("connect.php");
?>



<html>
<head>
    
    <title> search data and update </title>
    <style>
        body{
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
        <h1>Search data and Update</h1>
        <form action="" method="POST" style="background-color:lightblue">
            <input type="number" name="d_id" class="btn" placeholder="ENTER DONAR_ID" required/><br>
                    <input type="submit" name="search" class= "btn" value="SEARCH">
        
        </form>
        <?php
             
                    if(isset($_POST['search']))
                    {
                        $d_id = $_POST['d_id'];
                        
                        $query = "SELECT * FROM donors where d_id='$d_id'";
                        $query_run = mysqli_query($conn,$query);
                        
                        while($row = mysqli_fetch_array($query_run))
                        {
                           ?>
                            <form action="" method="POST">
                                
                     DONOR ID <input type="number" name="d_id" class="btn" value="<?php echo $row['d_id'];?>" readonly/><br>
                     DONOR NAME    <input type="text" name="name" value="<?php echo $row['d_name'];?>"/><br/>
                     PHONE         <input type="number" name="phno" value="<?php echo $row['d_phno'];?>"/><br/>
                     DOB           <input type="date" name="dob" value="<?php echo $row['d_dob'];?>"/><br/>
                     GENDER        <input type="text" name="gender" value="<?php echo $row['gender'];?>"/><br/>
                     ADDRESS	   <input type="text" name="address" value="<?php echo $row['d_address'];?>"/><br/>
                     AGE           <input type="number" name="age" value="<?php echo $row['age'];?>"/><br/>
                     WEIGHT        <input type="number" name="weight" value="<?php echo $row['weight'];?>"/><br/>
                     BP            <input type="text" name="bp" value="<?php echo $row['bp'];?>"/><br/>
                     HEAMOGLOBIN   <input type="number" name="heamoglobin" value="<?php echo $row['hemoglobine'];?>"/><br/>
                     BLOOD TYPE    <input type="text" name="bloodtype" value="<?php echo $row['blood_type'];?>"/><br/>
                     UNITS         <input type="number" name="units" value="<?php echo $row['units'];?>"/><br/>
           
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
    
    $d_id=$_POST['d_id'];

    $query="UPDATE donors SET d_name='$_POST[name]',d_phno='$_POST[phno]',d_dob='$_POST[dob]',gender='$_POST[gender]',d_address='$_POST[address]',age='$_POST[age]',weight='$_POST[weight]',bp='$_POST[bp]',heamoglobin='$_POST[heamoglobin]',blood_type='$_POST[bloodtype]',units='$_POST[units]' where d_id='$d_id'";
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
