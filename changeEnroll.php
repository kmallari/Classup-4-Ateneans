<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

include("connect.php");

$id = (isset($_GET['id']) ? $_GET['id'] : "");
$newclass = (isset($_GET['newclass']) ? $_GET['newclass'] : "");
$oldclass = (isset($_GET['oldclass']) ? $_GET['oldclass'] : "");

$sql = "UPDATE enrolledclasses SET Classes_idClasses = $newclass WHERE Student_idStudent = $id AND Classes_idClasses = $oldclass";

if($conn->query($sql) == TRUE)
{
    http_response_code(200);
    echo json_encode(array("message" => "Updated class " . $id . " in database"));
}
else
{
    http_response_code(404);
    echo json_encode(array("message" => "Unable to change record, double check parameters and try again. Error: " . $conn->error));
}

$conn->close();

?>