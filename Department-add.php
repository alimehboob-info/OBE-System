<?php include('header.php');
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys1")
?>

<style>
    /* CSS for Card */
    .card {
        background-color: #fff;
        /* Background color of the card */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        /* Box shadow for a subtle elevation effect */
        border-radius: 8px;
        /* Rounded corners for the card */
    }

    /* Example for adding a header to the card */
    .card-header {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
        border-bottom: 1px solid gray;
        text-align: center;
        background-color: #1E282C;
        color: whitesmoke;
    }

    /* Example for styling text within the card */
    .card-text {
        font-size: 16px;
        line-height: 1.5;
    }

    /* Example for adding a button to the card */
    .card-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        /* Button background color */
        color: #fff;
        /* Button text color */
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        /* Smooth transition on hover */
        text-decoration: none;
        /* Remove underlines from links */
    }

    /* Style the button on hover */
    .card-button:hover {
        background-color: #0056b3;
        /* Change the background color on hover */
    }

    .btn {
        display: inline-block;
        width: 150px;
        margin-left: 30px;
    }

    .card-footer {
        border-bottom: 1px solid gray;
    }
</style>
<div class="content-body py-3">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                Add Departement
            </div>
            <div class="card-body">
                <form action="Department-insert.php " method="Post" id="cloInsert" class="cloInsert">
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
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark">Deoartment ID</label>

                            <select id="cloInsert1" class="form-control" name="Departmentid">
                                <option value="" selected>12345</option>
                                <option value="16578">16578</option>
                                <option value="167778">167778</option>
                                <option value="56789">56789</option>
                                <option value="45678">45678</option>

                                <option value="87654">87654</option>
                                <option value="987654">987654</option>
                            </select>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="btn" style="background-color: #006400; color: white; " class="btn">submit</button>
                            <a href="department-view.php" class="btn-link">
                                <span class="btn" style="background-color: #00ffff; color: black;">View</span>
                            </a>

                        </div>


                    </div>
                </form>
            </div>
        </div>


        <!-- #/ container -->
    </div>
</div>