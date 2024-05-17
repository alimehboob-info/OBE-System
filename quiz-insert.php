<?php
if (isset($_POST["btn"])) {
    $techername1 = $_POST['techername'];
    $Departmentname1 = $_POST['Departmentname'];
    $semester3 = $_POST['Semester'];
    $session3 = $_POST['session1'];
    $coursename2 = $_POST['coursename'];
    $lectureno2 = $_POST['lectureno'];
    $addclo2 = $_POST['addclo'];
    $plo1 = $_POST['plo'];
    $quiz1 = $_POST['quiz'];
    $coursecontent1 = $_POST['coursecontent'];

    $conn = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("Connection Failed");

    // Corrected SQL query with proper variable interpolation
    $query = "INSERT INTO `add_quiz`(`teacher_name`, `Department name`, `semester`, `session`, `course_name`, `lecture_no`, `add_clo`, `plo`, `course_content`,`quiz_no`) VALUES ('$techername1', '$Departmentname1', '$semester3', '$session3', '$coursename2', '$lectureno2', '$addclo2', '$plo1', '$coursecontent1','$quiz1')";

    $result = mysqli_query($conn, $query) or die("Query failed");

    if ($result) {
        echo '<script>';
        echo 'if (confirm("Are you sure you want to insert the record?")) {';
        echo '  alert("Record inserted successfully");';
        echo '  window.location.href = "quiz-add.php";'; // Redirect on success
        echo '} else {';
        echo '  alert("Insertion canceled");';
        echo '}';
        echo '</script>';
    } else {
        echo "Error occurred while inserting the record: " . mysqli_error($conn);
    }
}