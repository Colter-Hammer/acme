<?php
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

// Create or access a Session
session_start();

// Check if the firstname cookie exists, get its value
if (isset($_COOKIE['firstname'])) {
    $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
}

// Get the database connection file
require_once 'library/connections.php';
// Get the acme model for use as needed
require_once 'model/acme-model.php';
// Get the products model for featured product
require_once 'model/products-model.php';
// Get functions
require_once 'library/functions.php';


// Get the array of categories
$categories = getCategories();

// Build a navigation bar using the $categories array
$navList = navBar($categories);

switch ($action) {
    case 'template':
        include './template/template.php';
        break;
    default:

    // Get featured product Details
    $featured = getFeatured();

    // Build view for home
    $featureView = createFeaturedView($featured);
    
        include './view/home.php';
        break;
}
