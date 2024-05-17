<?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle the form submission for editing the record
    $id = mysqli_escape_string($conn, $_POST['id']);
    $teacher_name = mysqli_escape_string($conn, $_POST['username']);
    $teacher_email = mysqli_escape_string($conn, $_POST['email']);
    $teacher_phone = mysqli_escape_string($conn, $_POST['phone']);

    $query = "UPDATE teacher_password SET teacher_name='$teacher_name', teacher_email='$teacher_email', teacher_phone='$teacher_phone' WHERE teacher_id='$id'";

    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Record updated successfully");</script>';
        // Redirect to teacher_view.php
        header('Location: teacher_view.php');
        exit; // Make sure to exit after the redirect
    } else {
        echo '<script>alert("Failed to update record");</script>';
    }
}

if (isset($_GET['id'])) {
    $id = mysqli_escape_string($conn, $_GET['id']);
    $query = "SELECT * FROM teacher_password WHERE teacher_id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Teacher</h1>
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
                        <form method="post" id="edit_user" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input type="hidden" name="id" value="<?php echo $row['teacher_id']; ?>"> <!-- Change 'id' to 'teacher_id' here -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Enter Teacher name</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Teacher name" value="<?php echo $row['teacher_name']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Enter Teacher's email address</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Teacher's email address" value="<?php echo $row['teacher_email']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Enter Teacher's phone number</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Teacher's phone number" value="<?php echo $row['teacher_phone']; ?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" id="action_edit_user" class="btn btn-primary">Update User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>