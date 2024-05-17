<?php
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys1");

// Check for connection errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$depar_id = $_POST['id'];
$dep_name = mysqli_real_escape_string($conn, $_POST['department_name']);
$dep1_id = mysqli_real_escape_string($conn, $_POST['Department_id1']);
$query = "UPDATE `add_department` SET `department_name`='$dep_name', `Department_id`='$dep1_id' WHERE dep_id = $depar_id";
$result = mysqli_query($conn, $query);

if ($result) {
    // Successful update, redirect to department_view.php
    header('Location: department-view.php');
} else {
    // Error occurred during the update
    echo "Error updating record: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
