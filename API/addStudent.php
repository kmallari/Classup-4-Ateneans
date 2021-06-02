<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

include("connect.php");

$id = $_POST['ID'];
$name = $_POST['full-name'];

$insert = mysqli_query($conn, "INSERT INTO `student`(`idStudent`,`nameStudent`) VALUES ('$id', '$name')");

if($conn->query($insert) == TRUE)
{
    http_response_code(200);
    echo json_encode(array("message" => "Added student " . $name . " with ID " . $id . " to database"));
}
else
{
    http_response_code(404);
    echo json_encode(array("message" => "Unable to add record, double check parameters and try again. Error: " . $conn->error));
}

$conn->close();

?>