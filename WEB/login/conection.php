<?php
function OpenCon()
 {
 $dbhost = "sql303.epizy.com";
 $dbuser = "epiz_33370230";
 $dbpass = "fjNCbUqydEuGU";
 $db = "epiz_33370230_database";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>