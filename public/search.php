<?php include '../config.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Real Estate Listings - Public Portal</title>
        <meta name="description" content="Caspio Ready Made Application - Real Estate Listings" />
        <meta name="author" content="Caspio, Inc." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="<?php echo $urlConfig ?>/assets/css/search.css" rel="stylesheet" type="text/css" />
        <style>
            body {
            font: 85%/130% Open Sans, Arial, Helvetica, sans-serif;
            background: #f0f4f7 url(<?php echo $urlConfig ?>/assets/img/main_bg_image.png) no-repeat;
            margin: 0px;
            padding: 0px;
            }
        </style>
    </head>
    <body>
        <div class="lo-top-strip"></div>
        <div class="lo-header">
            <div id="cb-masthead">
                <h1>Real Estate Listings</h1>
            </div>
        </div>
        <div id="cb-wrapper">
            <div id="full-content">
                <div id="head-content">
                    <div id="filterContainer"></div>
                    <!-- Caspio Deployed Code Start Here || RE - Public/Search Filter -->
                    <div id="cxkg" style="display: none;">
                    </div>
                    <!-- Caspio Deployed Code End Here -->
                </div>
                <div id="nav">
                    <a class="filterMenu" href="index.html">Main</a>
                    <span> &lt; Search results</span>
                </div>
                <div id="cb-content">
                    <div id="searchResultList">
                        <!-- Caspio Deployed Code Start Here || RE - Public/Search Results -->
                        <script type="text/javascript" src="https://c3abw763.caspio.com/dp/7ccbb000ef0a789906ed45e2b2e5/emb"></script>
                        <div id="cxkg" style="display: none;">

                        </div>
                        <!-- Caspio Deployed Code End Here -->
                    </div>
                    <!-- Caspio Map Location Start Here -->
                    <div id="map"></div>
                    <!-- Caspio Map Location End Here -->
                </div>
            </div>
            <div id="cb-footer">
                <!-- Place your footer content here -->
            </div>
        </div>
    </body>
</html>