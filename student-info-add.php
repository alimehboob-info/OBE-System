<?php
include('header.php');
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OBE system</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.css">

    <link rel="stylesheet" href="css/skin-green.css">

    <!-- JS -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script src="js/bootstrap.datetime.js"></script>
    <script src="js/bootstrap.password.js"></script>
    <script src="js/scripts.js"></script>

    <!-- AdminLTE App -->
    <script src="js/app.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.datetimepicker.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
    <link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<h2>Add student information</h2>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <div class="message"></div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Student Info</h4>
            </div>
            <div class="panel-body form-group form-group-sm">
                <form action="insert.php" method="post" id="student-info">
                    <input type="hidden" name="action" value="student-info">

                    <div class="row">
                        <div class="col-xs-4">
                            <label>Department:</label>
                            <input type="text" class="form-control required" name="department_name" placeholder="Enter department_name">
                        </div>
                        <div class="col-xs-4">
                            <label>Student ID:</label>
                            <input type="text" class="form-control required" name="subject" placeholder="Enter student id">
                        </div>
                        <div class="col-xs-4">
                            <label>Student name</label>
                            <input type="text" class="form-control required" name="studname" placeholder="Enter student name ">
                        </div>

                        <div class="col-xs-4">
                            <label>Father name:</label>
                            <input type="text" class="form-control " name="stdfathername" placeholder="Enter father name">
                        </div>
                        <div class="col-xs-4">
                            <label>Email:</label>
                            <input type="text" class="form-control required" name="email" placeholder="Enter Teacher_name ">
                        </div>
                        <div class="col-xs-4">
                            <label>Semester :</label>
                            <input type="text" class="form-control required" name="semester" placeholder="Enter current Semester ">
                        </div>
                        <div class="col-xs-4">
                            <label>cell no:</label>
                            <input type="text" class="form-control required" name="cellno" placeholder="Enter cell no ">
                        </div>
                        <div class="col-xs-4">
                            <label>Student CNIC:</label>
                            <input type="text" class="form-control required" name="cnic" placeholder="Enter CNIC">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 margin-top btn-group">
                                <input type="submit" id="student-info" name="btn" class="btn btn-success float-right" value="Add  info" data-loading-text="Adding...">

                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <div>