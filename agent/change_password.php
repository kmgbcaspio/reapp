<?php
include "../config.php";

include "../partials/layout_broker.php";

function pageTitle(){
    return "Change Password";
}

function pageContent(){
    include 'change_password_content.php';
}

function navLinks(){
    include 'nav_links.php';
}
