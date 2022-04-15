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
 .back{ 
 text-decoration: none; 
 /* background-color: #b80811;*/ 
 background-color: #4CAF50; 
 border: 2px solid red; 
 padding: 10px; 
 float: right; 
 color: white; 
 border-radius: 8px; 
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
 background-image: url(45.jpeg); 
 background-repeat: no-repeat; 
 background-size: cover; 
 } 
 #msg { 
 display: none; 
 } 

 .back { 
 text-decoration: none; 
 color: white; 
 border: none; 
 } 
 </style> 
 </head> 
 <body> 
 <form action="" method="post"> 
 <h2>Enter the details:</h2> 
 <div> 
 <b>Blood Type &emsp;</b> 
 <input type="text" id=Bloodtype name="blood" required><br><br> 
 <b>Units &emsp;</b> 
 <input type="number" id=Units name="units" required><br><br> 
 <b>Hospital id &emsp;</b> 
 <input type="Number" id=HospitalName name ="hospital" required><br><br> 
 <input type="text" id="msg" name="msg" value="on progress" 
readonly><br><br> 
 <button name="insert">SUBMIT</button> 
 
 </div></form> 
 <a href="checkprogress.php"><button >Chech your progress</button></a> 
 <?php 
 if(isset($_POST['insert'])) { 
 $blood = $_POST['blood']; 
 $unit = $_POST['units']; 
 $hospital = $_POST['hospital']; 
 $msg = $_POST['msg']; 
 $query = "insert into request values('','$blood','$unit','$hospital',1,'$msg')"; 
 $result = mysqli_query($conn, $query); 
 if($result) 
 { 
 echo "<script > alert ('Request sent')</script>"; 

 } else { 
 echo "<script > alert ('Request not sent')</script>"; 
 } 
 } 
 ?> 
 <a class="back" href="home_page_of_hospital.php">back</a> 
 </body> 
</html> 
