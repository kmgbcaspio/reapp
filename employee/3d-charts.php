<html lang="en">
<head>
    <?php include_once '../partials/head.php' ?>
</head>
<body>
    <?php include_once '../partials/navbar.php' ?>
    <div class="wrapper p-4">
        <div class="header mb-4">
            <h3>3D Charts</h3>
            <ol class="breadcrumb bg-transparent small p-0">
                <li class="breadcrumb-item"><a href="./dashboard.php">Home</a></li>
                <li class="breadcrumb-item">3D Charts</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3>
                             Chart
                        </h3>
                    </div>
                    <div class="card-body">
                        <!-- Chart DataPage --> 
                        <!-- <div class="chart-container" data-isloaded="Y" data-dpsrc="https://c2axa202.caspio.com/dp//emb">
                            <script type="text/javascript" src="https://c2axa202.caspio.com/dp/caf26000aa70c377e6424b0bb465/emb"></script>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3>
                             Chart
                        </h3>
                    </div>
                    <div class="card-body">
                         <!-- Chart Datapage --> 
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
    <?php include_once '../partials/footer.php' ?>
    <script src="../assets/lib/Detect-Element-Is-Visible-jQuery-onScreen/jquery.onscreen.js"></script>
    <script>
        $(document).ready(function() {
            activePage('charts');
        });
    </script>
</body>
</html>