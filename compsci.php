<html>
    <head></head>
    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    <style type="text/css">
    #acsip
    {
        border-style: solid;
        border-width: 10px;
        border-color: purple;
        text-align: center;
        height: 100px;
       
        font-weight:bold;
        font-size: 30px;
        
    }
    #acsip #logo
    {
        border-style: solid;
        border-width: 4px;
        border-color: purple;
        text-align: left;
        width: 83px;
        height: 80px;
        position: relative;
        left: 10px;
        bottom: 12px;
        top: -100px;
        background-image: url("logo.jpg");
    
        
        
        
    }
    #slider{
        border-style: solid;
        border-width: 2px;
        border-color: black;
        text-align: center;
        height: 20px;
        color: black;
        position: relative;
        top: 2px;

        font-weight:bold;
        font-size: 20px;

    }
    
    #bottom
    {

        border-style: solid;
        border-width: 10px;
        border-color: rgb(128, 0, 79);
        text-align: center;
        height: 60px;
        position:relative;
        top: 8px;

        font-weight:bold;
        font-size: 25px;
    }

    #con #left
    {

        border-style: solid;
        border-width: 10px;
        border-color: rgb(128, 0, 79);
        text-align: center;
        height: 420px;
        width: 180px;
        position:relative;
        top: 4px;
        



    }
    .button1 {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 35px;
  text-align: justify;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {background-color: #008CBA; padding: 15px 42px;} /* Blue */
.button3 {background-color: #f44336; padding: 15px 60px;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black; padding: 15px 65px;} /* Gray */ 
.button5 {background-color: #555555; padding: 15px 40px;} /* Black */
.button6 {background-color: #e7e7e7; color: black; padding: 15px 35px;} /* Gray */ 
.button7 {background-color: #555555; padding: 15px 55px;} /* Black */
    

    #con #main
    {
        border-style: solid;
        border-width: 10px;
        border-color: #f44336;
        text-align: center;
        height: 420px;
        width: 900px;
        position: fixed;
        top: 156px;
    
        right: 300px;

        
    }
    #con #main #inte
    {
        border-style: solid;
        border-width: 2px;
        border-color: #f44336;
        text-align: center;
        height: 400px;
        width: 880px;
        position: fixed;
        top: 172px;
        
    
        right: 320px;

        font-weight:bold;
        font-size: 20px;
        
    }
    #con #right
    {

        border-style: solid;
        border-width: 10px;
        border-color: rgb(128, 0, 79);
        text-align: center;
        height: 420px;
        width: 180px;
        position: absolute;
        top: 156px;
    
        right: 8px;
        font-weight:bold;
        font-size: 22px;



    }


     #imp{

        position:absolute;
        top: 133px;
        left: 11px;
        background-color: grey;
        font-weight:bold;
        

     }


     /**admin login */
     
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
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
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
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
  width: 40%;
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

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
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


        </style> 
    <body>

        <div id=acsip >ONLINE NOTICE-BOARD MANAGEMENT SYSTEM <br>kalwan education society's arts commerce and science college kalwan(manur) 
        <br><font color='red'>
        Notice-board for Computer Science Department
        </font>
                <div id="logo"></div>





        </div>
       
        <div id="slider">
        
            <marquee>
            <?php
            $count4=0;

include "conn.php";
$query = "SELECT MAX(i_id) FROM i_notice"; 
 
$ra= mysqli_query($conn, $query);
$sa=mysqli_fetch_assoc($ra);
$saaa=$sa['MAX(i_id)'];

for($count3=0;$count3<1;$count3=$count4)
{

$qry = "SELECT `i_sub` FROM `i_notice` WHERE i_id=$saaa "; 

 $r= mysqli_query($conn,$qry);
 $row = mysqli_fetch_assoc($r);
 if( !empty($row["i_sub"]))
 {
  echo $row["i_sub"];
 
 $saaa=--$saaa;
 $count4++;
 }
 else{
      $saaa=--$saaa;

 }
}

 ?>
                
        </marquee>

                
        </div>

        <div id="con">
        <div id="main"> <div id="inte">

        <marquee direction="up" scrollamount="2px" height="300px" >
        <?php

include "conn.php";
$count1=0;
$query = "SELECT MAX(m_id) FROM s_notice"; 
 
$ra= mysqli_query($conn, $query);
$sa=mysqli_fetch_assoc($ra);
$saa=$sa['MAX(m_id)'];
for($count=0;$count<7;$count=$count1)
{

$qry = "SELECT `m_sub`,`m_desc`,`m_date` FROM `s_notice` WHERE m_id=$saa "; 

 $r= mysqli_query($conn,$qry);
 $row = mysqli_fetch_assoc($r);

 
 if(!empty($row["m_date"]) && !empty($row["m_date"]) && !empty($row["m_date"]))
 {
 
 echo "<font color='light blue'>"."Date:".$row["m_date"]."</font>"."<br>";
 
 
 echo "<font color='purple'>". $row["m_sub"]."....."."</font><br>";

 echo $row["m_desc"]."<br><br>";
 $saa=--$saa;
 $count1++;
 }
 else{
      $saa=--$saa;

 }
}

 ?>

 

    
        


      

        </marquee> </div>
        
        </div>
        <div id="left"> 
        <button onclick ="location.href = 'http://localhost/on/no.php'"  class="button1">MAIN BOARD</button>
<button onclick ="location.href = 'http://localhost/on/compsci.php'"      class="button button2">Comp Sci.</button>
<button onclick ="location.href = 'http://localhost/on/bsc.php'"   class="button button3">B.Sc.</button>
<button onclick ="location.href = 'http://localhost/on/arts.php'"   class="button button4">Arts</button>
<button onclick ="location.href = 'http://localhost/on/commerce.php'"   class="button button5">Commerce</button> 
<button onclick ="location.href = 'http://localhost/on/exam.php'"   class="button button6">Examination</button>
<button onclick ="location.href = 'http://localhost/on/library.php'"   class="button button7">Library</button><br>

        
        </div>



        <div id="right"><Br>THIS PORTION RESERVED FOR ADDS FOR REPRESENTING AS A BUSINESS MODEL..</div>
        </div>



        <div id="bottom"> Project Guided By:  Smt. A.N. Aher      Created By:  1)Bhujade Sanket Rajendra   2)Pagar Lalit kisan                                                     
        <meta name="viewport" content="width=device-width, initial-scale=1">





<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Admin/sub-Admin Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
  
</div>


</div>
        <div id="imp">
        IMPORTANT
        </div>

        </body>

        </html>
        