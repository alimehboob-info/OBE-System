<?php
if (isset($_POST["btn"])) {
    $clolevel2= $_POST['clolevel'];
    $btlevel2 = $_POST['btlevel'];
    $plo1 = $_POST['plo2'];
    $clodescription1 = $_POST['clodescription'];
    





    $conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
    $query = "INSERT INTO `add_clo`(`clo_level`, `clo_bt`, `plo`, `clo_dec`) VALUES ('$clolevel2','$btlevel','$plo1 ','$clodescription1')";
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
