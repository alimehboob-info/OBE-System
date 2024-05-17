<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$teacher_name = mysqli_escape_string($conn, $_POST['username']);
	$teacher_email = mysqli_escape_string($conn, $_POST['email']);
	$teacher_phone = mysqli_escape_string($conn, $_POST['phone']);
	$teacher_password = mysqli_escape_string($conn, md5($_POST['password']));
	$query = "INSERT INTO `teacher_password`(`teacher_name`, `teacher_email`, `teacher_phone`, `teacher_password`) VALUES ('$teacher_name','$teacher_email','$teacher_phone','$teacher_password')";
	exit();
	if (mysqli_query($conn, $query)) {
		echo '<script>alert("Record inserted successfully");</script>';
	} else {
		echo '<script>alert("Failed to insert record");</script>';
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Teacher</title>
	<!-- Include Bootstrap CSS and JavaScript -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<div class="container mt-5">
		<h1 class="text-center">Add Teacher</h1>
		<hr>

		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Teacher Information</h4>
					</div>
					<div class="card-body">
						<form method="post" id="add_user" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<div class="mb-3">
								<label for="username" class="form-label">Enter Teacher name</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Enter Teacher name" required>
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Enter Teacher's email address</label>
								<input type="text" class="form-control" id="email" name="email" placeholder="Enter Teacher's email address" required>
							</div>
							<div class="mb-3">
								<label for="phone" class="form-label">Enter Teacher's phone number</label>
								<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Teacher's phone number">
							</div>
							<div class="mb-3">
								<label for="password" class="form-label">Enter password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
							</div>
							<div class="mb-3">
								<button type="submit" id="action_add_user" class="btn btn-success">Add User</button>
								<a href="teacher_view.php" class="btn btn-primary">View</a>
							</div>


						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>