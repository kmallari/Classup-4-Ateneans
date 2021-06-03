<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

include("connect.php");

$id = $_POST['id'];
$class = $_POST['class'];

$sql = "DELETE FROM enrolledclasses WHERE Student_idStudent = '$id' AND Classes_idClasses = '$class'";

if($conn->query($sql) == TRUE)
{
    http_response_code(200);
    echo json_encode(array("message" => "Unenrolled student with ID " . $id . " from class"));
    echo "<p>Redirecting back to home page...</p>";
}
else
{
    http_response_code(404);
    echo json_encode(array("message" => "Unable to delete record, double check parameters and try again. Error: " . $conn->error));
}

$conn->close();

?>

<head>
  	<meta http-equiv="refresh" content="5;URL=http://localhost/Classup-4-Ateneans/index.php">
</head>