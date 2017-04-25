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

$sql = "DELETE FROM teachers
WHERE Name = '$name'";

if ($conn->query($sql) === TRUE) {
    echo 'You have successfully deleted a tutor from the directory.';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
