<?php
include("connect.php");
?>

<html>
<head>
    <style>
        body {
            background-image:url(17.jpeg);
            background-repeat: no-repeat;
            background-position: center;
            background-size:100%;
            background-color: rgb(245, 226, 229);
        }
    table {
            border-collapse: collapse;
            width: 70%;
            margin-left: 150px;
            margin-top: 50px;
            margin-bottom: 50px;
             font-family: arial, sans-serif; 
             
        }
        td, th {
           border: 2px solid #ddd;
           text-align: center;
           padding: 8px;
        }
        th {
            background-color: red;
            color: black;
        }
td {
            background-color: white;
            color: black;
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
<a href="home_of_bloodbank.php">back</a>
<table>
<tr>
<th>D_ID</th>
<th>DATE OF DONATION</th>
<th>BLOOD TYPE</th>
<th>UNITS</th>

   
</tr>
<?php 
$sql = "call dns()";
$res= mysqli_query($conn, $sql);
if(mysqli_num_rows($res) != 0) {
    while($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";  
        echo   "<td>".$row['d_id']."</td>" ;
        echo   "<td>".$row['date_of_donation']."</td>" ;
        echo "<td>".$row['blood_type']."</td>"; 
        echo "<td>".$row['units']."</td>"; 
       
        
    } 
} 
else
{
    echo "0 results" ;
}
mysqli_close($conn);
        ?>
    </table>
     
    </body>
</html>