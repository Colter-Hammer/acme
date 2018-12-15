<?php

// Products model
// Used to add new categories and products to database

function addCategory($catName)
{
    // Create a connection object using the acme connection function
    $db = acmeConnect();

    // The SQL statement
    $sql = 'INSERT INTO categories (categoryName)
     VALUES (:catName)';

    // Create the prepared statement using the acme connection
    $stmt = $db->prepare($sql);

    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is

    $stmt->bindValue(':catName', $catName, PDO::PARAM_STR);

    // Insert the data

    $stmt->execute();

    // Ask how many rows changed as a result of our insert

    $rowsChanged = $stmt->rowCount();

    // Close the database interaction

    $stmt->closeCursor();

    // Return the indication of success (rows changed)

    return $rowsChanged;

}

function addProduct($invName, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invSize, $invWeight, $invLocation, $categoryId, $invVendor, $invStyle)
{
    // Create a connection object using the acme connection function
    $db = acmeConnect();

    // The SQL statement
    $sql = 'INSERT INTO inventory (invName, invDescription, invImage, invThumbnail, invPrice, invStock, invSize, invWeight, invLocation, categoryId, invVendor, invStyle) VALUES (:invName, :invDescription, :invImage, :invThumbnail, :invPrice, :invStock, :invSize, :invWeight, :invLocation, :categoryId, :invVendor, :invStyle)';

    // Create the prepared statement using the acme connection
    $stmt = $db->prepare($sql);

    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is

    $stmt->bindValue(':invName', $invName, PDO::PARAM_STR);
    $stmt->bindValue(':invDescription', $invDescription, PDO::PARAM_STR);
    $stmt->bindValue(':invImage', $invImage, PDO::PARAM_STR);
    $stmt->bindValue(':invThumbnail', $invThumbnail, PDO::PARAM_STR);
    $stmt->bindValue(':invPrice', $invPrice, PDO::PARAM_STR);
    $stmt->bindValue(':invStock', $invStock, PDO::PARAM_STR);
    $stmt->bindValue(':invSize', $invSize, PDO::PARAM_STR);
    $stmt->bindValue(':invWeight', $invWeight, PDO::PARAM_STR);
    $stmt->bindValue(':invLocation', $invLocation, PDO::PARAM_STR);
    $stmt->bindValue(':categoryId', $categoryId, PDO::PARAM_INT);
    $stmt->bindValue(':invVendor', $invVendor, PDO::PARAM_STR);
    $stmt->bindValue(':invStyle', $invStyle, PDO::PARAM_STR);

    // Insert the data

    $stmt->execute();

    // Ask how many rows changed as a result of our insert

    $rowsChanged = $stmt->rowCount();

    // Close the database interaction

    $stmt->closeCursor();

    // Return the indication of success (rows changed)

    return $rowsChanged;
}

// Get basic product information from Inventory table to start update/delete process
function getProductBasics()
{
    $db = acmeConnect();
    $sql = 'SELECT invName, invId FROM inventory ORDER BY invName ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $products;
}

// Select single product based on ID
function getProductInfo($invId)
{
    $db = acmeConnect();
    $sql = 'SELECT * FROM inventory WHERE invId = :invId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':invId', $invId, PDO::PARAM_INT);
    $stmt->execute();
    $prodInfo = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $prodInfo;
}

