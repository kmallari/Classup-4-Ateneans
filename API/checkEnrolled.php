<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

include("connect.php");

$id = $_POST['ID']; //parameter can be name or abbv

// ================ MONDAY ==================

$sql = "SELECT * FROM enrolledclasses JOIN classes ON enrolledclasses.Classes_idClasses = classes.idClasses WHERE Student_idStudent = '$id' AND classes.dayClass LIKE '%M%' ORDER BY classes.timeClass";
$result = $conn->query($sql);

echo '<p class="h4">Monday</p>
<table class="table">
  <thead>
    <tr>
        <th scope="col">Time</th>
        <th scope="col">Code</th>
        <th scope="col">Name</th>
        <th scope="col">Section</th>
        <th scope="col">Room</th>
    </tr>
</thead>
<tbody>';

if ($result->num_rows > 0)
{
// output data of each row
    while($row = $result->fetch_assoc())
    {
        // echo "id: ". $row["idEnrolledClasses"] . " –Code, Section, Name, Units, Day, Time, Room, Professor: ". $row["codeClass"] . " ". $row["sectionClass"] . " " . $row["nameClass"] . " " . $row["unitsClass"] . " " . $row["dayClass"] . " " . $row["timeClass"] . " " . $row["roomClass"] . " " . $row["profClass"] . "\n";

        echo '<tr>';
        echo '<td scope="row">' . $row["timeClass"] . '</td>';
        echo '<td>' . $row["codeClass"] . '</td>';
        echo '<td>' . $row["nameClass"] . '</td>';
        echo '<td>' . $row["sectionClass"] . '</td>';
        echo '<td>' . $row["roomClass"] . '</td>';
        echo '</tr>';
    }
} 
else
{
    echo "0 results";
}

echo "</tbody>
</table>";

// ================ MONDAY ==================

// ================ TUESDAY ==================

$sql = "SELECT * FROM enrolledclasses JOIN classes ON enrolledclasses.Classes_idClasses = classes.idClasses WHERE Student_idStudent = '$id' AND classes.dayClass LIKE '%Tu%' ORDER BY classes.timeClass";
$result = $conn->query($sql);

echo '<p class="h4">Tuesday</p>
<table class="table">
  <thead>
    <tr>
        <th scope="col">Time</th>
        <th scope="col">Code</th>
        <th scope="col">Name</th>
        <th scope="col">Section</th>
        <th scope="col">Room</th>
    </tr>
</thead>
<tbody>';

if ($result->num_rows > 0)
{
// output data of each row
    while($row = $result->fetch_assoc())
    {
        // echo "id: ". $row["idEnrolledClasses"] . " –Code, Section, Name, Units, Day, Time, Room, Professor: ". $row["codeClass"] . " ". $row["sectionClass"] . " " . $row["nameClass"] . " " . $row["unitsClass"] . " " . $row["dayClass"] . " " . $row["timeClass"] . " " . $row["roomClass"] . " " . $row["profClass"] . "\n";

        echo '<tr>';
        echo '<td scope="row">' . $row["timeClass"] . "</td>";
        echo '<td>' . $row["codeClass"] . "</td>";
        echo '<td>' . $row["nameClass"] . "</td>";
        echo '<td>' . $row["sectionClass"] . "</td>";
        echo '<td>' . $row["roomClass"] . "</td>";
        echo '</tr>';
    }
} 
else
{
    echo "0 results";
}

echo "</tbody>
</table>";

// ================ TUESDAY ==================

// ================ WEDNESDAY ==================

$sql = "SELECT * FROM enrolledclasses JOIN classes ON enrolledclasses.Classes_idClasses = classes.idClasses WHERE Student_idStudent = '$id' AND classes.dayClass LIKE '%W%' ORDER BY classes.timeClass";
$result = $conn->query($sql);

echo '<p class="h4">Wednesday</p>
<table class="table">
  <thead>
    <tr>
        <th scope="col">Time</th>
        <th scope="col">Code</th>
        <th scope="col">Name</th>
        <th scope="col">Section</th>
        <th scope="col">Room</th>
    </tr>
</thead>
<tbody>';

