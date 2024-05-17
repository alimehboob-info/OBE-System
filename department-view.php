<?php
$conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
$query = "SELECT * from add_department";
$result = mysqli_query($conn, $query) or die("Query failed");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Department</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="container" style="height: 70px; border-radius: 20px; padding-top: 15px; padding-left: 15px; background-color: #7FFFD4; color: black;">
                    Department Record
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col" style="background-color: #87CEFA; color: black;">Department Name</th>
                    <th scope="col" style="background-color: #87CEFA; color: black;">Department ID</th>
                    <th scope="col" style="background-color: #87CEFA; color: black;">Edit</th>
                    <th scope="col" style="background-color: #87CEFA; color: black;">Delete</th>

                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['department_name'] ?></td>
                        <td><?php echo $row['Department_id'] ?></td>
                        <td>
                            <a class="btn btn-success d-block" href="department_edit.php?id=<?php echo $row['dep_id'] ?>">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger d-block" href="department_delete.php?id=<?php echo $row['dep_id'] ?>">Delete
                            </a>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>