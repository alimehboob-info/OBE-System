<?php include('header.php');
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys1")
?>


<div class="content-body py-3">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #006400; color: white;">
                    Add Presentation </h4>
                <div class="basic-form">
                    <form action="Presentation-insert.php " method="Post" id="cloInsert" class="cloInsert">
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
                                <label class="font-weight-bold text-dark">Department</label>

                                <select name="Departmentname" id="cloInsert2" class="form-control">
                                    <option value="" selected>Department name</option>
                                    <option value="BSCS">BSCS</option>
                                    <option value="BSIT">BSIT</option>
                                    <option value="ADPCS">ADPCS</option>

                                </select>




                            </div>



                        </div>




                        <div class="form-group col-md-4">
                            <label class="font-weight-bold text-dark">course name</label>

                            <select name="coursename" id="cloInsert5" class="form-control">
                                <option value="" selected>course name</option>
                                <option value="DLD">DLD</option>
                                <option value="OOP">OOP</option>
                                <option value="Data structure">Data structure</option>
                            </select>


                        </div>
                        <div class="form-group col-md-4">
                            <label class="font-weight-bold text-dark">Presentation week</label>

                            <select name="presentationweak" id="cloInsert6" class="form-control">
                                <option value="" selected>Presentation week</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>

                        </div>






                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="font-weight-bold text-dark">Presentation content</label>
                                <input name="presentationcontent" type="text" class="form-control" placeholder=" Enter Course content">
                            </div>
                        </div>
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

                <a href="Presentation-view.php" class="btn" style="background-color: #00ffff; color: black;">View</a>
            </div>
        </div>
    </div>
</div>


<!-- #/ container -->
</div>