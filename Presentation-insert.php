<?php
if (isset($_POST["btn"])) {
    $techername1 = $_POST['techername'];
    $Departmentname1 = $_POST['Departmentname'];
    $coursename2 = $_POST['coursename'];
    $presentationweak1 = $_POST['presentationweak'];
    $presentationcontent1 = $_POST['presentationcontent'];

    $conn = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
    
    // Corrected SQL query with proper variable interpolation
    $query = "INSERT INTO `add_presentation`(`teacher_name`, `Department name`, `subject_name`, `presentation_weak`, `presentation_content`) VALUES ('$techername1', '$Departmentname1', '$coursename2', '$presentationweak1', '$presentationcontent1')";
    
    $result = mysqli_query($conn, $query) or die("Query failed");
    
    if ($result) {
        $confirm = '<script>confirm("Are you sure to insert record?");</script>';
        if ($confirm) {
            echo '<script>alert("Record inserted successfully");</script>';
            echo '<script>window.location.href = "Presentation-add.php";</script>'; // Redirect on success
        } else {
            echo '<script>alert("Insertion canceled");</script>';
        }
    } else {
        echo "Error occurred while inserting the record: " . mysqli_error($conn);
    }
}
