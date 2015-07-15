<?php

//connection strings
$servername = "mysql.mikedeang.com";
$username = "mjdeangelis";
$password = "panthers2@";

// Create the connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "It looks like the database is connected...first blog should be coming soon!";


?>
