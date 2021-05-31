<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");

include("connect.php");

$sql = "SELECT * FROM classes";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
// output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "id: ". $row["idClasses"] . " –Code, Section, Name, Units, Day, Time, Room, Professor: ". $row["codeClass"] . " ". $row["sectionClass"] . " " . $row["nameClass"] . " " . $row["unitsClass"] . " " . $row["dayClass"] . " " . $row["timeClass"] . " " . $row["roomClass"] . " " . $row["profClass"] . "\n";
    }
} 
else
{
    echo "0 results";
}

$conn->close();

?>