<html lang="en">
<head>
    <?php include_once '../partials/head.php' ?>
    <link rel="stylesheet" href="../assets/css/employee-search-result.css">
</head>
<body>
    <?php include_once '../partials/navbar.php' ?>
    <div class="wrapper p-4">
        <div class="header mb-4">
            <h3>Employee Details</h3>
            <ol class="breadcrumb bg-transparent small p-0">
                <li class="breadcrumb-item"><a href="./dashboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="./employee-directory.php">Employee Directory</a></li>
                <li class="breadcrumb-item">Employee Details</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Details</h3>
                    </div>
                    <div class="card-body">
                        <div class="employee-details-container">
                            <!-- Employee Details DataPage -->                       
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <h3 class="col-md-6">Logs</h3>
                            <div class="col-md-6 text-right">
                                <a href="#" class="add-log-button" data-toggle="tooltip" data-placement="bottom" title="New Log"><i class="fa fa-edit"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="employee-logs-container">
                            <!-- Employee Logs DataPage -->                       
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include_once '../partials/modal.php' ?>
    <?php include_once '../partials/footer.php' ?>
    <script type="text/javascript" src="../assets/js/employee-search-result.js"></script>
</body>

</html>