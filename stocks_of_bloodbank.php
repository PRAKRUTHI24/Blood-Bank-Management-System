<?php
include("connect.php");
?>

<html>
<head>
    <style>
        body {
             background-image:url(21.png);
            background-repeat: no-repeat;
            background-right: 550px;
            background-position : left;
            background-size:100%;
            background-color: rgb(245, 226, 229);
        }
    table {
            border-collapse: collapse;
            width: 50%;
            margin-left: 0px;
            margin-top: 50px;
            margin-bottom: 50px;
		 background-colour : blue;
             font-family: arial, sans-serif; 
             
        }
        td, th {
           border: 2px solid #ddd;
           text-align: center;
           padding: 8px;
	   colour : black;
	  
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
<th>BLOOD TYPE</th>
<th>QUANTITY</th>

</tr>

<?php 
$sql = "select b.blood_type, b.count_of_blood_type as total from stocks b group by b.blood_type;";
$res= mysqli_query($conn, $sql);
if(mysqli_num_rows($res) != 0) {
    while($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";  
        echo "<td>".$row['blood_type']."</td>" ;
        echo "<td>".$row['total']."</td>";
        
        
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