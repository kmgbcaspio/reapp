<?php
include "../config.php";

include "../partials/layout.php";

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
