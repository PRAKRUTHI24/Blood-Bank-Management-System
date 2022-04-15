<?php
include("connect.php");
?>


<html>
<head>
<title></title>
<style>
        
            table,th,td{
                border:2px solid black;
                width: 1100px;
		background-color : white;
            }
    body{
        background-image: url(62.jpeg);
        background-repeat: no-repeat;
        background-size: 65%;
        
        background-position: center;
        background-color: rgb(241, 237, 237);
    }
     .back {
                text-decoration: none;
                color: white;
                border: none;
                float: left;
                background-color: green;
                padding: 10px;
                border-radius: 8px;
            }   
</style>
</head>
<body>
<center>
<h1>SEARCH BY BLOOD TYPE</h1>
<a class="back" href="request.php">back</a>
<div class="container">
<form action="" method="POST">
 <input type="text" name="bloodtype" class="btn" placeholder="ENTER BLOOD_TYPE"/>
 <input type="submit" name="search" class= "btn" value="SAERCH">
</form>
<table>
<tr>
<th>REQUEST_ID</th>
<th>BLOOD_TYPE</th>
<th>UNITS</th>
<th>HOSPITAL_ID</th>
<th>REQUEST</th>
</tr><br>

<?php
if(isset($_POST['search']))
{
 $bloodtype = $_POST['bloodtype'];
                        
$query = "SELECT * FROM request where blood_type='$bloodtype'";
$query_run = mysqli_query($conn,$query);
                        
while($row = mysqli_fetch_array($query_run))
{
?>
<tr>
<td> <?php echo $row['request_id'];?></td>
<td> <?php echo $row['blood_type'];?></td>
 <td> <?php echo $row['units'];?></td>
<td> <?php echo $row['hospital_id'];?></td>
<td> <?php echo $row['comment'];?></td>
</tr>
                    
<?php
}
}
?>
</table>
</div>
</center>
</body>
</html>