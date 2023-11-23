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
    <title>Kiosk List</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url();?>assets/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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
    <script type="text/javascript">
        function doSearch() {
            var searchText = document.getElementById('searchTerm').value;
            var targetTable = document.getElementById('dataTable');
            var targetTableColCount;

            //Loop through table rows
            for (var rowIndex = 0; rowIndex < targetTable.rows.length; rowIndex++) {
                var rowData = '';

                //Get column count from header row
                if (rowIndex == 0) {
                    targetTableColCount = targetTable.rows.item(rowIndex).cells.length;
                    continue; //do not execute further code for header row.
                }

                //Process data rows. (rowIndex >= 1)
                for (var colIndex = 0; colIndex < targetTableColCount; colIndex++) {
                    var cellText = '';

                    if (navigator.appName == 'Microsoft Internet Explorer')
                        cellText = targetTable.rows.item(rowIndex).cells.item(colIndex).innerText;
                    else
                        cellText = targetTable.rows.item(rowIndex).cells.item(colIndex).textContent;

                    rowData += cellText;
                }

                // Make search case insensitive.
                rowData = rowData.toLowerCase();
                searchText = searchText.toLowerCase();

                //If search term is not found in row data
                //then hide the row, else show
                if (rowData.indexOf(searchText) == -1)
                    targetTable.rows.item(rowIndex).style.display = 'none';
                else
                    targetTable.rows.item(rowIndex).style.display = 'table-row';
            }
        }
    </script>
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
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10">
                            </div>
                            <div class="col-md-2">
                                <input type="text" id="searchTerm" class="pull-right" placeholder="Search Here" onkeyup="doSearch()" />
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Kiosk Code</th>
                                                <th>Applicant Name</th>
                                                <th>Mobile No.</th>
                                                <th>E-mail ID</th>
                                                <th>PAN No.</th>
                                                <th>UID No.</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $i=1;
                                                foreach ($kiosklist as $kioskinfo) {
                                                    echo '<tr>
                                                        <td>'.$i.'.</td>
                                                        <td>'.$kioskinfo->kioskcode.'</td>
                                                        <td>'.$kioskinfo->applicantname.'</td>
                                                        <td>'.$kioskinfo->mobileno.'</td>
                                                        <td>'.$kioskinfo->emailid.'</td>
                                                        <td>'.$kioskinfo->panno.'</td>
                                                        <td>'.$kioskinfo->aadharno.'</td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <a target="_blank" href="'.base_url('Admin/loginAsKiosk.ais?kioskcode='.$kioskinfo->kioskcode).'"><button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                                    <i class="zmdi zmdi-lock-open"></i>
                                                                </button></a>
                                                                <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                                    <i class="zmdi zmdi-more"></i>
                                                                </button>-->
                                                            </div>
                                                        </td>
                                                    </tr>';
                                                    $i=$i+1;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
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
