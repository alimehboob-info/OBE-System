<?php
include('header.php');


    $conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");

if (isset($_POST["btn"])) {
    $clo21 = $_POST['clo2'];
     $clocont1 = $_POST['clocont'];
     
    $plo21 = $_POST['plo21'];
    $plo22= $_POST['plo22'];
     $plo23= $_POST['plo23'];
      $plo24= $_POST['plo24'];
    
      
       

    
      

    $query = "INSERT INTO `clo_plo_mapping`(`clo`, `clo_describation`, `plo1`, `plo2`, `plo3`, `plo4`) VALUES (' $clo21','$clocont1',' $plo21','$plo22','$plo23','$plo24')";
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
