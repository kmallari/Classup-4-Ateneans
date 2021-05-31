<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

include("connect.php");

$code = (isset($_GET['code']) ? $_GET['code'] : "");
$section = (isset($_GET['section']) ? $_GET['section'] : "");
$name = (isset($_GET['name']) ? $_GET['name'] : "");
$unit = (isset($_GET['unit']) ? $_GET['unit'] : "");
$day = (isset($_GET['day']) ? $_GET['day'] : "");
$time = (isset($_GET['time']) ? $_GET['time'] : "");
$room = (isset($_GET['room']) ? $_GET['room'] : "");
$prof = (isset($_GET['prof']) ? $_GET['prof'] : "");

$sql = "INSERT INTO classes (codeClass, sectionClass, nameClass, unitsClass, dayClass, timeClass, roomClass, profClass) VALUES ($code, $section, $name, $unit, $day, $time, $room, $prof)";

if($conn->query($sql) == TRUE)
{
    http_response_code(200);
    echo json_encode(array("message" => "Added Class " . $code . " to database"));
}
else
{
    http_response_code(404);
    echo json_encode(array("message" => "Unable to add record, double check parameters and try again. Error: " . $conn->error));
}

$conn->close();

?>