<?php include('header.php'); ?>


<div class="content-body py-3">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="height: 50px; border-radius: 4px; padding-top: 12px; padding-left: 10px; background-color: #1f81e5; color: black;">Add CLO</h4>
                <div class="basic-form">
                    <form action="clos-insert.php " method="Post" id="cloInsert" class="cloInsert">
                        <div class="basic-form">
                            <form id="cloInsert" class="cloInsert">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="font-weight-bold text-dark">CLO Level</label>
                                        <input name="clolevel" type="text" class="form-control" placeholder="Enter CLO level">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="font-weight-bold text-dark">CLO BT-Level</label>
                                        <input name="btlevel" type="text" class="form-control" placeholder="Enter BT-Level">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold text-dark">PLO</label>
                                    <input name="plo2" type="text" class="form-control" placeholder="Enter PLO">
                                </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="font-weight-bold text-dark">CLO Description</label>
                                <input name="clodescription" type="text" class="form-control" placeholder="Enter CLO's Description">
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

                        <button type="submit" style="background-color: #1f81e5; color: black; " class="btn">Submit</button>
                        <button style="background-color: #00ffff; color: black; " class="btn"><a href="clos-view.php">view</a></button>

                        <div id="dataTable"></div>


                </div>
            </div>
        </div>
    </div>


    <!-- #/ container -->
</div>