<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

include("connect.php");

$code = $_POST['code'];
$section = $_POST['section'];
$name = $_POST['name'];
$unit = $_POST['units'];
$day = $_POST['day'];
$time = $_POST['time'];
$room = $_POST['room'];
$prof = $_POST['prof'];

$sql = "INSERT INTO classes (codeClass, sectionClass, nameClass, unitsClass, dayClass, timeClass, roomClass, profClass) VALUES ('$code', '$section', '$name', '$unit', '$day', '$time', '$room', '$prof')";

if($conn->query($sql) == TRUE)
{
    http_response_code(200);
    echo json_encode(array("message" => "Added Class " . $code . " to database"));
    echo "<p>Redirecting back to home page...</p>";
}
else
{
    http_response_code(404);
    echo json_encode(array("message" => "Unable to add record, double check parameters and try again. Error: " . $conn->error));
}

$conn->close();

?>

<head>
  	<meta http-equiv="refresh" content="5;URL=http://localhost/Classup-4-Ateneans/index.php">
</head>