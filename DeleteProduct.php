<?php

$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "connection success";
}
$query = "delete from product where id=$id";
if ($conn->query($query) === TRUE) {
    echo "";
}

header('location:AddControl.php');


$conn->close();


 ?>