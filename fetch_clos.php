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

$subjectID = $_GET['subjectID'];

// Fetch CLOs for the selected subject from the database
$sql = "SELECT DISTINCT CLONumber FROM SubjectCLOMapping WHERE SubjectID = $subjectID";
$result = $conn->query($sql);

$clos = array();
while ($row = $result->fetch_assoc()) {
    $clos[] = $row;
}

// Return CLOs as JSON
header('Content-Type: application/json');
echo json_encode($clos);

$conn->close();
?>