<?php include('header.php');
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys1")
?>


<div class="content-body py-3">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="height: 50px; border-radius: 10px; padding-top: 12px; padding-left: 10px; background-color : #6495ed; color: white;">
                    Mapping clo&plo</h4>
                    <div class="basic-form">
                    <form action="clo-plo-insert.php " method="Post" id="cloInsert" class="cloInsert">
                        <div class="form-row">
                    <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark"> add clo</label>

                                <select name="clo2" id="cloInsert" class="form-control">
                                    <option value="" selected>Add clo</option>
                                    <option value="C1">C1</option>
                                    <option value="C2">C2</option>
                                    <option value="C3">C3</option>
                                     <option value="C4">C4</option>
                                     
                                </select>

                                   </div>
                                     <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark"> Plo1</label>

                                <select name="plo21" id="cloInsert" class="form-control">
                                    <option value="" selected>Plo</option>
                                    <option value="C1">C1</option>
                                    <option value="C2">C2</option>
                                    <option value="C3">C3</option>
                                     <option value="C4">C4</option>
                                     
                                </select>

                                   </div>
                                     <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark">Plo2</label>

                                <select name="plo22" id="cloInsert" class="form-control">
                                    <option value="" selected>Plo</option>
                                    <option value="C1">C1</option>
                                    <option value="C2">C2</option>
                                    <option value="C3">C3</option>
                                     <option value="C4">C4</option>
                                </select>

                                   </div>
                <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark"> Plo3</label>

                                <select name="plo23" id="cloInsert" class="form-control">
                                    <option value="" selected>Plo</option>
                                    <option value="C1">C1</option>
                                    <option value="C2">C2</option>
                                    <option value="C3">C3</option>
                                     <option value="C4">C4</option>
                                </select>

                                   </div>
                <div class="form-group col-md-4">
                                <label class="font-weight-bold text-dark"> Plo4</label>

                                <select name="plo24" id="cloInsert" class="form-control">
                                     <option value="" selected>Plo</option>
                                    <option value="" selected></option>
                                   <option value="C1">C1</option>
                                    <option value="C2">C2</option>
                                    <option value="C3">C3</option>
                                     <option value="C4">C4</option>
                                </select>

                                   </div>
              
              
              

                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold text-dark">CLO DECRIBATION</label>
                        <input name="clocont" type="text" class="form-control" placeholder=" Enter Course content">
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

                <button style="background-color: #00ffff; color: black; " class="btn"><a href="clo-plo-view.php">view</a></button>


            </div>
        </div>
    </div>
</div>


<!-- #/ container -->
</div>


<?php include('footer.php');

?>