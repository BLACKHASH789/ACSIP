<?php
   include "conn.php";

    $aname= $_POST['uname'];
    $apass= $_POST['psw'];
    echo $aname; 
    echo $apass;
    $i="important";
    $i1="compsci";
    $i2="bsc";
    $i3="commerce";
    $i4="arts";
    $i5="exam";
    $i6="library";

    $qry = "SELECT * FROM admin WHERE a_name='$aname' AND a_pass='$apass'"; 
   
     $r= mysqli_query($conn,$qry);
     $rw=mysqli_num_rows( $r);
     if($rw <1)
     { 
       ?>

         <script>
         alert('userame or password wrong..!!');
         window.open(" no.php");
         </script>

         <?php
     }
     else if($aname==$i)
     {
      header("Location: http://localhost/on/important.php/");
     }
     else if($aname==$i1)
     {
      header("Location: http://localhost/on/compsciadd.php/");
     }else if($aname==$i2)
     {
      header("Location: http://localhost/on/bscadd.php/");
     }else if($aname==$i3)
     {
      header("Location: http://localhost/on/commerceadd.php/");
     }else if($aname==$i4)
     {
      header("Location: http://localhost/on/artsadd.php/");
     }else if($aname==$i5)
     {
      header("Location: http://localhost/on/examadd.php/");
     }else if($aname==$i6)
     {
      header("Location: http://localhost/on/libraryadd.php/");
     }
     else
     {
       
      
       
         header("Location: http://localhost/on/admin.php");
      
     }
     
    
    
       ?>
       