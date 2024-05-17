<?php
if (isset($_POST["btn"])) {
    $drname1 = $_POST['drname'];
    $addplo1 = $_POST['addplo'];
    $addbt1 = $_POST['addbt'];
    $addquestion = $_POST['addquestion'];
    $conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
    $query = "INSERT INTO `teacher_add_clo`( `Teachername`, `Teacheraddplo`, `TeacheraddBlevel`, `Teacheraddcloq`)  VALUES ('{$drname1}','{$addplo1}','{$addbt1}','{$addquestion}')";
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
