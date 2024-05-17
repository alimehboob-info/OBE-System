<?php
if (isset($_POST["btn"])) {
    $programname2 = $_POST['programname'];
   
    $credithrs2= $_POST['credithrs'];
    $session2 = $_POST['session'];   
     $coursenam2 = $_POST['coursenam'];   
      $semester2 = $_POST['semesters'];   

    $conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
    $query = "INSERT INTO `scheme_of_study`(`program _name`, `credit hrs`, `session`, `coursename`, `semester`) 
     VALUES ('{  $programname2}','{ $credithrs2}','{ $session2}','{coursenam2}','{$semester2}')";
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