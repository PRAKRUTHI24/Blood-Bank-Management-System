<?php
include("connect.php");
?>

<html>
<head>
    <style>
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
            color: whitesmoke;
        }
        a {
            text-decoration: none;
            background-color: white;
            padding: 10px;
            color: red;
            border-radius:10px;
            
        }
        a:hover {
            background-color: red;
            color: white;
        }
        body{
            background-image: url("44.jpeg");
            background-repeat: no-repeat;
           /* background-size: cover;*/
            background-position: center;
        }
         a {
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
<th>D_NAME</th>
<th>D_PHONE</th>
<th>D_DOB</th>
<th>gender</th>
<th>ADDRESS</th>
<th>AGE</th>
<th>WEIGHT</th>
<th>BP</th>
<th>HEAMOGLOBINE</th>
<th>BLOOD_TYPE</th>

<th>OPERATION</th>
</tr>
<?php 
$sql = "select * from donors";
$res= mysqli_query($conn, $sql);
if(mysqli_num_rows($res) != 0) {
    while($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";  
        echo   "<td>".$row['d_id']."</td>" ;
        echo   "<td>".$row['d_name']."</td>" ;
        echo "<td>".$row['d_phno']."</td>"; 
        echo "<td>".$row['d_dob']."</td>"; 
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['d_address']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "<td>".$row['weight']."</td>";
        echo "<td>".$row['bp']."</td>";
        echo "<td>".$row['heamoglobin']."</td>";
        echo "<td>".$row['blood_type']."</td>";
     
        echo "<td><a href='delete1.php?rn=$row[d_id]'>DELETE</a></td>";
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