// updateProduct
function updateProduct($invId, $invName, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invSize, $invWeight, $invLocation, $categoryId, $invVendor, $invStyle)
{
    // Create a connection object using the acme connection function
    $db = acmeConnect();

    // The SQL statement
    $sql = 'UPDATE inventory SET invName = :invName, invDescription = :invDescription, invImage = :invImage, invThumbnail = :invThumbnail, invPrice = :invPrice, invStock = :invStock, invSize = :invSize, invWeight = :invWeight, invLocation = :invLocation, categoryId = :categoryId, invVendor = :invVendor, invStyle = :invStyle WHERE invId = :invId';

    // Create the prepared statement using the acme connection
    $stmt = $db->prepare($sql);

    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is

    $stmt->bindValue(':invId', $invId, PDO::PARAM_INT);
    $stmt->bindValue(':invName', $invName, PDO::PARAM_STR);
    $stmt->bindValue(':invDescription', $invDescription, PDO::PARAM_STR);
    $stmt->bindValue(':invImage', $invImage, PDO::PARAM_STR);
    $stmt->bindValue(':invThumbnail', $invThumbnail, PDO::PARAM_STR);
    $stmt->bindValue(':invPrice', $invPrice, PDO::PARAM_STR);
    $stmt->bindValue(':invStock', $invStock, PDO::PARAM_STR);
    $stmt->bindValue(':invSize', $invSize, PDO::PARAM_STR);
    $stmt->bindValue(':invWeight', $invWeight, PDO::PARAM_STR);
    $stmt->bindValue(':invLocation', $invLocation, PDO::PARAM_STR);
    $stmt->bindValue(':categoryId', $categoryId, PDO::PARAM_INT);
    $stmt->bindValue(':invVendor', $invVendor, PDO::PARAM_STR);
    $stmt->bindValue(':invStyle', $invStyle, PDO::PARAM_STR);

    // Insert the data

    $stmt->execute();

    // Ask how many rows changed as a result of our insert

    $rowsChanged = $stmt->rowCount();

    // Close the database interaction

    $stmt->closeCursor();

    // Return the indication of success (rows changed)

    return $rowsChanged;
}

function deleteProduct($invId)
{
    $db = acmeConnect();
    $sql = 'DELETE FROM inventory WHERE invId = :invId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':invId', $invId, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

// Get a list of products by category
function getProductsByCategory($categoryName){
 $db = acmeConnect();
 $sql = 'SELECT * FROM inventory WHERE categoryId IN (SELECT categoryId FROM categories WHERE categoryName = :categoryName)';
 $stmt = $db->prepare($sql);
 $stmt->bindValue(':categoryName', $categoryName, PDO::PARAM_STR);
 $stmt->execute();
 $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
 $stmt->closeCursor();
 return $products;
}

function getProductDetails($productId) {
 $db = acmeConnect();
 $sql = 'SELECT * FROM inventory WHERE invId = :productId';
 $stmt = $db->prepare($sql);
 $stmt->bindValue(':productId', $productId, PDO::PARAM_INT);
 $stmt->execute();
 $productDetails = $stmt->fetchAll(PDO::FETCH_ASSOC);
 $stmt->closeCursor();
 return $productDetails;
}

/**
 * Get the item that is being featured
 * if $which == 'prev', you are getting the item to then remove it.
 * else you are getting the item to feature it.
 * 
 * @param \$which{string} Whether you're getting the current or previous featured item. Defaults to current
 */
function getFeatured($which = 'curr') {
 $db = acmeConnect();
 $sql = 'SELECT * FROM inventory WHERE invFeatured = 1';
 $stmt = $db->prepare($sql);
 $stmt->execute();
 $prevFeatured = $stmt->fetch(PDO::FETCH_ASSOC);
 $stmt->closeCursor();
 if ($which === 'prev') {
     removeFeatured();
     return $prevFeatured['invName'];
 }
 return $prevFeatured;
}

/**
 * Remove the currently featured item.
 * It will also set everything to NULL if it's not already like that
 * I decided to add that feature as a sort of redundancy. If for some reason someone goes in and changes something, the code will still go in and make everything NULL
 */
function removeFeatured() {
 $db = acmeConnect();
 $sql = 'UPDATE `inventory` SET `invFeatured` = NULL WHERE `invFeatured` is not NULL';
 $stmt = $db->prepare($sql);
 $stmt->execute();
 $stmt->closeCursor();
 return;
}


/**
 * Sets the featured item by inventory.invId
 * Starts with removeFeatured() as a redundancy
 * 
 * @param \$productId{int}
 */
function setFeatured($productId) {
 removeFeatured();
 $db = acmeConnect();
 $sql = 'UPDATE inventory SET invFeatured = 1 WHERE inventory . invId  = :productId';
 $stmt = $db->prepare($sql);
 $stmt->bindValue(':productId', $productId, PDO::PARAM_INT);
 $stmt->execute();
 $stmt->closeCursor();
 $productDetails = getFeatured();
//  echo $productDetails;
 return $productDetails;
}
