<?php
// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "invoicemgsys1";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch subjects from the database
$sql = "SELECT SubjectID, SubjectName FROM Subjects";
$result = $conn->query($sql);

$subjects = array();
while ($row = $result->fetch_assoc()) {
    $subjects[] = $row;
}

// Return subjects as JSON
header('Content-Type: application/json');
echo json_encode($subjects);

$conn->close();
?>