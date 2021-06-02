<?php 
$SVName = "localhost";
$username = "root";
$password = "";
$DBname = "modelv1";

$conn = new mysqli($SVName, $username, $password, $DBname);

if ($conn->connect_error)
{
    die("Connection Failed!!! " . $conn->connect_error);
}
else
{
    echo "Connection Success!\n";
}
?>