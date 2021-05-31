<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");

include("connect.php");

$id = (isset($_GET['id']) ? $_GET['id'] : ""); //parameter can be name or abbv

$sql = "SELECT * FROM student WHERE idStudent = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
// output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "id: ". $row["idStudent"] . " –Name: ". $row["nameStudent"] . "\n";
    }
} 
else
{
    echo "0 results";
}

$conn->close();

?>