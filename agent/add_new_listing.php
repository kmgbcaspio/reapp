<?php
include "../config.php";

include "../partials/layout_agent.php";

function pageTitle(){
    return "Add New Listing";
}

function pageContent(){
    include 'add_new_listing_content.php';
}

function navLinks(){
    include 'nav_links.php';
}
function setActiveLink(){
    echo "add_new_listing";
}

function customHeaderJs(){
    echo '<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2yHcUngsF4E9LRTmaf1VrarRf-PfZ-8I"></script>';
}
