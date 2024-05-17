<?php include('header.php');
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys1")
?>


<div class="content-body py-3">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #006400; color: white;">
                    SCHEME</h4>
                <div class="basic-form">
                    <form action="insert-scheme.php " method="Post" id="cloInsert17" class="cloInsert">
                        <div class="form-row">


                            <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">Programe </label>

                                <select name="programname" id="cloInsert13" class="form-control">
                                    <option value="" selected>Programe </option>
                                    <option value="ADPIT">ADPIT</option>
                                    <option value="BSCS">BSCS</option>
                                    <option value="BSIT">BSIT</option>
                                    <option value="ADPCS">ADPCS</option>
                                </select>


                            </div>

                            <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">credit hrs</label>

                                <select name="credithrs" id="cloInsert14" class="form-control">
                                    <option value="" selected>credit hrs</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>

                                </select>


                            </div>
                            <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">session</label>

                                <select name="session" id="cloInsert15" class="form-control">
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



                            <div class="form-group col-md-6">
                                <label class="font-weight-bold text-dark">course name</label>

                                <select name="coursenam" id="cloInsert16" class="form-control">
                                    <option value="" selected>course name</option>
                                    <option value="DLD">DLD</option>
                                    <option value="OOP">OOP</option>
                                    <option value="Data structure">Data structure</option>
                                </select>


                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark">semester</label>

                            <select name="semesters" id="cloInsert17" class="form-control">
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






                        <!-- <h4 class="card-title font-weight-bold text-dark">CLO's Description</h4>
                                <div classs="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <textarea name="clodes" placeholder="Enter Description" class="form-control h-150px" rows="6" id="comment"></textarea>
                                        </div>
                                    </form>
                                </div> -->

                        <button type="submit" name="btn" style="background-color: #006400; color: white; " class="btn">submit</button>

                        <button style="background-color: #00ffff; color: black; " class="btn"><a href="view-scheme.php">view</a></button>


                </div>
            </div>
        </div>
    </div>


    <!-- #/ container -->
</div>