<?php include('header.php');
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys1")
?>

<style>
    .btn {
        width: 10%;
        margin-left: 30px;
    }
</style>
<div class="content-body py-3">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #006400; color: white;">
                    Add Programe </h4>
                <div class="basic-form">
                    <form action="program-insert.php " method="Post" id="cloInsert" class="cloInsert">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold text-dark">Department</label>

                                <select name="Departmentname" id="cloInsert2" class="form-control">
                                    <option value="" selected>Department name</option>
                                    <option value="BSCS">BSCS</option>
                                    <option value="BSIT">BSIT</option>
                                    <option value="ADPCS">ADPCS</option>

                                </select>




                            </div>
                            <div class="form-row">


                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold text-dark">Programe name</label>

                                    <select name="programname" id="cloInsert13" class="form-control">
                                        <option value="" selected>Programe </option>
                                        <option value="ADPIT">ADPIT</option>
                                        <option value="BSCS">BSCS</option>
                                        <option value="BSIT">BSIT</option>
                                        <option value="ADPCS">ADPCS</option>
                                    </select>


                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="font-weight-bold text-dark">Programe Teacher </label>

                                        <select id="cloInsert" class="form-control" name="techername">
                                            <option value="" selected>Teacher name</option>
                                            <option value="Dr.Azam">Dr.Azam</option>
                                            <option value="zohair hider">zohair hider</option>
                                            <option value="nasir hussain">nasir hussain</option>
                                            <option value="imran Al">imran Ali</option>
                                            <option value="Dr.hamaid ghous">Dr.hamaid ghous</option>
                                            <option value="zeeshan hider">zeeshan hider</option>
                                        </select>
                                    </div>


                                    <button type="submit" name="btn" style="background-color: #006400; color: white; " class="btn">submit</button>
                                    <a href="programe-view.php" class="btn btn-primary" style="background-color: #00ffff; color: black;">View</a>

                                </div>
                            </div>
                        </div>
                </div>


                <!-- #/ container -->
            </div>
        </div>
    </div>
</div>