<?php

//Local Database
$server="mysql36.unoeuro.com";
$user="sej_one";
$pw="knGm9hy5HBbp";
$db="sej_one_db_lifeline";


// Create Connection
$conn = new mysqli($server, $user, $pw, $db);
// Check Connection
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
} else {
    //echo "connected successfully";
}
?>