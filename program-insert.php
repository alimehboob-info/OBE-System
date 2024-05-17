<?php
if (isset($_POST["btn"])) {
    $Departmentname1 = $_POST['Departmentname'];
    $programname1 = $_POST['programname'];
    $techername1 = $_POST['techername'];

    $conn = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("Connection Failed");

    $query = "INSERT INTO `add_programs` (`department_name`, `program_name`, `programe_teacher`) VALUES ('$Departmentname1', '$programname1', '$techername1')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script>alert("Record inserted successfully");</script>';
        // Delay the redirection by 2 seconds (2000 milliseconds)
        echo '<script>
        setTimeout(function()
        { window.location.href = "programe-add.php"; }, 1000);</script>';
    } else {
        echo '<script>alert("Failed to insert record");</script>';
    }
}
