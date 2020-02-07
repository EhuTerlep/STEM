<?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "school";
$name = 'Test';
$age = 15;
$gradeLevel = 11;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
