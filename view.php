<?php
$conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
$query = "SELECT * from teacher_add_clo";
$result = mysqli_query($conn, $query) or die("uery failed");
if (mysqli_num_rows($result) > 0) {




?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="container" style="height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #AEB2D5; color: black;">
                   Teacher Adding Record </h4>
                <div class="basic-form">
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col" style= "height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #7FFFD4; color: black";>
                   ID</th>
                    <th scope="col" style= "height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #7FFFD4; color: black";>
                   Teacher Name</th>
                    <th scope="col"  style= "height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #7FFFD4; color: black";>
                   Teacher Add Bt Level</th>
                    <th scope="col"  style= "height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #7FFFD4; color: black";>
                   Add CLO Question</th>
                     <th scope="col" style= "height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #7FFFD4; color: black";>
                   Teacher add Plo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {


                ?>
                    <tr>
                        <th scope="row"><?php echo $row['Teacherid'] ?></th>
                        <td><?php echo $row['Teachername'] ?></td>
                        <td><?php echo $row['TeacheraddBlevel'] ?></td>
                        <td><?php echo $row['Teacheraddcloq'] ?></td>
                        <td><?php echo $row['Teacheraddplo'] ?></td>

                    </tr>
                <?php  }  ?>
            </tbody>
        </table>
    <?php   }
    ?>
    </body>

    </html>