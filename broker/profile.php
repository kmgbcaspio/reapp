<?php
include "../config.php";

include "../partials/layout_broker.php";

function pageTitle(){
    return "Profile";
}

function pageContent(){
    include 'profile_contents.php';
}

function navLinks(){
    include 'nav_links.php';
}
function setActiveLink(){
    echo "profile";
}
