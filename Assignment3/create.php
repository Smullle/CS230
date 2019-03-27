<?php
include 'connect.php';
$creator = $_GET['Creator'];
$title = $_GET['Title'];
$type = $_GET['Type'];
$identifier = $_GET['Identifier'];
$date = $_GET['Date'];
$language = $_GET['Language'];
$description = $_GET['Description'];

$now = new DateTime();
$da =  $now->format('Y-m-d H:i:s');
$sql = "INSERT INTO eBook_MetaData (creator, title, type, identifier, date, language, description) VALUES ('$creator', '$title', '$type', '$identifier', '$date', '$language', '$description')";

if ($connection->query($sql)) {
$msg = array("status" =>1 , "msg" => "eBook inserted successfully");
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$json = $msg;
header('content-type: application/json');
echo json_encode($json);
@mysqli_close($conn);
?>
