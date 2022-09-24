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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>