if ($result->num_rows > 0)
{
// output data of each row
    while($row = $result->fetch_assoc())
    {
        // echo "id: ". $row["idEnrolledClasses"] . " –Code, Section, Name, Units, Day, Time, Room, Professor: ". $row["codeClass"] . " ". $row["sectionClass"] . " " . $row["nameClass"] . " " . $row["unitsClass"] . " " . $row["dayClass"] . " " . $row["timeClass"] . " " . $row["roomClass"] . " " . $row["profClass"] . "\n";

        echo '<tr>';
        echo '<td scope="row">' . $row["timeClass"] . "</td>";
        echo '<td>' . $row["codeClass"] . "</td>";
        echo '<td>' . $row["nameClass"] . "</td>";
        echo '<td>' . $row["sectionClass"] . "</td>";
        echo '<td>' . $row["roomClass"] . "</td>";
        echo '</tr>';
    }
} 
else
{
    echo "0 results";
}

echo "</tbody>
</table>";

// ================ MONDAY ==================

// ================ THURSDAY ==================

$sql = "SELECT * FROM enrolledclasses JOIN classes ON enrolledclasses.Classes_idClasses = classes.idClasses WHERE Student_idStudent = '$id' AND classes.dayClass LIKE '%Th%' ORDER BY classes.timeClass";
$result = $conn->query($sql);

echo '<p class="h4">Thursday</p>
<table class="table">
  <thead>
    <tr>
        <th scope="col">Time</th>
        <th scope="col">Code</th>
        <th scope="col">Name</th>
        <th scope="col">Section</th>
        <th scope="col">Room</th>
    </tr>
</thead>
<tbody>';

if ($result->num_rows > 0)
{
// output data of each row
    while($row = $result->fetch_assoc())
    {
        // echo "id: ". $row["idEnrolledClasses"] . " –Code, Section, Name, Units, Day, Time, Room, Professor: ". $row["codeClass"] . " ". $row["sectionClass"] . " " . $row["nameClass"] . " " . $row["unitsClass"] . " " . $row["dayClass"] . " " . $row["timeClass"] . " " . $row["roomClass"] . " " . $row["profClass"] . "\n";

        echo '<tr>';
        echo '<td scope="row">' . $row["timeClass"] . "</td>";
        echo '<td>' . $row["codeClass"] . "</td>";
        echo '<td>' . $row["nameClass"] . "</td>";
        echo '<td>' . $row["sectionClass"] . "</td>";
        echo '<td>' . $row["roomClass"] . "</td>";
        echo '</tr>';
    }
} 
else
{
    echo "0 results";
}

echo "</tbody>
</table>";

// ================ THURSDAY ==================

// ================ FRIDAY ==================

$sql = "SELECT * FROM enrolledclasses JOIN classes ON enrolledclasses.Classes_idClasses = classes.idClasses WHERE Student_idStudent = '$id' AND classes.dayClass LIKE '%F%' ORDER BY classes.timeClass";
$result = $conn->query($sql);

echo '<p class="h4">Friday</p>
<table class="table">
  <thead>
    <tr>
        <th scope="col">Time</th>
        <th scope="col">Code</th>
        <th scope="col">Name</th>
        <th scope="col">Section</th>
        <th scope="col">Room</th>
    </tr>
</thead>
<tbody>';

if ($result->num_rows > 0)
{
// output data of each row
    while($row = $result->fetch_assoc())
    {
        // echo "id: ". $row["idEnrolledClasses"] . " –Code, Section, Name, Units, Day, Time, Room, Professor: ". $row["codeClass"] . " ". $row["sectionClass"] . " " . $row["nameClass"] . " " . $row["unitsClass"] . " " . $row["dayClass"] . " " . $row["timeClass"] . " " . $row["roomClass"] . " " . $row["profClass"] . "\n";

        echo "<tr>";
        echo '<td scope="row">' . $row["timeClass"] . "</td>";
        echo "<td>" . $row["codeClass"] . "</td>";
        echo "<td>" . $row["nameClass"] . "</td>";
        echo "<td>" . $row["sectionClass"] . "</td>";
        echo "<td>" . $row["roomClass"] . "</td>";
        echo "</tr>";
    }
} 
else
{
    echo "0 results";
}

echo "</tbody>
</table>";

// ================ FRIDAY ==================

$conn->close();

?>