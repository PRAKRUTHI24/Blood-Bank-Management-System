<?php
include("connect.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
               background: url("hospital.jpg");
       		background-size: 90%;
        	background-repeat : no repeat
        	background-position: center;
        	background-color:white;
                
            }
               Button {
                   background-color: #b80811;
                   color: white;
                   padding: 16px 20px;
                   margin: 8px 0px;
                   border: none;
                   cursor: pointer;
                   width: 20%;
                   }
                  button:hover {
                  opacity: 0.8;
                     } 
            body{
                background-color: #c0b9b9;
                
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
       				 <h1>Add New Hospital details</h1>
      			  <div class="abc">
        		    <form action="" method="post">
        		       <!-- <b>Donor ID &emsp;</b>
                	<input type ="Number" id="hospital_id" placeholder=" " name="hospital_id"  required><br><br> -->


                  
	                <b>Full Name &emsp;</b>
        	        <input type ="text" id="hospital_name" placeholder=" " name="hospital_name"  required><br><br>

                
                        <b>Phone Number &emsp;</b>
      	                <input type="number" id="hospital_phno" name="hospital_phno" placeholder=" "required><br><br>
                
              	       
	                <b>Complete Address &emsp;</b>
        	        <input type="text" id="hospital_address" name="hospiatal_address" required><br><br>
                
                	
               				  <button name="insert">SUBMIT</button>
            </form>
        </div>
    <?php
       if(isset($_POST['insert'])) {
       $hospital_name = $_POST['hospital_name'];
       $phno = $_POST['hospital_phno'];
      
       $address = $_POST['hospital_address'];
      
       
    $query = "insert into hospital values(' ','$hospital_name','$hospital_phno','$hospital_address')";
    $result = mysqli_query($conn, $query);
    if($result) 
    {
        echo "<script > alert ('data inserted')</script>";
    } else {
        echo "<script > alert ('data  not inserted')</script>";
    }
    }
    ?>
        <div> <a href="home_of_bloodbank.php">back</a></div>
                
        </body>
</html>