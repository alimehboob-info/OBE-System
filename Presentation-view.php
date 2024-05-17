<?php
$conn  = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("connection Failed");
$query = "SELECT * from add_presentation";
$result = mysqli_query($conn, $query) or die("uery failed");
if (mysqli_num_rows($result) > 0) {




?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>view Presentation</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="container" style="height: 70px; border-radius: 20px; padding-top: 15px; padding-left: 15px; background-color : #7FFFD4; color: black;">
                   Presentation Record </h2>
                <div class="basic-form">
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col" style= "height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black";>
                   Teacher name</th>
                    <th scope="col" style= "height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black";>
                   Department</th>
                  
                     <th scope="col" style= "height: 50px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black";>
                  course name</th>
                  
                   <th scope="col" style= "height: 60px; border-radius: 15px; padding-top: 12px; padding-left: 20px; background-color : #87CEFA; color: black";>
                Presentation weak</th>
                   <th scope="col" style= "height: 60px; border-radius: 15px; padding-top: 20px; padding-left: 20px; background-color : #87CEFA; color: black";>
             Presentation content</th>
                
              
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
                        <th scope="row"><?php echo $row['teacher_name'] ?></th>
                        <td><?php echo $row['Department name'] ?></td>
                       
                       
                        
                        <td><?php echo $row['subject_name'] ?></td>
                          
                           <td><?php echo $row['presentation_weak'] ?></td>  
                            <td><?php echo $row['presentation_content'] ?></td>
                             
                     

                    </tr>
                <?php  }  ?>
            </tbody>
        </table>
    <?php   }
    ?>
    </body>

    </html>
  