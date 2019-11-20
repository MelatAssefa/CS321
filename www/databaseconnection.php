<?php

$servername = "localhost";
$username = "ali8";
$password = "1903505";
$dbname = "db_ali8";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$sql = "CREATE TABLE RSSFEED (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL,
date DATE,
description TEXT,
link VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table RSS Feed created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
   
?>