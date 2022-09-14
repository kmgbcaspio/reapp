<?php include 'config.php'; ?>
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
    <link rel="stylesheet" href="<?php echo $urlConfig; ?>/assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $urlConfig; ?>/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <!-- Theme Styles -->
    <link rel="stylesheet" href="<?php echo $urlConfig; ?>/assets/css/theme.css">

    <link rel="stylesheet" href="<?php echo $urlConfig; ?>/assets/css/common.css">
    <link rel="stylesheet" href="<?php echo $urlConfig; ?>/assets/css/public.css">

    <title>Caspio Template</title>
</head>

<body>
    <div class="public-wrapper">
        <div class="col-lg-6 float-left">
            <div class="col-md-8 float-left">
                <div class="float-left w-100 m-3">
                    <img src="<?php echo $urlConfig; ?>/assets/img/caspio-logo.svg" width="150px"/>
                </div>
                <div class="login float-left w-100">
                    <div class="float-left w-100 p-3">
                        <h2>Welcome Back!</h2>
                        <p class="small">Login to your dashboard with your registered email address and password</p>
                    </div>
                    <div class="login-container float-left w-100">
                        <script type="text/javascript" src="https://c3abw763.caspio.com/dp/7ccbb0002abb27d369bb45fd8672/emb"></script>
                    </div>
                    <div class="float-left w-100 ml-3">
                        <a href="./forgot-password.php">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 float-right public-image"></div>
    </div>
</body>
<style>
    @media only screen and (max-width: 1024px) and (min-width: 577px) {

        section[class^="cbFormSection"] {
            margin-left: 0% !important;
            margin-right: 0% !important;
        }
    }
</style>
</html>