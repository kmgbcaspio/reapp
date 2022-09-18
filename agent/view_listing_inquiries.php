<?php
include "../config.php";

include "../partials/layout_agent.php";

function pageTitle(){
    return "Inquiries";
}

function pageContent(){
    include 'view_listing_inquiries_content.php';
}

function navLinks(){
    include 'nav_links.php';
}

function setActiveLink(){
    echo "inquiries";
}
