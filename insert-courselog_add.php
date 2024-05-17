<?php
include('header.php');


    $conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");

if (isset($_POST["btn"])) {
    $Tecname1 = $_POST['Tecname'];
     //$id1 = $_POST['id'];
    $programname1 = $_POST['programename'];
    $semester1 = $_POST['semester'];
    $coursecode1 = $_POST['coursecode'];
    $credithr11 = $_POST['credithr'];
     $session1 = $_POST['session'];
    $addcoursename1 = $_POST['addcoursename'];
     $addlectureno1 = $_POST['addlectureno'];
     $addlectweek1 = $_POST['addlectweek'];
       $addcoursercont1 = $_POST['coursecontent'];
       $addclo1=$_POST['addclo'];
       $addplo1=$_POST['addplo'];

    
      

    $query = "INSERT INTO `courselog_add`(`Teachername`, `coursename`, `lectureno`, `lectureweek`, `program`, `semester`, `course_code`, `credit_hrs`, `session`, `course_content`, `clo`, `plo`) VALUES (' $Tecname1','  $addcoursename1',' $addlectureno1','addlectweek1 ',' $programname1',' $semester1',' $coursecode1',' $credithr11',' $session1',' $addcoursercont1','$addclo1','$addplo1')";
    $result = mysqli_query($conn, $query) or die("uery failed");
    if ($result) {
        echo '<script>confirm("are you sure to insert record if record insert once you connot be edit or delete record");</script>';
        if('confirm'==true){
            '<script>alert("record insert successfull");</script>';
        }else{
            echo '<script>alert("Failed to insert record");</script>';
        }
    } else {
        echo "Error occur while insert record";
    }
}
