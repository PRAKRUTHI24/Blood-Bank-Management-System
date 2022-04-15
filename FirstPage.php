<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
 /* max-width: 700px;/*changed here*/
    width: 600px;
    margin-top: 50px;
    position: relative;
    margin-left: 450px;
 /* margin: auto;*/
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
    
body {
    font-family: Arial, Helvetica, sans-serif;
    animation: name 4s infinite;
    background-color:  #f8e5e6;
    background-image: url(64.jpeg);
    background-image: url(73.jpeg);
    /*background-repeat: no-repeat;*/
    background-size: cover;
    }
   /* @keyframes name {
        20% {
            background: url(342.PNG);
            background-repeat: no-repeat;
        }
        20% {
            background: url(Blood%20Donation%20-%20Experience%20in%20Style1.jpeg);
            background-repeat: no-repeat;
        }
        100% {
            background: url(1245.png);
            background-repeat: no-repeat;
        }
        
    }*/
/*@keyframesll-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 30px 40px;
  /*margin: 20px 0px;*/
  border: none;
  cursor: pointer;
  width: 100%;`.
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  } 
  .cancelbtn {
     width: 100%;
  }
}
    .blood {
        margin: 30px;
        margin-left: 50px;
        margin-top: 100px;
    }
    /*body{
      margin-top: 300px;
      margin-left:470px
    }*/
    .acb{
        margin-left: 500px;
    }
    h1{
        margin-left: 500px;
        font-style: italic;
        margin-top: 60px;
        text-decoration-color: red;
    }
       
    
</style>
</head>
<body>
    
   <h1>BLOOD BANK MANAGEMENT</h1>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="831.jpeg" style="width:100%">
 <!-- <div class="text">Caption Text</div>-->
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="811.jpeg" style="width:100%">
 <!-- <div class="text">Caption Two</div>-->
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="772.jpeg" style="width:100%">
  <!--<div class="text">Caption Three</div>-->
</div>
    
   <div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="742.jpeg" style="width:100%">
  <!--<div class="text">Caption Three</div>-->
</div>
    
    <div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="752.jpeg" style="width:100%">
  <!--<div class="text">Caption Three</div>-->
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>
    
    <div class="acb">
     <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="blood">HOSPITAL LOGIN</button> 
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" class="blood">BLOODBANK LOGIN</button> </div>
<!-- HOSPITAL LOGIN -->
<div id="id01" class="modal"> 
  
  <form class="modal-content animate" action="hospital_login.php" method="post">
      <?php if(isset($_GET['error'])){
        $get = $_GET['error'];?>
    <?php echo "<script type='text/javascript'> alert('$get')</script>"; ?>
    <?php   } ?>
      
    <div class="imgcontainer">
      <img src="hospital123.png" alt="Avatar" class="avatar">
         <!--<h4>HOSPITAL LOGIN</h4>-->
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
       <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>

<!--BLOODBANK LOGIN -->
<div id="id02" class="modal"> 
  
  <form class="modal-content animate" action="bloodbank_login.php" method="post">
    <div class="imgcontainer">
      <img src="1245.png" alt="Avatar" class="avatar">
       <!-- <h4>BLOODBANK LOGIN</h4> -->
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
        <button type="submit">Login</button>
      
    </div>

<div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<script>
    // Get the modal
var modal = document.getElementById('id01');
var modal = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

    
    
    </script>
</body>
</html> 
