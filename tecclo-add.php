<?php include('header.php');
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys1")
?>


<div class="content-body py-3">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #00ffff; color: black;">
                    Teacher Add CLO</h4>
                <div class="basic-form">
                    <form action="insert-teacher.php " method="Post" id="cloInsert" class="cloInsert">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold text-dark">Teacher name</label>

                                <select id="cloInsert" class="form-control" name="drname">
                                    <option value="" selected>Teacher name</option>
                                    <option value="Dr.Azam">Dr.Azam</option>
                                    <option value="zohair hider">zohair hider</option>
                                    <option value="nasir hussain">nasir hussain</option>
                                    <option value="imran Al">imran Ali</option>
                                    <option value="Dr.hamaid ghous">Dr.hamaid ghous</option>
                                    <option value="zeeshan hider">zeeshan hider</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold text-dark">Teacher ID</label>

                                <select name="cloname" id="cloInsert" class="form-control">
                                    <option value="invoice" selected>Teacher ID</option>
                                    <option value="03">03</option>
                                    <option value="14">14</option>
                                    <option value="16">16</option>
                                    <option value="04">04</option>
                                    <option value="07">07</option>
                                    <option value="10">10</option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark">Teacher add PLO</label>
                            <select name="addplo" id="cloInsert" class="form-control">
                                <option selected>Teacher add Plo</option>
                                <option="4">4</option=>
                                    <option="3">3</option=>
                                        <option="2">2</option=>
                            </select>
                        </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold text-dark">Teacher add Bt-level</label>
                        <select name="addbt" id="cloInsert" class="form-control">
                            <option value="" selected>Teacher add Bt-level</option>
                            <option value="c2">c2</option>
                            <option value="c3">c3</option>
                            <option value="c4">c4</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold text-dark">Teacher add CLO Question</label>
                        <input name="addquestion" type="text" class="form-control" placeholder="Teacher Enter CLO's Question">
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

                <button type="submit" name="btn" style="background-color: #00ffff; color: black; " class="btn">Submit</button>

                <button style="background-color: #00ffff; color: black; " class="btn"><a href="view.php">view</a></button>


            </div>
        </div>
    </div>
</div>


<!-- #/ container -->
</div>