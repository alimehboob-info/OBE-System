<?php
$conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("Connection Failed");
$query = "SELECT * from add_programs";
$result = mysqli_query($conn, $query) or die("Query failed");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Program</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="container" style="height: 70px; border-radius: 20px; padding-top: 15px; padding-left: 15px; background-color: #7FFFD4; color: black;">
                    Program Record
                </h2>
                <div class="basic-form">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col" style="background-color: #87CEFA; color: black;">Department</th>
                    <th scope="col" style="background-color: #87CEFA; color: black;">Program Name</th>
                    <th scope="col" style="background-color: #87CEFA; color: black;">Teacher Name</th>
                    <th scope="col" style="background-color: #87CEFA; color: black;">Action</th>
                    <th scope="col" style="background-color: #87CEFA; color: black;">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['department_name'] ?></td>
                        <td><?php echo $row['program_name'] ?></td>
                        <td><?php echo $row['programe_teacher'] ?></td>
                        <td><a href="program_edit.php?id=<?php echo $row['program_id']; ?>" class="btn btn-success">Edit</a></td>
                        <td><a href="program_delete.php?id=<?php echo $row['program_id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php  }  ?>
            </tbody>
        </table>
    </div>
</body>

</html>