<?php
$conn = new mysqli("localhost", "root", "", "eBook_MetaData");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

