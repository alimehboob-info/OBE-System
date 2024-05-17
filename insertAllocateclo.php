<?php
if (isset($_POST["btn"])) {
    $addclo1 = $_POST['addclo'];
    $addplo1 = $_POST['addplo'];
    $topic1 = $_POST['topic'];

    $conn = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("Connection Failed");
    
    // Corrected SQL query with proper variable interpolation
    $query = "INSERT INTO `allocate_clo`(`add_clo`, `add_plo`, `topics`) VALUES ('$addclo1', '$addplo1', '$topic1')";
    
    $result = mysqli_query($conn, $query) or die("Query failed");

    if ($result) {
        // Use JavaScript confirm dialog and alert for user feedback
        echo '<script>';
        echo 'if (confirm("Are you sure you want to insert the record?")) {';
        echo '  alert("Record inserted successfully");';
        echo '  window.location.href = "TeacherAllocate_add.php";'; // Redirect on success
        echo '} else {';
        echo '  alert("Insertion canceled");';
        echo '}';
        echo '</script>';
    } else {
        echo "Error occurred while inserting the record: " . mysqli_error($conn);
    }
}
