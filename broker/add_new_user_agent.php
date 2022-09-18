<?php
include "../config.php";

include "../partials/layout.php";

function pageTitle(){
    return "Add New Agent";
}

function pageContent(){
    include 'add_new_user_agent_content.php';
}

function navLinks(){
    include 'nav_links.php';
}
function setActiveLink(){
    echo "add_new_agent";
}
