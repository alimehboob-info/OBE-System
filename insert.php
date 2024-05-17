<?php
if (isset($_POST["btn"])) {
	$depart1 = $_POST['department_name'];
	$studname1 = $_POST['studname'];
	$stdfathername1 = $_POST['stdfathername'];
	$email1 = $_POST['email'];
	$semester1 = $_POST['semester'];
	$cellno1 = $_POST['cellno'];
	$cnic1 = $_POST['cnic'];
	$conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
	$query = "INSERT INTO `student_info`( `student _name`, `Father_name`, `Email`, `sem`, `cell_no`, `student_cnic`) VALUES ('{$studname1}','{$stdfathername1}','{$email1}','{$semester1}','{$cellno1}','{$cnic1}')";
	$result = mysqli_query($conn, $query) or die("uery failed");
	if ($result) {
		echo '<script>alert("Record inserted successfully");</script>';
	} else {
		echo '<script>alert("Failed to insert record");</script>';
	}
}
