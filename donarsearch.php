<?php
include("connect.php");
?>


<html>
<head>
<title></title>
<style>
        
            table,th,td{
                border:3px solid black;
                width: 1100px;
            }
    
    body{
        background-image: url("50.jpeg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
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
<h1>SEARCH BY BLOODTYPE</h1>
<div class="container">
<form action="" method="POST">
 <input type="text" name="bloodtype" class="btn" placeholder="ENTER BLOOD_TYPE"/>
 <input type="submit" name="search" class= "btn" value="SAERCH">
</form>
<table>
<tr>
<th>D_ID</th>
<th>D_NAME</th>
<th>PHONE_NO</th>
<th>ADDRESS</th>
<th>BLOOD_GROUP</th>
</tr><br>

<?php
if(isset($_POST['search']))
{
 $bloodtype = $_POST['bloodtype'];
                        
$query = "SELECT * FROM donors where blood_type='$bloodtype'";
$query_run = mysqli_query($conn,$query);
                        
while($row = mysqli_fetch_array($query_run))
{
?>
<tr>
<td> <?php echo $row['d_id'];?></td>
<td> <?php echo $row['d_name'];?></td>
 <td> <?php echo $row['d_phno'];?></td>
<td> <?php echo $row['d_address'];?></td>
<td> <?php echo $row['blood_type'];?></td>
</tr>
              
<?php
}
}
?>
</table>
</div>
</center>
    <div> <a href="home_of_bloodbank.php">back</a></div>
</body>
</html>