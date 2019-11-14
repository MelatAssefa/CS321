<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "ali8";
 $dbpass = "1903505";
 $db = "db_ali8";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>