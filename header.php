<?php
//check login
session_start();
if (isset($_SESSION['login_username'])) {
    $loginUsername = $_SESSION['login_username'];
}
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

</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!--Logo -->
            <a href="" class="logo">
                <!--mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>IN</b>MS</span>
                <!--logo for regular state and mobile devices -->
                <span style="text-decoration:none;" class="logo-lg"><b>OBE</b> System</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <!-- <img src="https://pcrt.crab.org/images/default-user.png" class="user-image" alt="User Image"> -->
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <button class="btn btn-danger">Logout</button>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- Drop down list-->
                                <li><a href="logout.php" class="btn btn-default btn-flat">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">


                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">

                    <img src="https://i0.wp.com/www.elmseekho.com/wp-content/uploads/2019/07/ISP-Logo.png?fit=%2C&ssl=1">

                    <li class="header">MENU</li>

                    <!-- Menu 0.1 -->
                    <li class="treeview">
                        <a href="dashboard.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span>

                        </a>

                    </li>
                    <!-- Menu 1 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-university"></i> <span>Deparatment</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="Department-add.php"><i class="fa fa-plus"></i>ADD Department Detail </a></li>



                        </ul>
                    </li>
                    <!-- Menu 2 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-file"></i><span>Programe</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="programe-add.php"><i class="fa fa-plus"></i>Add Programe</a></li>


                        </ul>
                    </li>
                    <!-- Menu 5 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-file"></i><span>Allocate clo</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="TeacherAllocate_add.php"><i class="fa fa-plus"></i>Allocate clo</a></li>


                        </ul>
                        <!-- Menu 3 -->


                        <!-- Menu 4 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-sticky-note"></i><span>Assignment</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="Assignment-add.php"><i class="fa fa-plus"></i>Add Assignment</a></li>


                        </ul>
                        <!-- Menu 5 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-sticky-note"></i><span>Quiz</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="quiz-add.php"><i class="fa fa-plus"></i>Add Quiz</a></li>


                        </ul>
                        <!-- Menu 5 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-file"></i><span>Presentation</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="Presentation-add.php"><i class="fa fa-plus"></i>Add Presentation </a></li>


                        </ul>
                        <!-- Menu 6 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-archive"></i><span>Clo</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="clos-add.php"><i class="fa fa-plus"></i>Add Clo</a></li>

                        </ul>
                        <!-- Menu 7 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-user"></i><span>Teacher add Clo</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="tecclo-add.php"><i class="fa fa-plus"></i>Add Clo</a></li>

                        </ul>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-file"></i><span>Assessment</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>

                        </a>
                        <ul class="treeview-menu">
                            <li><a href="Assignment-add.php"><i class="fa fa-plus"></i>Assignment
                                </a></li>
                            <li><a href="quiz-add.php"><i class="fa fa-plus"></i>Quiz
                                </a></li>
                            <li><a href="Presentation-add.php"><i class="fa fa-plus"></i>Presentation
                                </a></li>
                            <li><a href="final-paper-add.php"><i class="fa fa-plus"></i>Paper
                                </a></li>
                            <li><a href=""><i class="fa fa-plus"></i>Marks
                                </a></li>






                        </ul>

                        <!-- Menu 8 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-archive"></i><span>Bloom Taxonomy</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="bloom_texonomy_add.php"><i class="fa fa-plus"></i>Add Bloom Taxonomy</a></li>


                        </ul>


                        <!-- Menu 11 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-file"></i><span>Paper</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="Mid-paper-add.php"><i class="fa fa-plus"></i> Mid paper</a></li>
                            <li><a href="final-paper-add.php"><i class="fa fa-plus"></i>Final paper</a></li>


                        </ul>
                    </li>


                    <!-- Menu 8 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-archive"></i><span>Add CBP</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="cbp-add.php"><i class="fa fa-plus"></i>Add CBP</a></li>


                        </ul>


                        <!-- Menu 9 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-archive"></i><span>Plo</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="clo-add.php"><i class="fa fa-plus"></i>Add plo</a></li>


                        </ul>
                    </li>
                    <!-- Menu 10 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-user"></i><span>student info</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="student-info-add.php"><i class="fa fa-plus"></i>student info</a></li>


                        </ul>
                    </li>




                    <!-- Menu 13 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-sticky-note"></i><span>Exame</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="Exame-add.php"><i class="fa fa-plus"></i>Add Paper</a></li>

                        </ul>
                    </li>
                    <!-- Menu 14 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-users"></i><span>Scheme</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="schemeadd.php"><i class="fa fa-user-plus"></i>Add scheme</a></li>

                        </ul>
                    </li>

                    <!-- Menu 15 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-user"></i><span>TEACHER</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="user-add.php"><i class="fa fa-plus"></i>ADD Teacher</a></li>


                        </ul>
                    </li>
                    <!-- Menu 16 -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-user"></i><span>Course log</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="course-add.php"><i class="fa fa-plus"></i>ADD Course log</a></li>


                        </ul>
                    </li>
                </ul>





                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">


            <!-- Main content -->
            <section class="content">

                <!-- Your Page Content Here -->