<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

include("connect.php");

$id = $_POST['id'];
$class = $_POST['class'];

$sql = "INSERT INTO enrolledclasses (Student_idStudent, Classes_idClasses) VALUES ($id, $class)";

if($conn->query($sql) == TRUE)
{
    http_response_code(200);
    echo json_encode(array("message" => "Enrolled student " . $id));
}
else
{
    http_response_code(404);
    echo json_encode(array("message" => "Unable to add record, double check parameters and try again. Error: " . $conn->error));
}

$conn->close();

?>