<?php

//Local Database
$server="localhost";
$user="root";
$pw="";
$db="lifeline_robotics";


// Create Connection
$conn = new mysqli($server, $user, $pw, $db);
// Check Connection
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
} else {
    //echo "connected successfully";
}
?>