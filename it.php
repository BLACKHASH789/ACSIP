<?php

include "conn.php";
$count1=0;
$query = "SELECT MAX(m_id) FROM m_notice"; 
 
$ra= mysqli_query($conn, $query);
$sa=mysqli_fetch_assoc($ra);
$saa=$sa['MAX(m_id)'];
for($count=0;$count<7;$count=$count1)
{

$qry = "SELECT `m_sub`,`m_desc`,`m_date` FROM `m_notice` WHERE m_id=$saa "; 

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
