<?php
$conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
$department_id = $_GET['id'];
$query = "DELETE FROM `add_programs` WHERE program_id= $department_id";
$res = mysqli_query($conn, $query) or die("Query failed");
if ($res) {
    echo '<script>alert("Record Delete Successfully")</script>';
    header('Location: programe-view.php');
}
