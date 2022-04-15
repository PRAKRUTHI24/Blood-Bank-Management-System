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
		background-size: 535px;
                background-image: url(47.png);
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
       				 <h1>Add New Donor</h1>
      			  <div class="abc">
        		    <form action="" method="post">
        		       <b>Donor ID &emsp;</b>
                	<input type ="Number" id="d_id" placeholder=" " name="d_id"  required><br><br>


                  
	                <b>Full Name &emsp;</b>
        	        <input type ="text" id="name" placeholder=" " name="name"  required><br><br>

                
                        <b>Mobile Number &emsp;</b>
      	                <input type="number" id="mobile_number" name="phno" placeholder=" "required><br><br>
                
              	        <b>Date of Birth &emsp;</b>
                	<input type="date"  name="date_of_birth" required><br><br>
                
              		<b>Gender&emsp;</b>
             		<input type="text" id="gender" name="gender" required><br><br>
                

	                <b>Complete Address &emsp;</b>
        	        <input type="text" id="address" name="address" required><br><br>
                
                	<b>Age &emsp;</b>
                	<input type="number" id="age" name="age" placeholder=" " required><br><br>
                
              	        <b>Weight &emsp;</b>
 	                <input type ="number" id="weight" name="weight" placeholder="    " required><br><br>
                
  	                <b>Blood Pressure &emsp;</b>
          	        <input type ="text" id="bp" name="bp" placeholder=" " required><br><br>

	                <b>Hemoglobine &emsp;</b>
        	        <input type="float" id="heamoglobin" name="heamoglobin" placeholder=" " required><br><br>
                
                	<b>Blood Group &emsp;</b>
			
                    	<select name = "blood_type">
			<option value = "Null">select</option>
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
                	
                
               				  <button name="insert">SUBMIT</button>
            </form>
        </div>
    <?php
       if(isset($_POST['insert'])) {
	$d_id = $_POST['d_id'];
       $name = $_POST['name'];
       $phno = $_POST['phno'];
       $date_of_birth = $_POST['date_of_birth'];
       $gender = $_POST['gender'];
       $address = $_POST['address'];
       $age = $_POST['age'];
       $weight = $_POST['weight'];
       $bp = $_POST['bp'];
       $heamoglobin = $_POST['heamoglobin'];
       $bloodtype = $_POST['blood_type'];
     
       
    $query = "insert into donors value('$d_id','$name','$phno','$date_of_birth','$gender','$address','$age','$weight','$bp','$heamoglobin','$bloodtype')";
	
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