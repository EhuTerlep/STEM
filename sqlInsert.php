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

$sql = "INSERT INTO students(name,age,gradeLevel) VALUES('$name','$age','$gradeLevel') ";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 
