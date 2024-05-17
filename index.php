<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Get the selected user type from the form
	$userType = $_POST["user_type"];

	// Assuming you have a database connection established
	// Replace "your_db_host", "your_db_username", "your_db_password", and "invoicemgsys1" with your actual database details.
	$conn = new mysqli("localhost", "root", "", "invoicemgsys1");

	// Check if the connection was successful
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// Prepare the query based on the selected user type
	$query = "";
	$dashboard = "";

	if ($userType === "ADMIN") {
		$query = "SELECT * FROM admin_login WHERE email = ? AND password = ?";
		$dashboard = "dashboard.php";
	} elseif ($userType === "HOD") {
		$query = "SELECT * FROM hod_login WHERE email = ? AND password = ?";
		$dashboard = "hod_dashboard.php";
	} elseif ($userType === "OBE Cordinator") {
		$query = "SELECT * FROM obe_cordinator_login WHERE email = ? AND password = ?";
		$dashboard = "obe_cordinator_dashboard.php";
	}

	// Prepare and bind the query
	$stmt = $conn->prepare($query);
	$stmt->bind_param("ss", $_POST["username"], $_POST["password"]);
	$stmt->execute();
	$result = $stmt->get_result();

	// Check if the login was successful
	if ($result->num_rows === 1) {
		// Start the session and save user data if needed
		session_start();
		$_SESSION["user_type"] = $userType;
		// Redirect to the respective dashboard
		header("Location: " . $dashboard);
		exit();
	} else {
		// Login failed, show an error message or perform other actions
		$error_message = "Invalid username or password.";
	}

	// Close the connection
	$stmt->close();
	$conn->close();
}
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>OBE System</title>

	<!-- JS -->


	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.datetimepicker.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">

	<style>
		@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);

		body,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: 'Open Sans', sans-serif;
		}

		.input-group-addon {
			width: 15%;
			background: green;
		}

		i {
			color: white;
		}

		.form-control {
			font-size: 12px;
		}
	</style>

</head>

<body>
	<div class="container">
		<div class="row vertical-offset-100">
			<div class="col-md-12 d-flex justify-content-center">
				<div class="card shadow mt-5">
					<div class="card-header bg-success shadow text-white text-center">
						<h3>OBE System</h3>
					</div>
					<div class="card-body shadow">

						<div class="panel panel-default login-panel">
							<div class="bg-dark shadow">
								<h1 class="text-center">
									<img src="images/isplogo.png">
								</h1>
								<div id="response" class="alert alert-success" style="display:none;">
									<a href="#" class="close" data-dismiss="alert">&times;</a>
									<div class="message"></div>
								</div>
							</div>
							<div class="panel-body">
								<form accept-charset="UTF-8" role="form" method="post">
									<input type="hidden" name="action" value="login">
									<fieldset>
										<div class="input-group form-group">
											<div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
											<input class="form-control required" name="username" id="username" type="text" placeholder="Enter Username">
										</div>
										<div class="input-group form-group">
											<div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
											<input class="form-control required" placeholder="Password" name="password" type="password" placeholder="Enter Password">
										</div>

										<div class="mb-1">
											<label class="form-label">Select User Type:</label>
										</div>
										<select class="form-select mb-3 bg-success text-white shadow" name="user_type" aria-label="Default select example">
											<option selected value="ADMIN">ADMIN</option>
											<option value="HOD">HOD</option>
											<option value="OBE Cordinator">OBE Cordinator</option>
										</select>
										<div class="checkbox">
											<label>
												<input name="remember" type="checkbox" value="Remember Me"> Remember Me
											</label>
											<!--a href="forgot.php" class="float-right">Forgot password?</a-->
										</div>
										<button type="submit" class="btn btn-primary btn-block shadow">Login</button><br>

										<!-- Display error message if set -->
									</fieldset>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>

</html>