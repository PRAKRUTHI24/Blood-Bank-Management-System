<?php
include("connect.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                margin-left: 1000px;
                margin-top: 200px;
            }
            Button {
                   background-color: #4CAF50;
                   color: white;
                   padding: 16px 20px;
                   margin: 8px 0px;
                   border: none;
                   cursor: pointer;
                   width: 50%;
                   }
                  button:hover {
                  opacity: 0.8;
                     } 
            body{
                background-image: url(72.jpeg);
               background-repeat: no-repeat;
                background-size: cover;
            }
            #msg {
                display: none;
            }
        </style>
    </head>
    <body>
  <form action="" method="post">
        <h2>Enter the details:</h2>
        <div>
            <b>Blood Type &emsp;</b>
            <input type="text" id=Bloodtype  name="blood" required><br><br>
             <b>Units &emsp;</b>
            <input type="number" id=Units name="units" required><br><br>
            <b>Hospital id &emsp;</b>
            <input type="Number" id=HospitalName name ="hospital" required><br><br>
          <!--  <b>Bloodbank id &emsp;</b>
           <input type="number" id=bloodbankid name="bloodid" required><br><br>-->
            <input type="text" id="msg" name="msg" value="on progress" readonly><br><br>
            <button name="insert">SUBMIT</button>
        </div></form>
        <?php
    if(isset($_POST['insert'])) {
       $blood = $_POST['blood'];
        $unit = $_POST['units'];
       $hospital = $_POST['hospital'];
        $msg = $_POST['msg']; 
       
    $query = "insert into orders values('','$blood','$unit','$hospital','$msg')";
    $result = mysqli_query($conn, $query);
    if($result) 
    {
        echo "data inserted";
    } else {
        echo "data not inserted";
    }
    }
    ?>
    </body>
</html>