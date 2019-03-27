<?php
include 'connect.php';

$id = $_GET['id'];

$query = "DELETE FROM eBook_MetaData WHERE id='$id'";

if ($connection->query($query)) {
    $msg = array("status" =>1 , "msg" => "eBook Deleted successfully");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
} 

$json = $msg;

header('content-type: application/json');
echo json_encode($json);
@mysqli_close($conn);
