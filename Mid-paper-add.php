<?php include('header.php');
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys1")
    ?>


<div class="content-body py-3">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"
                    style="height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #006400; color: white;">
                    Mid paper </h4>
                <div class="basic-form">
                    <form action="Mid-paper-insert.php " method="Post" id="cloInsert" class="cloInsert">
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
                            <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">semester</label>

                                <select name="Semester" id="cloInsert3" class="form-control">
                                    <option value="" selected>semester</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="3rd">3rd</option>
                                    <option value="4th">4th</option>
                                    <option value="5th">5th</option>
                                    <option value="6th">6th</option>
                                    <option value="7th">7th</option>
                                    <option value="8th">8th</option>
                                </select>


                            </div>

                            <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">session</label>

                                <select name="session1" id="cloInsert4" class="form-control">
                                    <option value="" selected>session</option>
                                    <option value="fall-2019">fall-2019</option>
                                    <option value="fall-2020">fall-2020</option>
                                    <option value="fall-2023">fall-2023</option>
                                    <option value="fall-2024">fall-2024</option>
                                    <option value="fall-2025">fall-2025</option>
                                    <option value="fall-2026">fall-2026</option>
                                    <option value="fall-2027">fall-2027</option>
                                    <option value="fall-2028">fall-2028</option>
                                </select>


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





                        </div>
                        <div class="form-group col-md-4">
                            <label class="font-weight-bold text-dark">Total marks</label>

                            <select name="mark1" id="cloInsert" class="form-control">
                                <option value="" selected>marks</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="30">30</option>

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

                        <button type="submit" name="btn" style="background-color: #006400; color: white; "
                            class="btn">submit</button>

                        <button style="background-color: #00ffff; color: black; " class="btn"><a
                                href="Mid-paper-view.php">view</a></button>


                </div>
            </div>
        </div>
    </div>


    <!-- #/ container -->
</div>