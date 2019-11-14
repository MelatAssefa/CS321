<?php
include 'databaseconnection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>