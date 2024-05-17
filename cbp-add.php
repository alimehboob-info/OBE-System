<?php include('header.php'); ?>


<div class="content-body py-3">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="height: 50px; border-radius: 4px; padding-top: 12px; padding-left: 10px; background-color: #7fff00; color: black;">Add Clo & PLo & BT-level</h4>
                <div class="basic-form">
                    <form id="cloInsert" class="cloInsert">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold text-dark">CLO Level</label>
                                <select name="cloname" id="cloInsert" class="form-control">
                                    <option value="invoice" selected>select clo</option>
                                    <option value="quote">clo2</option>
                                    <option value="receipt">clo3</option>
                                    <option value="receipt">clo4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold text-dark">CLO BT-Level</label>

                                <select name="cloname" id="cloInsert" class="form-control">
                                    <option value="invoice" selected>select Bt-level</option>
                                    <option value="quote">c2</option>
                                    <option value="receipt">c3</option>
                                    <option value="receipt">c4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark">PLO</label>
                            <select name="cloname" id="cloInsert" class="form-control">
                                <option value="invoice" selected>select Plo</option>
                                <option value="quote">2</option>
                                <option value="receipt">3</option>
                                <option value="receipt">4</option>
                            </select>
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

                <button type="submit" style="background-color: #7fff00; color: black; " class="btn">Submit</button>

                <div id="dataTable"></div>


            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
</div>