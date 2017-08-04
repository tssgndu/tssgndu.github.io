<?php
$servername = "localhost";
$username = "id2156308_tssgndu";
$password = "tssgndu";
$dbname = "id2156308_tss";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

		?>