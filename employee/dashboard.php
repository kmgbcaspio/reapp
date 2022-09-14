<html lang="en">
<head>
    <?php include_once '../partials/head.php' ?>
</head>
<body>
    <?php include_once '../partials/navbar.php' ?>
    <div class="wrapper p-4">
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
    <?php include_once '../partials/footer.php' ?>
    <script src="../assets/lib/Detect-Element-Is-Visible-jQuery-onScreen/jquery.onscreen.js"></script>
    <script>
        $(document).ready(function() {
            activePage('dashboard');
        });
    </script>
</body>
</html>