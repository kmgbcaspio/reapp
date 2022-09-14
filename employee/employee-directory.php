<html lang="en">
<head>
    <?php include_once '../partials/head.php' ?>
    <link rel="stylesheet" href="../assets/css/employee-search-result.css">
</head>
<body>
    <?php include_once '../partials/navbar.php' ?>
    <div class="wrapper p-4">
        <div class="header mb-4">
            <div class="row">
                <h3 class="col-md-6">Employee Directory</h3>

            </div>
            <ol class="breadcrumb bg-transparent small p-0">
                <li class="breadcrumb-item"><a href="./dashboard.php">Home</a></li>
                <li class="breadcrumb-item">Employee Directory</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="cb-search-container">
                           <!-- Search Employee DataPage -->                        
                        </div>                       
                    </div>
                    <div class="card-body">
                        <div class="cb-result-container">
                           <!-- Result Employee DataPage -->  
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include_once '../partials/footer.php' ?>
    <script type="text/javascript" src="../assets/js/employee-search-result.js"></script>
    <script>
        $(document).ready(function() {
            activePage('directory');
        });
    </script>
</body>
</html>