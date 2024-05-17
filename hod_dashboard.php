<?php
session_start();
// Step 1: Connect to the database
$servername = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "invoicemgsys1"; // Change this to your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Fetch records from add_assignment and add_quiz tables
$sql = "SELECT aa.teacher_name, aa.course_name, aa.lecture_no, aa.course_content, aa.assignment_no, aq.quiz_no
        FROM add_assignment aa
        INNER JOIN add_quiz aq ON aa.teacher_name = aq.teacher_name";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <!-- Include Bootstrap 4 CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn {
            width: 10%;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h3 class="text-center">Assignment And Quiz Record</h3>
        <table class="table table-bordered table-striped mt-3 shadow">
            <thead class="bg-primary text-light">
                <tr>
                    <th>Teacher Name</th>
                    <th>Course Name</th>
                    <th>Lecture No</th>
                    <th>Course Content</th>
                    <th>Assignment No</th>
                    <th>Quiz No</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop through the fetched records and display them in the table
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["teacher_name"] . "</td>";
                    echo "<td>" . $row["course_name"] . "</td>";
                    echo "<td>" . $row["lecture_no"] . "</td>";
                    echo "<td>" . $row["course_content"] . "</td>";
                    echo "<td>" . $row["assignment_no"] . "</td>";
                    echo "<td>" . $row["quiz_no"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="logout.php" class="btn btn-outline-danger ">logout</a>
    </div>

    <!-- Include Bootstrap 4 JS and jQuery (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php
// Close the database connection
$conn->close();
?>