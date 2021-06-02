<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

include("connect.php");

$id = $_POST['id'];
$class = $_POST['class'];

$sql = "DELETE FROM enrolledclasses WHERE Student_idStudent = '$id' AND Classes_idClasses = '$class'";

if($conn->query($sql) == TRUE)
{
    http_response_code(200);
    echo json_encode(array("message" => "Unenrolled student with ID " . $id . " from database"));
}
else
{
    http_response_code(404);
    echo json_encode(array("message" => "Unable to delete record, double check parameters and try again. Error: " . $conn->error));
}

$conn->close();

?>