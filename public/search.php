<?php include '../config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Listing - Search</title>
    <link rel="stylesheet" href="<?php echo $urlConfig ?>/assets/css/styling.css">
    <!-- Maps Stuff -->
    <script type="text/javascript" src="//static.caspio.com/mashup/script/caspio_mashups_v7.js"></script>
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
        'showTrafficLayer': 'Y',
        'plotMarkers': 'Y',
        'homePosition': 'United States',
        'apiKey': 'AIzaSyA2yHcUngsF4E9LRTmaf1VrarRf-PfZ-8I'
    };
    var dpSettings_7ccbb0007dbd24a6a88848f9814f = new mapDataPageSettings('7ccbb0007dbd24a6a88848f9814f');
    dpSettings_7ccbb0007dbd24a6a88848f9814f.DefaultIcon = '//static.caspio.com/mashup/icons/flat/icon2.png';
    dpSettings_7ccbb0007dbd24a6a88848f9814f.DefaultIconWidth = '20';
    dpSettings_7ccbb0007dbd24a6a88848f9814f.DefaultIconHeight = '34';
    dpSettings_7ccbb0007dbd24a6a88848f9814f.MapItEnabled = 'Y';
    dpSettings_7ccbb0007dbd24a6a88848f9814f.MapItLabel = 'View on map';
    dpSettings_7ccbb0007dbd24a6a88848f9814f.FilterNeed = 'N';
    dpSettings_7ccbb0007dbd24a6a88848f9814f.FilterRowSize = '2';
    mapEnvironment.AddDataPageMapSettings(dpSettings_7ccbb0007dbd24a6a88848f9814f);
    </script>
    <script type="text/javascript">mapEnvironment.PreLoadEmptyMap();</script>
    <style>
        .bg-img-heading {
            background: url(<?php echo $urlConfig ?>/assets/img/main_bg_image.png) no-repeat;
            
            height:700px;
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
        /* select[name="Value1_1"] {
            height: 43px;
        }
        input[name="Value2_1"] {
            height: 43px;
        }
        select[name="cbDSField2"] {
            height: 43px;
        }
        .cbSubmitButtonContainer {
            background: none;
        } */
        .cbReportNavBarPanel {
            display: none;
        }
        .nav-components {
            color: #e69532;
            font-size: 30px;
        }
        .conainter-for-filter{
            padding-left:40px;
            padding-right:40px;
            padding-top:30px;
            margin-top: 3rem !important;
            margin-bottom: 3rem !important;
        }
        .data-content {
            
        }
        #results-container {
            min-height:500px;
            height: 500px;
        }
        .img-results-containers {
            vertical-a
            .lign: middle
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-img-heading" style="">
        <div class="container data-content">
            <div class="form-row">
                <div class="col-lg-4">
                    <h1 class="text-white mt-5 fw-bold">Real Estate Listing</h1>
                </div>
            </div>
            <div class="form-row justify-content-center filter-container mb-5 mt-5 pl-5 pr-5">
                <script type="text/javascript" src="https://c3abw763.caspio.com/dp/7ccbb0005ea53fff5cf64992bb87/emb"></script>
            </div>
        </div>
    </div>
    
    <div class="container mt-5 mb-5">
        <a href="<?php echo $urlConfig; ?>/public" class="nav-components">Main</a>
        <span class="" style="font-size:30px">< Search Results</span>
        <hr>
        <div class="form-row">
            <div class="col-lg-6 overflow-auto" id="results-container">
                <script type="text/javascript" src="https://c3abw763.caspio.com/dp/7ccbb0007dbd24a6a88848f9814f/emb"></script>
            </div>
            <div class="col-lg-6">
                <!-- Google Maps Here -->
                <div id="map">
                </div>
            </div>
        </div>
    </div>

    <!-- JS Stuff -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        var objElement = $("select[name='cbParamVirtual10']").parent().parent();
        objElement.addClass("conainter-for-filter");
    </script>
</body>
</html>