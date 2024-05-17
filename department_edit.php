<?php
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys1");
$departemnt_id = $_GET['id'];
$query = "SELECT * from add_department WHERE dep_id = $departemnt_id ";
$result  = mysqli_query($conn, $query) or die("Query failed");
if (mysqli_num_rows($result) > 0) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Department </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .center_content {
                width: 500px;
                height: 100vh;
                margin: 40px auto;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                backdrop-filter: blur(5px);
                /* Adjust blur level */

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
            <div class="row ">
                <div class="col-md-12 center_content shadow-lg">
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <form action="update.php" method="POST">
                            <h3 class="text-center bg-success text-white">Update Departement Record</h3>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Department Name</label>
                                <input type="hidden" name="id" value="<?php echo $row['dep_id']; ?>">
                                <input type="text" class="form-control" id="exampleInputEmail1" name="department_name" value="<?php echo $row['department_name'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Department ID</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="Department_id1" value="<?php echo $row['Department_id'] ?>">
                            </div>
                            <button type="submit" name="btn" class="btn btn-primary">Update</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>

    </body>

    </html>

<?php } ?>