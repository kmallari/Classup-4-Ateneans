<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

include("connect.php");

$id = (isset($_GET['id']) ? $_GET['id'] : "");

$sql = "DELETE FROM student WHERE idClass = $id";

if($conn->query($sql) == TRUE)
{
    http_response_code(200);
    echo json_encode(array("message" => "Deleted student with ID " . $id . " from database"));
}
else
{
    http_response_code(404);
    echo json_encode(array("message" => "Unable to delete record, double check parameters and try again. Error: " . $conn->error));
}

$conn->close();

?>