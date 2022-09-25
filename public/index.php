<?php include '../config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Listing - Search</title>
    <link rel="stylesheet" href="<?php echo $urlConfig ?>/assets/css/styling.css">
    <style>
        .bg-img-heading {
            background: url(<?php echo $urlConfig ?>/assets/img/main_bg_image.png) no-repeat;
            min-height: 600px;
            background-size: cover;
        }
        .btn {
            color:white;
        }
        .filter-container {
            margin-top: 150px;
            background: rgba(0, 0, 0, 0.5);
            min-height: 150px;
            
        }
        select[name="cbParamVirtual1"] {
            height: 43px;
        }
        select[name="cbParamVirtual3"] {
            height: 43px;
        }
        .cbSubmitButtonContainer {
            background: none;
        }
        .cbReportNavBarPanel {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-img-heading">
        <div class="container">
            <div class="form-row">
                <div class="col-lg-4">
                    <h1 class="text-white mt-5 fw-bold">Real Estate Listing</h1>
                </div>
            </div>
            <div class="form-row justify-content-center filter-container mb-3">
                <script type="text/javascript" src="https://c3abw763.caspio.com/dp/7ccbb00077980faac50648258c42/emb"></script>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <h3 class="text-center" style="font-size: 40px;">New Listings</h3>
        <hr>
        <script type="text/javascript" src="https://c3abw763.caspio.com/dp/7ccbb00095afd5c686144dec8164/emb"></script>
    </div>

    <!-- JS Stuff -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>