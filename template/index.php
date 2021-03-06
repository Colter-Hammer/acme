<?php

// template controller?
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

// Get the database connection file
 require_once '../library/connections.php';
 // Get the acme model for use as needed
 require_once '../model/acme-model.php';

 // Get the array of categories
    $categories = getCategories();
    
// Build a navigation bar using the $categories array
 $navList = '<ul>';
 $navList .= "<li><a href='.' title='View the Acme home page'>Home</a></li>";
 foreach ($categories as $category) {
  $navList .= "<li><a href='/acme/index.php?action=".urlencode($category['categoryName'])."' title='View our $category[categoryName] product line'>$category[categoryName]</a></li>";
 }
 $navList .= '</ul>';

switch ($action) {
    case 'template':
        include 'template/template.php';
        break;
    default:
        include './template/template.php';
        break;
}
