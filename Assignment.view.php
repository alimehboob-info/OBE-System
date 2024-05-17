<?php
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("Connection Failed");
$query = "SELECT * FROM add_assignment";
$result = mysqli_query($conn, $query) or die("Query failed");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Assignment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        td {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2
                    style="height: 70px; border-radius: 20px; padding-top: 15px; padding-left: 15px; background-color: #1a1b1b; color: black; color:whitesmoke; text-align:center;">
                    Assignment Record
                </h2>
                <div class="basic-form">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <table class="table table-striped table-bordered ">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Teacher Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Session</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Lecture No</th>
                    <th scope="col">CLO</th>
                    <th scope="col">PLO</th>
                    <th scope="col">Assignment No</th>
                    <th scope="col">Course Content</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['teacher_name'] ?>
                        </td>
                        <td>
                            <?php echo $row['Department name'] ?>
                        </td>
                        <td>
                            <?php echo $row['semester'] ?>
                        </td>
                        <td>
                            <?php echo $row['session'] ?>
                        </td>
                        <td>
                            <?php echo $row['course_name'] ?>
                        </td>
                        <td>
                            <?php echo $row['lecture_no'] ?>
                        </td>
                        <td>
                            <?php echo $row['add_clo'] ?>
                        </td>
                        <td>
                            <?php echo $row['plo'] ?>
                        </td>
                        <td>
                            <?php echo $row['assignment_no'] ?>
                        </td>
                        <td>
                            <?php echo $row['course_content'] ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>