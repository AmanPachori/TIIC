<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Kiosk Registration</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url();?>assets/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url();?>assets/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url();?>assets/admin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="<?php echo base_url();?>assets/img/core-img/logo.png" alt="SRPS Foundation"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <?php
                    include 'require/mobsidemenu.php';
                ?>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url();?>assets/img/core-img/logo.png" alt="SRPS Foundation"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <?php
                        include 'require/sidemenu.php';
                    ?>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <?php
                    include 'require/header.php';
                ?>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <?php
                            if(isset($_GET['kioskcode'])&&isset($_GET['password']))
                            {
                                echo '<script>
                                    alert("Kiosk Code: '.$_GET['kioskcode'].' and Password: '.$_GET['password'].'");
                                </script>';
                            }
                        ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>KIOSK</strong> Registration
                                    </div>
                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="card-body card-block">                                        
                                            <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label class=" form-control-label">Applicant Name</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="text" class="form-control" name="applicantname" required/>
                                                </div>
                                                <div class="col col-md-2">
                                                    <label class=" form-control-label">Father Name</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="text" class="form-control" name="fathername" required/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label class=" form-control-label">Date of birth</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="text" class="form-control" name="dateofbirth" required/>
                                                </div>
                                                <div class="col col-md-2">
                                                    <label class=" form-control-label">Gender</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <select class="form-control" name="gender" required/>
                                                        <option value="">Select</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label for="resiaddress" class=" form-control-label">Residential Address</label>
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <input type="text" id="residentialaddress" name="residentialaddress" placeholder="Enter Residential Address" class="form-control">
                                                    <small class="help-block form-text">Please enter address</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label class=" form-control-label">State</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="text" class="form-control" name="state" id="state" required/>
                                                </div>
                                                <div class="col col-md-2">
                                                    <label class=" form-control-label">District</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="text" class="form-control" name="district" id="district" required/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label class=" form-control-label">Tehsil</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="text" class="form-control" name="tehsil" id="tehsil" required/>
                                                </div>
                                                <div class="col col-md-2">
                                                    <label class=" form-control-label">Pincode</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="text" class="form-control" name="pincode" id="pincode" required/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label class=" form-control-label">Mobile No.</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="text" class="form-control" name="mobileno" id="mobileno" required/>
                                                </div>
                                                <div class="col col-md-2">
                                                    <label class=" form-control-label">E-mail ID</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="text" class="form-control" name="emailid" id="emailid" required/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-1">
                                                    <label class=" form-control-label">PAN No.</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" class="form-control" name="panno" required/>
                                                </div>
                                                <div class="col col-md-1">
                                                    <label class=" form-control-label">Voter ID</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" class="form-control" name="voteridno" required/>
                                                </div>
                                                <div class="col col-md-1">
                                                    <label class=" form-control-label">Passport No.</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" class="form-control" name="passportno" required/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label class=" form-control-label">Driving License</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="text" class="form-control" name="drivinglicenseno" required/>
                                                </div>
                                                <div class="col col-md-2">
                                                    <label class=" form-control-label">Aadhar No.</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="text" class="form-control" name="aadharno" required/>
                                                </div>
                                            </div>
                                            <b>OD/Current A/c Detail</b>
                                            <div class="row form-group">
                                                <div class="col col-md-1">
                                                    <label class=" form-control-label">Ac No</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" class="form-control" name="odacno" required/>
                                                </div>
                                                <div class="col col-md-1">
                                                    <label class=" form-control-label">Bank Name</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" class="form-control" name="odbankname" required/>
                                                </div>
                                                <div class="col col-md-1">
                                                    <label class=" form-control-label">IFSC</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" class="form-control" name="odifsc" required/>
                                                </div>
                                            </div>
                                            <b>Saving A/c Detail</b>
                                            <div class="row form-group">
                                                <div class="col col-md-1">
                                                    <label class=" form-control-label">Ac No</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" class="form-control" name="svacno" required/>
                                                </div>
                                                <div class="col col-md-1">
                                                    <label class=" form-control-label">Bank Name</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" class="form-control" name="svbankname" required/>
                                                </div>
                                                <div class="col col-md-1">
                                                    <label class=" form-control-label">IFSC</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" class="form-control" name="svifsc" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm pull-right" name="submission">
                                                <i class="fa fa-dot-circle-o"></i> Next
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                    include 'require/footer.php';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url();?>assets/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url();?>assets/admin/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/admin/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url();?>assets/admin/js/main.js"></script>

</body>

</html>
<!-- end document-->
