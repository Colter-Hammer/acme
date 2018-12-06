<?php

// Products Controller

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

// Create or access a Session
session_start();

// Get the database connection file
require_once '../library/connections.php';
// Get the acme model for use as needed
require_once '../model/acme-model.php';
// Get the products model
require_once '../model/products-model.php';
// Get functions
require_once '../library/functions.php';
// Get functions from uploads
require_once '../model/uploads-model.php';

// Get array of categories from acme-model
$categories = getCategories();

// Build a navigation bar using the $categories array
$navList = navBar($categories);

// Deliver views
switch ($action) {
    case 'category':

        // Filter and store the data
        $catName = filter_input(INPUT_POST, 'catName', FILTER_SANITIZE_STRING);

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

        // Filter and store the data
        $invName = filter_input(INPUT_POST, 'invName', FILTER_SANITIZE_STRING);
        $invDescription = filter_input(INPUT_POST, 'invDescription', FILTER_SANITIZE_STRING);
        $invImage = filter_input(INPUT_POST, 'invImage', FILTER_SANITIZE_STRING);
        $invThumbnail = filter_input(INPUT_POST, 'invThumbnail', FILTER_SANITIZE_STRING);
        $invPrice = filter_input(INPUT_POST, 'invPrice', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $invStock = filter_input(INPUT_POST, 'invStock', FILTER_SANITIZE_NUMBER_INT);
        $invSize = filter_input(INPUT_POST, 'invSize', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $invWeight = filter_input(INPUT_POST, 'invWeight', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $invLocation = filter_input(INPUT_POST, 'invLocation', FILTER_SANITIZE_STRING);
        $categoryId = filter_input(INPUT_POST, 'categoryId', FILTER_SANITIZE_NUMBER_INT);
        $invVendor = filter_input(INPUT_POST, 'invVendor', FILTER_SANITIZE_STRING);
        $invStyle = filter_input(INPUT_POST, 'invStyle', FILTER_SANITIZE_STRING);

        $invPrice = checkValue($invPrice);

        // Check for missing data
        if (empty($invName) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invSize) || empty($invWeight) || empty($invLocation) || empty($categoryId) || empty($invVendor) || empty($invStyle)) {
            $message = '<p>Please provide information for all empty form fields.</p>';
            include '../view/product.php';
            exit;
        }

        // Send the data to the model
        $prodOutcome = addProduct($invName, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invSize, $invWeight, $invLocation, $categoryId, $invVendor, $invStyle);

        // Check and report the result
        if ($prodOutcome === 1) {
            $message = "<p>$invName was added correctly. That's awesome!</p>";
            include '../view/product.php';

            exit;
        } else {
            $message = "<p>$invName wasn't added correctly. Please try again.</p>";
            include '../view/product.php';

            exit;
        }
        break;
    case 'addprod':
        include '../view/product.php';
        break;
    case 'addcat':
        include '../view/category.php';
        break;
    case 'mod':
        $invId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $prodInfo = getProductInfo($invId);
        if (count($prodInfo) < 1) {
            $message = 'Sorry, no product information could be found.';
        }
        include '../view/prod-update.php';

        break;

    case 'del':
        $invId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $prodInfo = getProductInfo($invId);
        if (count($prodInfo) < 1) {
            $message = 'Sorry, no product information could be found.';
        }
        include '../view/prod-delete.php';

        break;

    case 'updateProd':

        // Filter and store the data
        $invId = filter_input(INPUT_POST, 'invId', FILTER_SANITIZE_NUMBER_INT);
        $invName = filter_input(INPUT_POST, 'invName', FILTER_SANITIZE_STRING);
        $invDescription = filter_input(INPUT_POST, 'invDescription', FILTER_SANITIZE_STRING);
        $invImage = filter_input(INPUT_POST, 'invImage', FILTER_SANITIZE_STRING);
        $invThumbnail = filter_input(INPUT_POST, 'invThumbnail', FILTER_SANITIZE_STRING);
        $invPrice = filter_input(INPUT_POST, 'invPrice', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $invStock = filter_input(INPUT_POST, 'invStock', FILTER_SANITIZE_NUMBER_INT);
        $invSize = filter_input(INPUT_POST, 'invSize', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $invWeight = filter_input(INPUT_POST, 'invWeight', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $invLocation = filter_input(INPUT_POST, 'invLocation', FILTER_SANITIZE_STRING);
        $categoryId = filter_input(INPUT_POST, 'categoryId', FILTER_SANITIZE_NUMBER_INT);
        $invVendor = filter_input(INPUT_POST, 'invVendor', FILTER_SANITIZE_STRING);
        $invStyle = filter_input(INPUT_POST, 'invStyle', FILTER_SANITIZE_STRING);

        $invPrice = checkValue($invPrice);

// Check for missing data
        if (empty($invName) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invSize) || empty($invWeight) || empty($invLocation) || empty($categoryId) || empty($invVendor) || empty($invStyle)) {
            $message = '<p>Please provide information for all empty form fields.</p>';
            include '../view/prod-update.php';
            exit;
        }

// Send the data to the model
        $updateResult = updateProduct($invId, $invName, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invSize, $invWeight, $invLocation, $categoryId, $invVendor, $invStyle);

// Check and report the result
        if ($updateResult) {
            $message = "<p class='notify'>Congratulations, $invName was successfully updated.</p>";
            $_SESSION['message'] = $message;
            header('location: /acme/products/');
            exit;
        } else {
            $message = "<p>$invName wasn't updated correctly. Please try again.</p>";
            include '../view/prod-update.php';

            exit;
        }

        break;

    case 'deleteProd':
        $invName = filter_input(INPUT_POST, 'invName', FILTER_SANITIZE_STRING);
        $invId = filter_input(INPUT_POST, 'invId', FILTER_SANITIZE_NUMBER_INT);

        $deleteResult = deleteProduct($invId);
        if ($deleteResult) {
            $message = "<p class='notice'>Congratulations, $invName was successfully deleted.</p>";
            $_SESSION['message'] = $message;
            header('location: /acme/products/');
            exit;
        } else {
            $message = "<p class='notice'>Error: $invName was not deleted.</p>";
            $_SESSION['message'] = $message;
            header('location: /acme/products/');
            exit;
        }
        break;
        case 'cat':
            $categoryName = filter_input(INPUT_GET, 'categoryName', FILTER_SANITIZE_STRING);
            $products = getProductsByCategory($categoryName);
            
            if(!count($products)){
                $message = "<p class='notice'>Sorry, no $categoryName products could be found.</p>";
            } else {
                $prodDisplay = buildProductsDisplay($products);
            }
            
            // echo $prodDisplay;
            include '../view/cat.php';
        break;
        case 'prodDetails':
            $productId = filter_input(INPUT_GET, 'productId', FILTER_SANITIZE_STRING);
            $productDetails = getProductDetails($productId)[0];
            // print_r($productDetails);
            $prod = buildProdDetailsDisplay($productDetails);

            $extraImgs = getTn($productId);
            
            $imagesDisplay = thumbnailImages($extraImgs);
            
            include '../view/product-details.php';
        break;
    default:
        $products = getProductBasics();
        if (count($products) > 0) {
            $prodList = '<table>';
            $prodList .= '<thead>';
            $prodList .= '<tr><th>Product Name</th><td>&nbsp;</td><td>&nbsp;</td></tr>';
            $prodList .= '</thead>';
            $prodList .= '<tbody>';
            foreach ($products as $product) {
                $prodList .= "<tr><td>$product[invName]</td>";
                $prodList .= "<td><a href='/acme/products?action=mod&id=$product[invId]' title='Click to modify'>Modify</a></td>";
                $prodList .= "<td><a href='/acme/products?action=del&id=$product[invId]' title='Click to delete'>Delete</a></td></tr>";
            }
            $prodList .= '</tbody></table>';
        } else {
            $message = '<p class="notify">Sorry, no products were returned.</p>';
        }

        include '../view/product-management.php';
        break;
}
