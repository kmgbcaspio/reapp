<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/css/profile.css">
    <?php include_once '../partials/head.php' ?>
</head>
<body>
    <?php include_once '../partials/navbar.php' ?>
    <div class="wrapper p-4">
        <div class="header mb-4">
            <h2>Profile</h2>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12 text-center float-left pb-5">
                            <div class="float-left w-100">
                                <a href="./edit-profile.php" class="float-right profile-edit-button" data-toggle="tooltip" data-placement="bottom" title="Edit Profile"><i class="fa fa-sliders-h"></i></a>
                            </div>
                            <div class="profile-container">
                                <!-- Profile Datapage -->                            
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once '../partials/footer.php' ?>
</body>
</html>