<?php include "../config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Application - Public Portal</title>
    <link rel="stylesheet" href="<?php echo $urlConfig ?>/assets/css/styling.css">
    <style>
        body {
            background: #f0f4f7;
        }
        .bg-img-heading {
            background: url(<?php echo $urlConfig ?>/assets/img/main_bg_image_mini.png) no-repeat;
            height: 150px;
            /* min-height: 600px; */
            background-size: cover;
        }
        .carousel-control-prev, .carousel-control-next {
            opacity: 0;
        }
    </style>
    <!-- Google Maps -->
    <script type="text/javascript" src="https://static.caspio.com/mashup/script/caspio_mashups_v7.js"></script>
    <script type="text/javascript">
    var mapSettings = {
        'mapType': 'G',
        'mapView': 'R',
        'mapWidth': '800',
        'mapHeight': '600',
        'mapCssStyle': '',
        'useAutoZoom': 'Y',
        'zoomLevelResult': '3',
        'zoomLevelDetails': '11',
        'zoomLevelMapIt': '11',
        'bubbleOpenType': '1',
        'disableScrollWheel': 'N',
        'showTrafficLayer': 'N',
        'plotMarkers': 'Y',
        'homePosition': 'United States',
        'apiKey': 'AIzaSyDhxKTwCeN00YrbGkHXjj0Jwd6XbUI1ZRo'
    };
    var dpSettings_7ccbb000555a28735c4f4d8cafa7 = new mapDataPageSettings('7ccbb000555a28735c4f4d8cafa7');
    dpSettings_7ccbb000555a28735c4f4d8cafa7.DefaultIcon = 'https://static.caspio.com/mashup/icons/flat/icon2.png';
    dpSettings_7ccbb000555a28735c4f4d8cafa7.DefaultIconWidth = '20';
    dpSettings_7ccbb000555a28735c4f4d8cafa7.DefaultIconHeight = '34';
    dpSettings_7ccbb000555a28735c4f4d8cafa7.MapItEnabled = 'Y';
    dpSettings_7ccbb000555a28735c4f4d8cafa7.MapItLabel = 'View on map';
    dpSettings_7ccbb000555a28735c4f4d8cafa7.FilterNeed = 'N';
    dpSettings_7ccbb000555a28735c4f4d8cafa7.FilterRowSize = '5';
    mapEnvironment.AddDataPageMapSettings(dpSettings_7ccbb000555a28735c4f4d8cafa7);
    </script>
    <script type="text/javascript">mapEnvironment.PreLoadEmptyMap();</script>
</head>
<body>
    <div class="container-fluid mb-5 bg-img-heading">
        <div class="container">
            <div class="form-row pt-5">
                <div class="col-lg-4">
                    <h1 class="text-white">Real Estate Listing</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-6">
                <a href=""> <span class="text-primary" style="font-size: 20px;">Main</span> </a> &lt; 
                <a href=""> <span class="text-primary" style="font-size: 20px;">Search</span> </a> &lt; 
                <span id="addr-info" style="font-size: 20px;"></span>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-8">
                <script type="text/javascript" src="https://c3abw763.caspio.com/dp/7ccbb000555a28735c4f4d8cafa7/emb"></script>
            </div>
            <!-- Map and Contact Form -->
            <div class="col-lg-4">
                <div class="row" style="background: white;">
                    <div class="col-lg-12 mt-2">
                        <!-- Embed Contact Here! -->
                        <script type="text/javascript" src="https://c3abw763.caspio.com/dp/7ccbb00041e83708fef745fe982c/emb"></script>
                    </div>
                </div>
                <div class="row" style="background: white;">
                    <div class="col-lg-12">
                        <script type="text/javascript" src="https://c3abw763.caspio.com/dp/7ccbb000f55456ad01444286883f/emb"></script>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12" style="padding-left: 0px; padding-right:0px">
                        <div id="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(window).on('load',function(){
            var fa = $('#fa-src').html()
            $("#addr-info").html(fa);
        })
    </script>
</body>
</html>