<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                margin: 0;
                padding: 0;
                background-image: url(45.jpeg);
                background-repeat: no-repeat;
                background-size: 100%;
            }
            .container {
    position: right;
    width: 300px; 
   
    margin-left: 700px;
   
    box-shadow: 0 1px 30px rgba(0,0,0,0.25), 0 6px 6px rgba(0,0,0,0.23);
   /* border-radius: 10px;*/
}
/*.abc{
    position: right;
  width: 30%;
}*/
.image {
        opacity: 1;
        width: 400px;
        height:300px;
        transition: .5s ease;
        backface-visibility: hidden;
}
.middle {
  transition: .5s ease;
  opacity: 0;
  position: right;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
.container:hover .image {
  opacity: 0.3;
}
.container:hover .middle {
  opacity: 1;
}
/*.abc:hover.image{
    opacity: 0.3;
}
.abc:hover .middle {
  opacity: 1;
}*/
.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
Button {
    background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0px;
  border: none;
  cursor: pointer;
  width: 100%;
}
 button:hover {
  opacity: 0.8;
} 
 .blood {
          margin-left: 300px;
     margin-top: 200px;
        }
            .dropbtn{
                text-decoration: none;
                float: right;
                position: absolute;
                top:0px;
                right: 0px;
            }
	 h1{
        margin-left: 700px;
        font-style: Britannic Bold;
	font-colour : black;
        margin-top: 40px;
        text-decoration-color: red;
    }
</style>
    </head>
    <body>
		<h1> </h1>
         <a href="FirstPage.php" class= "dropbtn"><button >LOGOUT</button> </a>
    <div class="blood">
        <div class="container">
<div style = "float: right;">
             		<img src="23.jpeg" alt="Avatar" class="image" style="width:100%">
</div>
            <div class="right"><button><a href='request.php'>REQUEST</a></button></div>
        </div>
        
    </body>
</html>