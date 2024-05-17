<?php
if (isset($_POST["btn"])) {
    $techername2 = $_POST['techername'];
    $Departmentname2 = $_POST['Departmentname'];
    $semester3 = $_POST['Semester'];
    $session3 = $_POST['session1'];
    $coursename3 = $_POST['coursename'];
    $marks1 = $_POST['mark1'];
   





    $conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
    $query = "INSERT INTO `mid_paper`(`teacher_name`, `Department name`, `semester`, `session`, `course_name`, `marks`)  VALUES ('{ $techername2}','{ $Departmentname2}','{ $semester3}','{$session3}','{  $coursename3}','{  $marks1}')";
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
