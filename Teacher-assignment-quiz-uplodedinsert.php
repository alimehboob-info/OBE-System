<?php
if (isset($_POST["btn"])) {
    $techername1 = $_POST['techername'];
    $assignment11 = $_POST['assignment1'];
    $assignment12 = $_POST['assignment2'];
    $assignment13 = $_POST['assignment3'];
    $assignment14= $_POST['assignment4'];
    $quiz11 = $_POST['quiz12'];
    $quiz22 = $_POST['quiz13'];
    $quiz33 = $_POST['quiz14'];
    $quiz44= $_POST['quiz15'];
    $subjectname1= $_POST['subjectname'];





    $conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
    $query = "INSERT INTO `teacher_upload`(`teacher_name`, `assig_1`, `assig_2`, `assig_3`, `assig_4`, `quiz1`, `quiz2`, `quiz3`, `quiz4`, `subject_name`) VALUES ('$techername1 ',' $assignment11','$assignment12','$assignment13 ',' $assignment14',' $quiz11','$quiz22','$quiz33 ','$quiz44','$subjectname1')";
    $result = mysqli_query($conn, $query) or die("uery failed");
    if ($result) {
        echo '<script>confirm("are u sure to insert record");</script>';
        if('confirm'==true){
            '<script>alert("record insert successfull");</script>';
        }else{
            echo '<script>alert("Failed to insert record");</script>';
        }
    } else {
        echo "Error occur while insert record";
    }
}
