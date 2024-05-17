<?php include('header.php');
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys1")
?>


<div class="content-body py-3">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #00ffff; color: black;">
                    Add CLO keyword</h4>
                <div class="basic-form">
                    <form action="bloom_taxonomy_insert.php " method="Post" id="cloInsert" class="cloInsert">
                        <div class="form-row">
                             <div class="row">
                                  </div>
                        <div class="form-group col-md-2">
                            <label class="font-weight-bold text-dark"> SR#</label>
                            <select name="SRno" id="cloInsert" class="form-control">
                                <option selected>SR</option>
                                <option ="1">1</option>
                                <option ="2">2</option>
                                <option ="3">3</option>
                                 <option ="4">4</option>
                            </select>
                        </div>
                          <div class="form-group col-md-3">
                        <label class="font-weight-bold text-dark">PLO KEYWORD</label>
                        <input name="Plokeyword" type="text" class="form-control" placeholder="Teacher Enter CLO's Question">
                    </div>
                </div>

                <div class="form-group col-md-2">
                            <label class="font-weight-bold text-dark"> PLO</label>
                            <select name="plo2" id="cloInsert" class="form-control">
                                <option selected>add Plo</option>
                                <option ="1">1</option>
                                <option ="2">2</option>
                                <option ="3">3</option>
                                 <option ="4">4</option>
                            </select>
                        </div>
                    <div class="form-group col-md-3">
                        <label class="font-weight-bold text-dark">CLO KEYWORD</label>
                        <input name="clokeyword" type="text" class="form-control" placeholder="Teacher Enter CLO's Question">
                    </div>
                </div>

                         
                            
                        </div>
                        <div class="form-group col-md-2">
                            <label class="font-weight-bold text-dark"> CLO</label>
                            <select name="clo2" id="cloInsert" class="form-control">
                                <option selected>add CLO</option>
                                <option ="1">1</option>
                                <option ="2">2</option>
                                <option ="3">3</option>
                                 <option ="4">4</option>
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

                <button type="submit" name="btn" style="background-color: #00ffff; color: black; " class="btn">Submit</button>

                <button style="background-color: #00ffff; color: black; " class="btn"><a href="bloom_taxonomy_view.php">view</a></button>


            </div>
        </div>
    </div>
</div>


<!-- #/ container -->
</div>


<?php include('footer.php');

?>