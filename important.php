<html>
    <head></head>
   
    <style type="text/css">
    #acsip
    {
        border-style: solid;
        border-width: 10px;
        border-color: purple;
        text-align: center;
        height: 100px;
       
        font-weight:bold;
        font-size: 35px;
        
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
        top: -75px;
        background-image: url("logo2.jpg");
    
        
        
        
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


     /**admin login */body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
.s1 input[type=text]  {
  width: 20%;
  padding: 12px 25px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  position: relative;
  left: 2px;
  
  
}
.s2 input[type=text]  {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.s3 input[type=text]  {
  width: 70%;
  padding: 70px 0px;
  margin: 0px 0px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
.bbb {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 15%;
}

.bbb :hover {
  opacity: 0.8;
}
     





        </style> 
    <body>

        <div id=acsip >ONLINE NOTICE-BOARD MANAGEMENT SYSTEM <br>kalwan education society's arts commerce and science college kalwan(manur)
                <div id="logo">.</div>





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
        <div id="main">//main <div id="inte">

        
      
        <form  action="important.php" method="post">
    
      
      
    

    <div class="s1">
      <label for="dt"><b>Date</b></label>
      <input id="1" type="text" placeholder="Enter Date" name="dt" required>
      </div>
          
     
      <div class="s3">
       <label for="desc"><b>enter scrolling text notice</b></label>
       <br>
      <input type="text" placeholder="Enter notice description" name="sub" > 
      </div>
      
      <br>
        
      <div class="s4"> 
      <button class="bbb" type="submit">add important notice</button> 
      </div>
      
    
    
  </form>
















         </div>
        
        </div>
        <div id="left"> 
        <button class="button1">MAIN BOARD</button>
<button class="button button2">Comp Sci.</button>
<button class="button button3">B.Sc.</button>
<button class="button button4">Arts</button>
<button class="button button5">Commerce</button> 
<button class="button button6">Examination</button>
<button class="button button7">Library</button><br>
//left
        
        </div>



        <div id="right"><Br>THIS PORTION RESERVED FOR ADDS FOR REPRESENTING AS A BUSINESS MODEL..</div>
        </div>



        <div id="bottom"> Project Guided By:  Smt. A.N. Aher      Created By:  1)Bhujade Sanket Rajendra   2)Pagar Lalit kisan                                                     
        




<button onclick ="location.href = 'http://localhost/on/no.php'"  class="bbb"> Logout</button>


 
  
</div>


</div>
        <div id="imp">
        IMPORTANT
        </div>
        

        </body>

        </html>
        <?php
        include "conn.php";
$md= $_POST['dt'];
$ms= $_POST['sub'];


$qry = "INSERT INTO `i_notice`( `i_date`,`i_sub`) VALUES ('$md','$ms')"; 

 $r= mysqli_query($conn,$qry);
        ?>
       