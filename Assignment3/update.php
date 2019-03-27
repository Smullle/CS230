<?php
include 'connect.php';
$creator = $_GET['creator'];
$title = $_GET['title'];
$type = $_GET['type'];
$identifier = $_GET['identifier'];
$date = $_GET['date'];
$language = $_GET['language'];
$description = $_GET['description'];
$id = $_GET['id'];

$query = "UPDATE eBook_MetaData SET creator='$creator' ,title='$title' , type='$type' ,identifier='$identifier' ,date='$date' ,language='$language' ,description='$description'  WHERE  id='$id'";

if ($connection->query($query)) {
       $msg = array("status" =>1 , "msg" => "eBook Updated successfully");
}else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
$json = $msg;
header('content-type: application/json');
echo json_encode($json);
@mysqli_close($conn);
