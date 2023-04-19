<?php
//By https://Doonaweb.ir
//load Config File
require_once('config.php');
/*---------------------------------------------------------*/
//define root 
global $root_url;
$root_url = 'http' . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . '/';
global $site_url;
$site_url = $root_url.'team/';
/*---------------------------------------------------------*/
// Load Header
function get_header($postfix = null) {
    if ($postfix === null) {
        require_once 'header.php';
    } else {
        require_once  'header-' . $postfix . '.php';
    }
}
/*---------------------------------------------------------*/

// Load footer
function get_footer($postfix = null) {
    if ($postfix === null) {
        require_once  'footer.php';
    } else {
        require_once  'footer-' . $postfix . '.php';
    }
}
/*---------------------------------------------------------*/

// load styles and scripts
function load_styles() {
    global $site_url;
    // Enqueue styles
    echo '<link rel="stylesheet" href="' . $site_url . 'style.css">';
}
/*---------------------------------------------------------*/
function load_scripts() {
    global $site_url;
    // Enqueue scripts
    echo '<script src="' . $site_url . 'assets/js/jquery.js"></script>';
    echo '<script src="' . $site_url . 'assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>';
}