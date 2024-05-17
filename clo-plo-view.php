<?php
$conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
$query = "SELECT * from clo_plo_mapping";
$result = mysqli_query($conn, $query) or die("uery failed");
if (mysqli_num_rows($result) > 0) {




?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>view mapping clo&plo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="container" style="height: 70px; border-radius: 20px; padding-top: 15px; padding-left: 15px; background-color : #00ffff; color: black;">
                  Mapping clo&plo </h2>
                <div class="basic-form">
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col" style= "height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black";>
                   clo</th>
                    <th scope="col" style= "height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black";>
                   clo decription</th>
                    <th scope="col"  style= "height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black";>
                   Plo1</th>
                    <th scope="col"  style= "height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black";>
                    Plo2</th>
                     <th scope="col" style= "height: 50px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black";>
                  Plo3</th>
                  
                   <th scope="col" style= "height: 60px; border-radius: 15px; padding-top: 12px; padding-left: 20px; background-color : #87CEFA; color: black";>
                Plo4</th>
                <th scope="col" style= "height: 60px; border-radius: 15px; padding-top: 12px; padding-left: 20px; background-color : #87CEFA; color: black";>
                Edit</th>
                <th scope="col" style= "height: 60px; border-radius: 15px; padding-top: 12px; padding-left: 20px; background-color : #87CEFA; color: black";>
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
                        <th scope="row"><?php echo $row['clo'] ?></th>
                        <td><?php echo $row['clo_describation'] ?></td>
                       
                        <td><?php echo $row['plo1'] ?></td>
                        <td><?php echo $row['plo2'] ?></td>
                        <td><?php echo $row['plo3'] ?></td>
                          
                           <td><?php echo $row['plo4'] ?></td> 
                           <td><a href="id"class="btn btn-primary">Edit</a></td>
                              <td><a href="a"class="btn btn-danger">Delete</a></td> 
                         
                             
                     

                    </tr>
                <?php  }  ?>
            </tbody>
        </table>
    <?php   }
    ?>
    </body>

    </html>
  