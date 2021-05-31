<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

include("connect.php");

$id = (isset($_GET['id']) ? $_GET['id'] : "0");
$code = (isset($_GET['code']) ? $_GET['code'] : "");

$sql = "DELETE FROM classes WHERE idClass = $id OR code = $code";

if($conn->query($sql) == TRUE)
{
    if ($id <> "0")
    {
        http_response_code(200);
        echo json_encode(array("message" => "Deleted class with ID " . $id . " from database"));
    }
    else
    {
        http_response_code(200);
        echo json_encode(array("message" => "Deleted class " . $code . " from database"));
    }
}
else
{
    http_response_code(404);
    echo json_encode(array("message" => "Unable to delete record, double check parameters and try again. Error: " . $conn->error));
}

$conn->close();

?>