<?php
$servername = "localhost";
$username = "root";
$password = "posiulai123";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo '<a href = "ledChange0.php">" Turn Off "</a>';

$sql = "UPDATE Lights SET MyLight = 1";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
	echo "Changed Successfully";
}else{
	echo " ERROR: " . $sql . "<br>" . $conn->error;
	
}
echo "<br>";
print("LIGHT Off")
?> 

