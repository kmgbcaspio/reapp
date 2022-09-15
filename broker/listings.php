<?php
include "../config.php";

include "../partials/layout.php";

function pageTitle(){
    return "Listings";
}

function pageContent(){
    include 'listings_content.php';
}

function navLinks(){
    include 'nav_links.php';
}
