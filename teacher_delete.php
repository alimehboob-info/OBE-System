<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = mysqli_escape_string($conn, $_GET['id']);
    $query = "DELETE FROM teacher_password WHERE teacher_id='$id'";

    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Record deleted successfully");</script>';
    } else {
        echo '<script>alert("Failed to delete record");</script>';
    }
}

header("Location: teacher_view.php"); // Redirect back to the view page
