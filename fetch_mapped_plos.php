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
$cloNumber = $_GET['cloNumber'];

// Fetch mapped PLOs for the selected subject and CLO from the database
$sql = "SELECT Subjects.SubjectName, SubjectCLOMapping.CLONumber, PLO.PLOHeading
        FROM SubjectCLOMapping
        INNER JOIN Subjects ON SubjectCLOMapping.SubjectID = Subjects.SubjectID
        INNER JOIN PLO ON SubjectCLOMapping.PLOID = PLO.PLOID
        WHERE SubjectCLOMapping.SubjectID = $subjectID
        AND SubjectCLOMapping.CLONumber = $cloNumber";

$result = $conn->query($sql);

$mappedPLOs = array();
while ($row = $result->fetch_assoc()) {
    $mappedPLOs[] = $row;
}

// Return mapped PLOs as JSON
header('Content-Type: application/json');
echo json_encode($mappedPLOs);

$conn->close();
?>