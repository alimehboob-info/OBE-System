<?php
include('header.php');
include 'config.php';

$query = "SELECT * FROM teacher_password";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Teachers</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+TTO5zJmz2If0zgTjET9e3ZP6PqqxFl3O2rt1KjZ5v5T2Xfj" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">View Teachers</h1>
        <hr>
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Teacher Information</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Teacher Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th> <!-- Add Action column for Edit and Delete buttons -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['teacher_name'] . "</td>";
                                    echo "<td>" . $row['teacher_email'] . "</td>";
                                    echo "<td>" . $row['teacher_phone'] . "</td>";
                                    echo '<td>
                                            <a href="teacher_edit.php?id=' . $row['teacher_id'] . '" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="teacher_delete.php?id=' . $row['teacher_id'] . '" class="btn btn-danger btn-sm">Delete</a>
                                          </td>';
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>