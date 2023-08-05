<?php
// Establish connection to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "speech";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the transcript from the POST request
$transcript = $_POST['transcript'];

// Insert the transcript into the database
$sql = "INSERT INTO sp (text) VALUES ('$transcript')";
if ($conn->query($sql) === TRUE) {
    echo "Result stored successfully";
} else {
    echo "Error storing result: " . $conn->error;
}

$conn->close();
?>

