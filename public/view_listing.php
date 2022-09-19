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
                        <!-- Caspio Deployed Code Start Here || RE - Public/View Listing Details -->
                        <script type="text/javascript" src="https://c1eib354.caspio.com/dp/483540006ce1621962864000b89b/emb"></script>
                        <div id="cxkg" style="display: none;">
                            <a href="https://c1eib354.caspio.com/dp/483540006ce1621962864000b89b">Click here</a> to load this Caspio <a href="https://www.caspio.com" target="_blank" title="Cloud Database">Cloud Database</a>
                        </div>
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
    </body>
</html>