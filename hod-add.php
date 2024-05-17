<?php include('header.php');
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys1")
?>


<div class="content-body py-3">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #006400; color: white;">
                    Add ASSIGNMENT </h4>
                <div class="basic-form">
                    <form action="Assignments-insert.php " method="Post" id="cloInsert" class="cloInsert">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">Teacher name</label>

                                <select id="cloInsert1" class="form-control" name="techername">
                                    <option value="" selected>Teacher name</option>
                                    <option value="Dr.Azam">Dr.Azam</option>
                                    <option value="zohair hider">zohair hider</option>
                                    <option value="nasir hussain">nasir hussain</option>
                                    <option value="imran Al">imran Ali</option>
                                    <option value="Dr.hamaid ghous">Dr.hamaid ghous</option>
                                    <option value="zeeshan hider">zeeshan hider</option>
                                </select>
                            </div>
                            


                            
                            
                             
                           
                    
                       
               <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">Subject name</label>

                                <select name="coursename" id="cloInsert5" class="form-control">
                                    <option value="" selected>course name</option>
                                    <option value="DLD">DLD</option>
                                    <option value="OOP">OOP</option>
                                    <option value="Data structure">Data structure</option>
                                </select>


                            </div>
                      <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">Assignment no1</label>

                                <select name="lectureno" id="cloInsert6" class="form-control">
                                    <option value="" selected>Assignment NO</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                     <option value="4">4</option>
                                     
                                </select>

                                   </div> 
                                    <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">Assignment no2</label>

                                <select name="lectureno" id="cloInsert6" class="form-control">
                                    <option value="" selected>Assignment NO</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                     <option value="4">4</option>
                                     
                                </select>

                                   </div> 
                                    <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">Assignment no3</label>

                                <select name="lectureno" id="cloInsert6" class="form-control">
                                    <option value="" selected>Assignment NO</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                     <option value="4">4</option>
                                     
                                </select>

                                   </div> 
                                    <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">Assignment no4</label>

                                <select name="lectureno" id="cloInsert6" class="form-control">
                                    <option value="" selected>Assignment NO</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                     <option value="4">4</option>
                                     
                                </select>

                                   </div> 
                                    <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">Quiz no1</label>

                                <select name="lectureno" id="cloInsert6" class="form-control">
                                    <option value="" selected>Quiz NO</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                     <option value="4">4</option>
                                     
                                </select>

                                   </div> 

                                   </div> 
                                    <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">Quiz no2</label>

                                <select name="lectureno" id="cloInsert6" class="form-control">
                                    <option value="" selected>Quiz NO</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                     <option value="4">4</option>
                                     
                                </select>

                                   </div> 

                                   </div> 
                                    <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">Quiz no3</label>

                                <select name="lectureno" id="cloInsert6" class="form-control">
                                    <option value="" selected>Quiz NO</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                     <option value="4">4</option>
                                     
                                </select>

                                   </div> 

                                   </div> 
                                    <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">Quiz no4</label>

                                <select name="lectureno" id="cloInsert6" class="form-control">
                                    <option value="" selected>Quiz NO</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                     <option value="4">4</option>
                                     
                                </select>

                                   </div> 

                                       
                                   
                 


                <!-- <h4 class="card-title font-weight-bold text-dark">CLO's Description</h4>
                                <div classs="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <textarea name="clodes" placeholder="Enter Description" class="form-control h-150px" rows="6" id="comment"></textarea>
                                        </div>
                                    </form>
                                </div> -->

                <button type="submit" name="btn" style="background-color: #006400; color: white; " class="btn">submit</button>

                <button style="background-color: #00ffff; color: black; " class="btn"><a href="Assignment.view.php">view</a></button>


            </div>
        </div>
    </div>
</div>


<!-- #/ container -->
</div>


<?php include('footer.php');

?>