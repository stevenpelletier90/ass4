<?php
session_start();
$servername = "localhost";
$username = "st488021";
$password = "Avocados90";
$dbname = "st488021";

// Database connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Please check your connection & try again: " . $conn->connect_error);
}

$name = $_POST['name'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$location = $_POST['location'];

$sql = "INSERT INTO teachers (Name,Subject,Phone,Location) VALUES('$name','$subject','$phone','$location')";

if ($conn->query($sql) === TRUE) {
    echo 'Welcome to our directory!';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
