<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

include("connect.php");
if(isset($_POST['submit']))
{
    $id = $_POST['ID'];
    $name = $_POST['full-name'];

    $insert = mysqli_query($conn, "INSERT INTO student (idStudent,nameStudent) VALUES ('$id', '$name')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}
$conn->close();

?>