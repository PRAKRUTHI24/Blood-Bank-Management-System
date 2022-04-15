<?php
include("connect.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                margin-left:700px;
                margin-top:100px;
		background-size: 385px;
                background-image: url(bg.png);
                background-repeat: no-repeat;
                
                
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
       				 <h1> New Donation Details</h1>
      			  <div class="abc">
        		    <form action="" method="post">
        		       <b>Donor ID &emsp;</b>
                	<input type ="Number" id="d_id" placeholder=" " name="d_id"  required><br><br>


                  
	                <b>Date of donation &emsp;</b>
        	        <input type ="date" id="date_of_donation" placeholder=" " name="date_of_donation"  required><br><br>

               		<b>Blood Group &emsp;</b>
                    	<select name = "blood_type">
			<option value = "A-">A-</option>
                <option value = "A+">A+</option>
		<option value = "AB+">AB+</option>
		<option value = "AB-">AB-</option>
		<option value = "B+">B+</option>
		<option value = "B-">B-</option>
		<option value = "O+">O+</option>
		<option value = "O-">O-</option>
                      </select>
<br><br>
                	<b>Units &emsp;</b>
                	<input type="number" id="units" name="units" placeholder=" " required><br><br>
                
              	       
                	
                	
                
               				  <button name="insert">SUBMIT</button>
            </form>
        </div>
    <?php
       if(isset($_POST['insert'])) {
       $d_id = $_POST['d_id'];
      
       $date_of_donation = $_POST['date_of_donation'];
     
       $units = $_POST['units'];
       
       $blood_type = $_POST['blood_type'];
     
       
    $query = "insert into donations value('$d_id','$date_of_donation','$blood_type','$units')";
	
    $result = mysqli_query($conn, $query);
    if($result) 
    {
        echo "<script > alert ('data inserted')</script>";
    } else {
        echo "<script > alert ('Either of the details is incorrect')</script>";
    }
    }
    ?>

        <div> <a href="home_of_bloodbank.php">back</a></div>
                
        </body>
</html>