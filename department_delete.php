<?php
$conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
$department_id = $_GET['id'];
$query = "DELETE FROM `add_department` WHERE dep_id = $department_id";
$res = mysqli_query($conn, $query) or die("Query failed");
if ($res) {
    echo '<script>alert("Record Delete Successfully")</script>';
    header('Location: department-view.php ');
}
