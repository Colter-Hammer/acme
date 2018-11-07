<?php
$action = filter_input(INPUT_POST, 'action');
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action');
}

// Get the database connection file
require_once 'library/connections.php';
// Get the acme model for use as needed
require_once 'model/acme-model.php';
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
        include './view/home.php';
        break;
}
