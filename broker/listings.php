<?php
include "../config.php";

include "../partials/layout_broker.php";

function pageTitle(){
    return "Listings";
}

function pageContent(){
    include 'listings_content.php';
}

function navLinks(){
    include 'nav_links.php';
}

function setActiveLink(){
    echo "listings";
}