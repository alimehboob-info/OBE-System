<?php
if (isset($_POST["btn"])) {
    $SRno1= $_POST['SRno'];
    $Plokeyword1 = $_POST['Plokeyword'];
    $plo1 = $_POST['plo2'];
    $clokeyword1 = $_POST['clokeyword'];
    $clo1= $_POST['clo2'];
   





    $conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
    $query = "INSERT INTO `bloom_texonomy`(`sr_no`, `plo_key`, `plo`, `clo_key`, `clo`) VALUES ('$SRno1','$Plokeyword1',' $plo1','$clokeyword1',' $clo1')";
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
