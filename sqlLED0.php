<?php
$servername = "localhost";
$username = "root";
$password = "posiulai123";
$dbname = "database";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); }
echo "Connected successfully";
echo '<a href = "ledChange1.php">" Turn On "</a>';
$sql = "UPDATE Lights SET MyLight = 0  ";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
	echo "Changed Successfully";
}else{
	echo " ERROR: " . $sql . "<br>" . $conn->error;
}
echo"<br>";

$pinStatus = shell_exec("gpio -g read 26");
//returns 0 = low; 1 = high
if ($pinStatus = "1") {
    echo "LED On.";
} else {
    echo "LED Off";
}

?> 
