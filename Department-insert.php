<?php
if (isset($_POST["btn"])) {
    $Departmentname1 = $_POST['Departmentname'];

    $Departmentid1 = $_POST['Departmentid'];






    $conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
    $query = "INSERT INTO `add_department`(`department_name`, `Department_id`) VALUES ('Departmentname1','$Departmentid1 ')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script>alert("Record inserted successfully");</script>';
        // Delay the redirection by 2 seconds (2000 milliseconds)
        echo '<script>
        setTimeout(function()
        { window.location.href = "Department-add.php"; }, 1000);</script>';
    } else {
        echo '<script>alert("Failed to insert record");</script>';
    }
}
