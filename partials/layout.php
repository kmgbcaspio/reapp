<?php include '../config.php'; ?>
<html lang="en">
<head>
    <!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="keywords" content="Bootstrap Theme, Freebies, Dashboard, MIT license">
<meta name="description" content="Stream - Dashboard UI Kit">
<meta name="author" content="htmlstream.com">

<!-- Components Vendor Styles -->
<link rel="stylesheet" href="<?php echo $urlConfig; ?>/assets/lib/font-awesome/css/all.min.css">

<!-- Theme Styles -->
<link rel="stylesheet" href="<?php echo $urlConfig; ?>/assets/css/theme.css">

<link rel="stylesheet" href="<?php echo $urlConfig; ?>/assets/css/common.css">
<link rel="stylesheet" href="<?php echo $urlConfig; ?>/assets/css/navbar.css">

<title>Caspio Template</title></head>
<body>
    <navigation class="float-left w-100">
    <div class="navigation-toggle">
        <button type="button" data-toggle="collapse" data-target="#navigationMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
    </div>
    <div class="float-left caspio-logo-container">
        <a href="../employee/dashboard.php" class="float-left">
            <img src="<?php echo $urlConfig; ?>/assets/img/caspio-logo.svg" width="140px"/>
        </a>
    </div>
    <ul>
        <li><a href="../employee/dashboard.php" class="dashboard"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
        <li><a href="../employee/employee-directory.php" class="directory"><i class="far fa-address-card"></i><span>Employee Directory</span></a></li>
        <li><a href="../employee/3d-charts.php" class="charts"><i class="fa fa-chart-line"></i><span>3D Charts</span></a></li>
        <li><a href="../employee/event-calendar-standard.php" class="calendar-standard"><i class="far fa-calendar-alt"></i><span>Event Calendar (Standard)</span></a></li>
        <li><a href="../employee/event-calendar-custom.php" class="calendar-custom"><i class="far fa-calendar"></i><span>Event Calendar (Custom)</span></a></li>
    </ul>
    <div class="float-right user-profile dropdown">
        <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="user-icon rounded-circle float-left mr-2" src="<?php echo $urlConfig; ?>/assets/img/default-user.jpg"/>
            <div class="mt-1 float-left user-details-container">
                <span id="nav-user-fullname"></span>
                <small class="fa fa-angle-down ml-1"></small>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="./profile.php"><i class="far fa-user-circle"></i><span>View Profile</span></a>
            <a class="dropdown-item" href="./change-password.php"><i class="far fa-list-alt"></i><span>Change Password</span></a>
            <div class="dropdown-divider float-left w-100"></div>
            <!-- Change redirection link to your Datapage Logout -->
            <a class="dropdown-item" href="../login.php"><i class="far fa-share-square"></i><span>Logout</span></a>
        </div>
    </div>
    <ul id="navigationMenu" class="collapse">
        <li><a href="../employee/dashboard.php" class="dashboard"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
        <li><a href="../employee/employee-directory.php" class="directory"><i class="far fa-address-card"></i><span>Employee Directory</span></a></li>
        <li><a href="../employee/3d-charts.php" class="charts"><i class="fa fa-chart-line"></i><span>3D Charts</span></a></li>
        <li><a href="../employee/event-calendar-standard.php" class="calendar-standard"><i class="far fa-calendar-alt"></i><span>Event Calendar (Standard)</span></a></li>
        <li><a href="../employee/event-calendar-custom.php" class="calendar-custom"><i class="far fa-calendar"></i><span>Event Calendar (Custom)</span></a></li>
    </ul>
</navigation>

<div class="d-none">
    <!-- Username Datapage-->
</div>    <div class="wrapper p-4">
        <div class="header mb-4">
            <h2>Dashboard</h2>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                             Chart
                        </h3>
                    </div>
                    <div class="card-body">
                        <!-- Chart DataPage -->
                        <!-- Example: <div class="chart-container" data-isloaded="Y" data-dpsrc="https://c2axa202.caspio.com/dp/caf2600059eb119df91347c2ad88/emb">
                            <script type="text/javascript" src="https://c2axa202.caspio.com/dp/caf2600059eb119df91347c2ad88/emb"></script>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Chart 1
                        </h3>
                    </div>
                    <div class="card-body">
                        <!-- Chart 1 DataPage -->
                    </div>
                    </div>
                </div>
                
                <div class="col-xl-6 col-lg-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                Chart 2
                            </h3>
                        </div>
                        <div class="card-body">
                        <!-- Chart 2 DataPage -->
                        </div>
                    </div>
             </div>
        </div>
        <div class="row">
            <div class="col-xl-9 col-lg-7 col-md-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Chart 3
                        </h3>
                    </div>
                    <div class="card-body">
                        <!-- Chart 3 DataPage -->
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-5 col-md-12 mb-4">
                 <div class="card">
                    <div class="card-header">
                        <h3>
                            Chart 4
                        </h3>
                    </div>
                    <div class="card-body">
                    <!-- Chart 4 DataPage -->
                    </div>
                </div>
                </div>
        </div>
    </div>
    <!-- Global Vendor -->
<script src="<?php echo $urlConfig; ?>/assets/lib/jquery/dist/jquery.min.js"></script>
<script src="<?php echo $urlConfig; ?>/assets/lib/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo $urlConfig; ?>/assets/lib/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo $urlConfig; ?>/assets/js/common.js"></script>
<script src="<?php echo $urlConfig; ?>/assets/js/main.js"></script>
<script src="<?php echo $urlConfig; ?>/assets/lib/Detect-Element-Is-Visible-jQuery-onScreen/jquery.onscreen.js"></script>
    <script>
        $(document).ready(function() {
            activePage('dashboard');
        });
    </script>
</body>
</html>