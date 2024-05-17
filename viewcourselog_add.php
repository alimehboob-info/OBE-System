<?php
$conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
$query = "SELECT * from courselog_add";
$result = mysqli_query($conn, $query) or die("uery failed");
if (mysqli_num_rows($result) > 0) {

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>view courselog</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="container" style="height: 70px; border-radius: 20px; padding-top: 15px; padding-left: 15px; background-color : #7FFFD4; color: black;">
                        Course log Adding Record </h2>
                    <div class="basic-form">

                    </div>

                </div>

            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col" style="height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black" ;>
                            Teacher ID</th>
                        <th scope="col" style="height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black" ;>
                            Teacher name</th>
                        <th scope="col" style="height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black" ;>
                            course name</th>
                        <th scope="col" style="height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black" ;>
                            lecture no</th>
                        <th scope="col" style="height: 50px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black" ;>
                            lecture week</th>

                        <th scope="col" style="height: 60px; border-radius: 15px; padding-top: 12px; padding-left: 20px; background-color : #87CEFA; color: black" ;>
                            semester</th>
                        <th scope="col" style="height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black" ;>
                            course code</th>
                        <th scope="col" style="height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black" ;>
                            credit_hrs</th>
                        <th scope="col" style="height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black" ;>
                            session</th>
                        <th scope="col" style="height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black" ;>
                            course content</th>
                        <th scope="col" style="height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black" ;>
                            clo</th>
                        <th scope="col" style="height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black" ;>
                            plo</th>
                        <th scope="col" style="height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black" ;>
                            Edit</th>
                        <th scope="col" style="height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black" ;>
                            Delete</th>
                    </tr>
                    </tr>

                    </tr>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {


                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['Teacherid'] ?></th>
                            <td><?php echo $row['Teachername'] ?></td>

                            <td><?php echo $row['coursename'] ?></td>
                            <td><?php echo $row['lectureno'] ?></td>
                            <td><?php echo $row['lectureweek'] ?></td>

                            <td><?php echo $row['semester'] ?></td>
                            <td><?php echo $row['course_code'] ?></td>
                            <td><?php echo $row['credit_hrs'] ?></td>
                            <td><?php echo $row['session'] ?></td>
                            <td><?php echo $row['course_content'] ?></td>
                            <td><?php echo $row['clo'] ?></td>
                            <td><?php echo $row['plo'] ?></td>
                            <td><a href="id" class="btn btn-primary">Edit</a></td>
                            <td><a href="a" class="btn btn-danger">Delete</a></td>




                        </tr>
                    <?php  }  ?>
                </tbody>
            </table>
            <td><a href="clo-plo-mapping.php" class="btn btn-primary">Add</a></td>
        <?php   }
        ?>
    </body>

    </html>