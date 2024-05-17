<?php
$conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
$query = "SELECT * from scheme_of_study";
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
                    <h4 class="container" style="height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #AEB2D5; color: black;">
                   course log Adding Record </h4>
                <div class="basic-form">
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col" style= "height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #7FFFD4; color: black";>
                   Programe name</th>
                    <th scope="col" style= "height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px;  background-color:  #7FFFD4; color: black";>
                credit hrs</th>
                    <th scope="col"  style= "height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #7FFFD4; color: black";>
                   Session</th>
                    <th scope="col"  style= "height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #7FFFD4; color: black";>
                   course name</th>
                    <th scope="col"  style= "height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #7FFFD4; color: black";>
                 Semester</th>
                   
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
                        <th scope="row"><?php echo $row['program _name'] ?></th>
                        <td><?php echo $row['credit hrs'] ?></td>
                       
                        <td><?php echo $row['session'] ?></td>
                        <td><?php echo $row['coursename'] ?></td>
                        <td><?php echo $row['semester'] ?></td>
                        
                    </tr>
                <?php  }  ?>
            </tbody>
        </table>
    <?php   }
    ?>
    </body>

    </html>