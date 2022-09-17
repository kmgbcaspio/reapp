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
    <title>Real Estate</title></head>
    <body>
        <navigation class="float-left w-100">
            <div class="navigation-toggle">
                <button type="button" data-toggle="collapse" data-target="#navigationMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            </div>
            <div class="float-left caspio-logo-container">
                <a href="#" class="float-left">
                    <img src="<?php echo $urlConfig; ?>/assets/img/caspio-logo.svg" width="140px"/>
                </a>
            </div>
            <ul>
                <?php
                    navLinks();
                ?>
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
                    <a class="dropdown-item" href="#"><i class="far fa-share-square"></i><span>Logout</span></a>
                </div>
            </div>
            <ul id="navigationMenu" class="collapse">
                <?php 
                    navLinks();
                ?>
            </ul>
        </navigation>

        <div class="d-none">
            
        </div>
        <div class="wrapper p-4">
            <div class="header mb-4">
                <h2></h2>
            </div>
            <main>
                <?php pageContent(); ?>
            </main>
        </div>
        
        
        
        
        <!-- Modal -->
        <div id="cb-modal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cb-modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="cb-modal-body"></div>
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
    </body>
</html>