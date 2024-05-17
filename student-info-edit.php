<?php


include('header.php');
include('functions.php');

$getID = $_GET['id'];

// Connect to the database
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

// output any connection error
if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}

// the query
$query = "SELECT * FROM student WHERE student_info = '" . $mysqli->real_escape_string($getID) . "'";

$result = mysqli_query($mysqli, $query);

// mysqli select query
if($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		

		$student_name = $row['student_name']; // invoice number
		$Email = $row['Email']; // invoice custom email body
		$semester = $row['semester']; // invoice date
		$Father_name = $row['Father_name']; // invoice due date
		$cell_no = $row['cell_no']; // invoice sub-total
		$student_cnic= $row['shipping']; // invoice shipping amount
		$Gender= $row['gender']; // invoice discount
		$Department = $row['Department'];
	}
}

/* close connection */
$mysqli->close();

?>

<h1>Edit Product</h1>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
						
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Editing student (<?php echo $getID; ?>)</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<form method="post" id="update_student_info">
					<input type="hidden" name="action" value="update_student_info">
					<input type="hidden" name="id" value="<?php echo $getID; ?>">
					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control required" name="student_name" placeholder="Enter student name" value="<?php echo $student_name; ?>">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control required" name="Email" placeholder="Enter Email " value="<?php echo $Email; ?>">
						</div>
						<div class="col-xs-4">
							<div class="input-group">
								<span class="input-group-addon"><?php echo CURRENCY ?></span>
								<input type="text" name="Email" class="form-control required" placeholder="0.00" aria-describedby="sizing-addon1" value="<?php echo $Email; ?>">
							</div>
							<div class="col-xs-4">
							<input type="text" class="form-control required" name="semester" placeholder="Enter semester " value="<?php echo $semester; ?>">
						</div>
						<div class="col-xs-4">
							<div class="input-group">
								<span class="input-group-addon"><?php echo CURRENCY ?></span>
								<input type="text" name="semester" class="form-control required" placeholder="0.00" aria-describedby="sizing-addon1" value="<?php echo $semester; ?>">
							</div>
							<div class="col-xs-4">
							<input type="text" class="form-control required" name="cell_no" placeholder="Enter cell_no " value="<?php echo $Email; ?>">
						</div>
						<div class="col-xs-4">
							<div class="input-group">
								<span class="input-group-addon"><?php echo CURRENCY ?></span>
								<input type="text" name="cell_no" class="form-control required" placeholder="0.00" aria-describedby="sizing-addon1" value="<?php echo $cell_no; ?>">
							</div>
							<div class="col-xs-4">
							<input type="text" class="form-control required" name="student_cnic" placeholder="Enter student cnic " value="<?php echo $Email; ?>">
						</div>
						<div class="col-xs-4">
							<div class="input-group">
								<span class="input-group-addon"><?php echo CURRENCY ?></span>
								<input type="text" name="student_cnic" class="form-control required" placeholder="0.00" aria-describedby="sizing-addon1" value="<?php echo $student_cnic; ?>">
							</div>
							<div class="col-xs-4">
							<input type="text" class="form-control required" name="department" placeholder="Enter department " value="<?php echo $Department; ?>">
						</div>
						<div class="col-xs-4">
							<div class="input-group">
								<span class="input-group-addon"><?php echo CURRENCY ?></span>
								<input type="text" name="department" class="form-control required" placeholder="0.00" aria-describedby="sizing-addon1" value="<?php echo $Department; ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<input type="submit" id="action_update_student_info" class="btn btn-success float-right" value="update_student_info" data-loading-text="Updating...">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<div>

<?php
	include('footer.php');
?>