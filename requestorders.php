<?php
include("connect.php");
?>

<html>
<head>
    <style>
        body {
            background-image: url(731.jpeg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    table {
            border-collapse: collapse;
            width: 70%;
            margin-top: 50px;
            margin-bottom: 50px;
             font-family: arial, sans-serif; 
             line-height: 30px;
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
	td {
            background-color: white;
            color: black;
        }
     .accept {
         text-decoration: none;
            background-color: white;
            padding: 10px;
             margin: 10px;
            color: green;
            border-radius:10px;
            border: 2px solid green;
            cursor: pointer;
            
        }
        .accept:hover {
            background-color: green;
            color: white;
        }
        .cancel {
            text-decoration: none;
            background-color: white;
            padding: 10px;
            margin: 10px;
            color: red;
            border-radius:10px;
            border: 2px solid red;
            cursor: pointer;
            
        }
        .cancel:hover {
            background-color: red;
            color: white;
        }
        body{
            margin-left: 250px;
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
<th>REQUEST_ID</th>
<th>BLOOD_TYPE</th>
<th>REQUIRED UNITS</th>
<th>AVAILABLE UNITS</th>
<th>HOSPITAL_ID</th>
<th>REQUEST</th>
<th colspan="2">OPERATION</th>
    
</tr>
<?php 
$sql = "select * from request, stocks
where stocks.blood_type = request.blood_type";

$res= mysqli_query($conn, $sql);
if(mysqli_num_rows($res) != 0) {
    while($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";  
        echo   "<td>".$row['request_id']."</td>" ;
        echo   "<td>".$row['blood_type']."</td>" ;
        echo "<td>".$row['units']."</td>"; 
	echo "<td>".$row['count_of_blood_type']."</td>" ;
        echo "<td>".$row['hospital_id']."</td>"; 
        echo "<td>".$row['comment']."</td>"; 
       echo "<td><a href='accept.php?rn=$row[request_id]' class='accept'>ACCEPT</a></td>";
       echo "<td><a href='cancel.php?rn=$row[request_id]' class ='cancel'>REJECT</a></td>";
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