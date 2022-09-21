<?php include "../config.php" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Real Estate Listings - Public Portal</title>
        <meta name="description" content="Caspio Ready Made Application - Real Estate Listings" />
        <meta name="author" content="Caspio, Inc." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="<?php echo $urlConfig; ?>/assets/css/details.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        <style>
            div[data-cb-name="data-row"]{
                border: none;
                background: #f6f9fc;
            }
        </style>
        <style>
            body {
                background: #f0f4f7 url(<?php echo $urlConfig ?>/assets/img/main_bg_image_mini.png) no-repeat;
            }
            .container-fluid{
                margin-top:50px;
                margin-bottom:100px;
            }

            .carousel-inner img {
                width: 100%;
                height: 100%;
            }

            #custCarousel .carousel-indicators {
                position: static;
                margin-top:20px;
            }

            #custCarousel .carousel-indicators > li {
            width:100px;
            }

            #custCarousel .carousel-indicators li img {
                display: block;
                opacity: 0.5;
            }

            #custCarousel .carousel-indicators li.active img {
                opacity: 1;
            }

            #custCarousel .carousel-indicators li:hover img {
                opacity: 0.75;
            }

            .carousel-item img{

                width:100%;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="<?php echo $urlConfig; ?>/assets/lib/jquery/dist/jquery.min.js"></script>
        <script>
            document.addEventListener("DataPageReady", function() {
                var $preloader = $("#page-preloader");
                var $spinner = $preloader.find(".spinner");

                $spinner.fadeOut();
                $preloader.delay(350).fadeOut("slow");
            });
        </script>
    </head>
    <body>
        <div id="page-preloader">
            <div class="lo-header">
                <div class="cb-masthead">
                    <h1>Real Estate Listings</h1>
                </div>
            </div>
            <span class="spinner"></span>
        </div>
        <div class="lo-header">
            <div class="cb-masthead">
                <h1> Real Estate <span>Listings</span>
                </h1>
            </div>
        </div>
        <div id="cb-wrapper">
            <div id="full-content">
                <div id="cb-content">
                    <div id="propertyInfo">
                        <div id="nav" class="mb-4">
                            <a class="filterMenu" href="<?php echo $urlConfig ?>/public/index.php">Main</a> &lt; 
                            <a id="histLink" class="filterMenu" href="<?php echo $urlConfig ?>/public/search.php"> Search Results</a>
                            <span>&lt; <span id="addr-info"> </span></span>
                        </div>
                        <!-- Caspio Deployed Code Start Here || RE - Public/View Listing Details -->
                        
                        <script type="text/javascript" src="https://c3abw763.caspio.com/dp/7ccbb000555a28735c4f4d8cafa7/emb"></script>
                        <!-- <script type="text/javascript" src="https://c3abw763.caspio.com/dp/7ccbb000555a28735c4f4d8cafa7/emb"></script> -->
                        <!-- Caspio Deployed Code End Here -->
                    </div>
                    <div id="right-section">
                        <div id="agentInfo">
                            <!-- Caspio Deployed Code Start Here || RE - Public/View Agent Data -->
                            <script type="text/javascript" src="https://c1eib354.caspio.com/dp/48354000cdd0c58441ef465aa960/emb"></script>
                            <div id="cxkg" style="display: none;">
                                <a href="https://c1eib354.caspio.com/dp/48354000cdd0c58441ef465aa960">Click here</a> to load this Caspio <a href="https://www.caspio.com" target="_blank" title="Cloud Database">Cloud Database</a>
                            </div>
                            <!-- Caspio Map Location End Here -->
                        </div>
                        <div id="contactForm">
                            <!-- Caspio Deployed Code Start Here || RE - Public/Submit Inquiry -->
                            <script type="text/javascript" src="https://c1eib354.caspio.com/dp/48354000b48a5624d559456ea7d1/emb"></script>
                            <div id="cxkg" style="display: none;">
                                <a href="https://c1eib354.caspio.com/dp/48354000b48a5624d559456ea7d1">Click here</a> to load this Caspio <a href="https://www.caspio.com" target="_blank" title="Cloud Database">Cloud Database</a>
                            </div>
                            <!-- Caspio Map Location End Here -->
                        </div>
                        <!-- Caspio Map Location Start Here -->
                        <div id="map"></div>
                        <!-- Caspio Map Location End Here -->
                    </div>
                </div>
            </div>
            <div id="cb-footer">
                <!-- Place your footer content here -->
            </div>
        </div>
    
    <script>
        $(window).on('load',function(){
            var fa = $('#fa-src').html()
            $("#addr-info").html(fa);
        })
    </script>
    </body>
</html>