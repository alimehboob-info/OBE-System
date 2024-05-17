<?php
include('header.php');
// include('functions.php');
include_once("includes/config.php");
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys1") or die("Connection Failed to connect database")

  ?>
<style>
  .shadow {
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
    /* Box shadow */
  }

  .btn {
    width: 100%;
    display: block;
    margin: 0 auto;
  }
</style>
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green shadow">
        <div class="inner ">
          <a href="user-add.php" class="btn bg-green"> Add Teacher</a>
        </div>
        <div class="icon">
        </div>

      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-purple shadow">
        <div class="inner">

          <a href=" schemeadd.php" class="btn bg-purple"> Session</a>
        </div>
        <div class="icon">
        </div>

      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow shadow">
        <div class="inner">

          <a href="course-add.php " class="btn bg-yellow"> Add Course</a>
        </div>
        <div class="icon">
        </div>

      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red shadow">
        <div class="inner">
          <a href="Department-add.php " class="btn bg-red"> Add Department</a>
        </div>
        <div class="icon">
        </div>

      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->


  <!-- 2nd row -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-primary shadow">
        <div class="inner">
          <h3>
            <a href="Assignment-add.php " class="btn bg-primary"> Add Assignment</a>
        </div>
        <div class="icon">
        </div>
      </div>
      <div class="small-box bg-red shadow">
        <div class="inner">
          <h3>
            <a href="mapclo.php " class="btn bg-red"> CLO & PLO Mapping </a>
        </div>
        <div class="icon">
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-maroon shadow">
        <div class="inner">
          <a href="quiz-add.php " class="btn bg-maroon"> Add Quiz</a>
        </div>
        <div class="icon">
        </div>

      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-olive shadow">
        <div class="inner">
          <a href="Mid-paper-add.php " class="btn bg-olive"> Add Paper</a>
        </div>
        <div class="icon">
        </div>
      </div>


    </div>

  </div>
</section>
<!-- /.content -->