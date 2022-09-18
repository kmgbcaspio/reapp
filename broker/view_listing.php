<?php
include "../config.php";

include "../partials/layout.php";

function pageTitle(){
    return "Listing";
}

function pageContent(){
    include 'view_listing_content.php';
}

function navLinks(){
    include 'nav_links.php';
}

function setActiveLink(){
    echo "listings";
}
