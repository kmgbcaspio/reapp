<?php
include "../config.php";

include "../partials/layout_broker.php";

function pageTitle(){
    return "Inquiries";
}

function pageContent(){
    include 'inquiries_content.php';
}

function navLinks(){
    include 'nav_links.php';
}

function setActiveLink(){
    echo "inquiries";
}
