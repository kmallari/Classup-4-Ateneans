<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

include("connect.php");

$id = (isset($_GET['id']) ? $_GET['id'] : "");
$code = (isset($_GET['code']) ? $_GET['code'] : "");
$section = (isset($_GET['section']) ? $_GET['section'] : "");
$name = (isset($_GET['name']) ? $_GET['name'] : "");
$unit = (isset($_GET['unit']) ? $_GET['unit'] : "");
$day = (isset($_GET['day']) ? $_GET['day'] : "");
$time = (isset($_GET['time']) ? $_GET['time'] : "");
$room = (isset($_GET['room']) ? $_GET['room'] : "");
$prof = (isset($_GET['prof']) ? $_GET['prof'] : "");

$sql = "UPDATE class SET nameClass = $name, profClass = $prof, codeClass = $code, unitsClass = $unit, sectionClass = $section, timeClass = $time, dayClass = $day, roomClass = $room WHERE idClass = $id";

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