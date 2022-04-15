<html>
    <head>
        <style>
		button {
		        margin-left:15px;
				}
            
     .dropbtn {
    background-color: rgb(172, 41, 41);
    color: white;
    padding: 16px;
	border-radius:8px;
    font-size: 16px;
      border: none;
      cursor: pointer;
      }
      body
	{
        background: url("722.jpeg");
        background-size: 70%;
        background-repeat: no-repeat;
        background-position: center;
        background-color:white;
      }

      .dropdown {
      position: relative;
      display: inline-block;
      }

      .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      }

       a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      }

      .dropdown-content a:hover {
	         background-color: white;
			 }

     .dropdown:hover .dropdown-content {
      display: block;
	  border-radius:8px;
	  background-color:rgb(169, 238, 243);
      }

      .dropbtn:hover  {
      background-color: rgb(27, 230, 95);
	  color:black;
      }
        </style>

    </head>
    <body>
        <div class ="dropdown">
          
           <button class="dropbtn">Donors</button>
            <div class="dropdown-content">
                <a href="Add_new_donor_list.php"> New Donar Records </a>
                <a href="Update_donar_details.php">Update Donar</a>
                <a href="Donordelete.php">Delete Donor </a>
                 <a href="Donardisplay.php">All Donar Details </a>
                 
       </div></div>
	   
         <div class ="dropdown">
		   <button class="dropbtn">Search Donor</button>
            <div class="dropdown-content">
             <a href="donarsearch.php">Blood Group</a>
           
            </div></div>
	<div class = "dropdown">
		<button class= "dropbtn">Donation</button>
		<div class="dropdown-content">
		<a href="Displaydonation.php">Details</a>
		<a href ="Add_details.php">Add new</a>

	</div></div>
            <div class ="dropdown">
              <button class="dropbtn">Stocks</button>
                   <div class="dropdown-content">
                    
		    <a href="Update_stocks_details.php">Update Stock</a>
                    <a href="stocks_of_bloodbank.php">Details</a>
                   </div></div>
			    
			    
			<div class ="dropdown">
              <button class="dropbtn">Request Details</button>
            <div class="dropdown-content">
             
             <a href="requestorders.php"> Details</a>
               </div></div>


               
               <div class ="dropdown">
               <button class="dropbtn"> Hospital </button>
            <div class="dropdown-content">
             <a href="Displayhospital.php">  Hospital Details</a>
          	
		
               </div></div>
               
              

               <div class ="dropdown">
              <a href="FirstPage.php"><button  class="dropbtn">Logout</button> </a>
           <!-- <div class="dropdown-content">
             <a href="#">LogOut</a>-->
             
           </div>

              
        
    </body>
    </html>