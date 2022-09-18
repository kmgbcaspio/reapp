<?php
include "../config.php";

include "../partials/layout_broker.php";

function pageTitle(){
    return "Agents";
}

function pageContent(){
    include 'agents_content.php';
}

function navLinks(){
    include 'nav_links.php';
}

function setActiveLink(){
    echo "users";
}