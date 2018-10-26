<?php

// Products Controller

$action = filter_input(INPUT_POST, 'action');
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action');
}

// Get the database connection file
require_once '../library/connections.php';
// Get the acme model for use as needed
require_once '../model/acme-model.php';
// Get the products model
require_once '../model/products-model.php';

// Get array of categories from acme-model
$categories = getCategories();

// Build a navigation bar using the $categories array
$navList = '<ul>';
$navList .= "<li><a href='.' title='View the Acme home page'>Home</a></li>";
foreach ($categories as $category) {
    $navList .= "<li><a href='/acme/index.php?action=" . urlencode($category['categoryName']) . "' title='View our $category[categoryName] product line'>$category[categoryName]</a></li>";
}
$navList .= '</ul>';

// Build a dropdown using the $categories array

$catList = '<select name="categoryId" id="categoryId">';
foreach ($categories as $category) {
    // use urlencode to get rid of any spaces.
    $catList .= '<option value="' . $category['categoryId'] . '">' . urlencode($category['categoryName']) . '</option>';
}

$catList .= '</select>';

// Deliver views

switch ($action) {
    case 'category':
        // header('Location: ./?action=category');

        // Filter and store the data
        $catName = filter_input(INPUT_POST, 'catName');

        // Check for missing data
        if (empty($catName)) {
            $message = '<p>Please provide information for all empty form fields.</p>';
            include '../view/category.php';
            exit;
        }

        // Send the data to the model
        $catOutcome = addCategory($catName);

        // Check and report the result
        if ($catOutcome === 1) {
            header('Location: http://localhost/acme/products/index.php');
            exit;
        } else {
            $message = "<p>$catName not successfully added. Please try again.</p>";
            include '../view/category.php';
            exit;
        }

        break;

    case 'product':
        // include '../view/product.php';

        // Filter and store the data
        $invName = filter_input(INPUT_POST, 'invName');
        $invDesciption = filter_input(INPUT_POST, 'invDesciption');
        $invImage = filter_input(INPUT_POST, 'invImage');
        $invThumbnail = filter_input(INPUT_POST, 'invThumbnail');
        $invPrice = filter_input(INPUT_POST, 'invPrice');
        $invStock = filter_input(INPUT_POST, 'invStock');
        $invSize = filter_input(INPUT_POST, 'invSize');
        $invWeight = filter_input(INPUT_POST, 'invWeight');
        $invLocation = filter_input(INPUT_POST, 'invLocation');
        $categoryId = filter_input(INPUT_POST, 'categoryId');
        $invVendor = filter_input(INPUT_POST, 'invVendor');
        $invStyle = filter_input(INPUT_POST, 'invStyle');

        // Check for missing data
        if (empty($invName) || empty($invDesciption) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invSize) || empty($invWeight) || empty($invLocation) || empty($categoryId) || empty($invVendor) || empty($invStyle)) {
            $message = '<p>Please provide information for all empty form fields.</p>';
            include '../view/product.php';
            exit;
        }

        // Send the data to the model
        $prodOutcome = addProduct($invName, $invDesciption, $invImage, $invThumbnail, $invPrice, $invStock, $invSize, $invWeight, $invLocation, $categoryId, $invVendor, $invStyle);

        // Check and report the result
        if ($prodOutcome === 1) {
            $message = "<p>$invName was added correctly. That's awesome!</p>";
            include '../view/registration.php';

            exit;
        } else {
            $message = "<p>$invName wasn't added correctly. Please try again.</p>";
            include '../view/registration.php';
            exit;
        }
        break;
    case 'addprod':
        include '../view/product.php';
        break;
    case 'addcat':
        include '../view/category.php';
        break;

    default:
        include '../view/product-management.php';
        break;
}
