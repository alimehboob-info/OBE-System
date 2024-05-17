<?php
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys1");

// Check for connection errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if 'id' is set in the URL
if (isset($_GET['id'])) {
    $prog_id = $_GET['id'];

    $query = "SELECT * FROM add_programs WHERE program_id = $prog_id";
    $result = mysqli_query($conn, $query) or die("Query failed");

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $program_id = $row['program_id'];
        $department_name = $row['department_name'];
        $program_name = $row['program_name'];
        $program_teacher = $row['programe_teacher'];

        // Fetch all teacher names
        $teacher_query = "SELECT DISTINCT programe_teacher FROM add_programs";
        $teacher_result = mysqli_query($conn, $teacher_query) or die("Teacher query failed");
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Program</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <style>
                .center_content {
                    width: 500px;
                    height: 100vh;
                    margin: 40px auto;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    backdrop-filter: blur(5px);
                }

                .btn {
                    width: 20%;
                    display: block;
                    margin: 0 auto;
                }

                body {
                    background: url(./images/bgisp.jpg) no-repeat center;
                    background-size: cover;
                }
            </style>
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center_content shadow-lg">
                        <form action="programs_update.php" method="POST">
                            <h3 class="text-center bg-success text-white">Update Programs Record</h3>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Department Name</label>
                                <!-- Add a hidden input field to store program_id -->
                                <input type="hidden" name="program_id" value="<?= $program_id ?>">
                                <input type="text" class="form-control" id="exampleInputEmail1" name="department_name" value="<?= $department_name ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Program Name</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="Department_id1" value="<?= $program_name ?>">
                            </div>
                            <div class="mb-3">
                                <label for="program_teacher" class="form-label">Select a Teacher</label>
                                <select name="program_teacher" id="program_teacher" class="form-control">
                                    <?php
                                    while ($teacher_row = mysqli_fetch_assoc($teacher_result)) {
                                        $teacher_name = $teacher_row['programe_teacher'];
                                        $selected = ($teacher_name == $program_teacher) ? 'selected' : '';
                                        echo "<option $selected>$teacher_name</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" name="btn" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </body>

        </html>
<?php
    } else {
        echo "No program found with the specified ID.";
    }
} else {
    echo "ID parameter is missing in the URL.";
}

// Close the database connection
mysqli_close($conn);
?>