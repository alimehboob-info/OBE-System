<?php include('header.php');
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys1")
?>


<div class="content-body py-3">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #00ffff; color: black;">
                    Teacher Allocate CLO</h4>
                <div class="basic-form">
                    <form action="insertAllocateclo.php " method="Post" id="cloInsert" class="cloInsert">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold text-dark">Teacher Add clo</label>

                                <select id="cloInsert" class="form-control" name="addclo">
                                    <option value="" selected>Add clo</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold text-dark">Plo</label>

                                <select name="addplo" id="cloInsert" class="form-control">
                                    <option value="invoice" selected>PLo</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>

                                </select>

                            </div>


                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="font-weight-bold text-dark">Teacher add CLO with Topic</label>
                                    <input name="topic" type="text" class="form-control" placeholder="Teacher Enter CLO's Topic">
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

                            <button type="submit" name="btn" style="background-color: #00ffff; color: black; " class="btn">submit</button>

                            <a href="view.allocationclo" class="btn" style="background-color: #00ffff; color: black;">View</a>



                        </div>
                </div>
            </div>
        </div>


        <!-- #/ container -->
    </div>
</div>