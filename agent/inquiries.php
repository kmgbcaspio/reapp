<?php
include "../config.php";

include "../partials/layout.php";

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
