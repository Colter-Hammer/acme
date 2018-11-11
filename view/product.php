<?php
// echo $_SESSION['clientData']['clientLevel'];
if (!($_SESSION['loggedin'] && $_SESSION['clientData']['clientLevel'] > 1)) {
    header('Location: /acme/index.php');
}

// Build a dropdown using the $categories array

$catList = '<select name="categoryId" id="categoryId">';
foreach ($categories as $category) {

    $catList .= "<option value='$category[categoryId]'";

    if (isset($categoryId)) {
        if ($category['categoryId'] === $categoryId) {
            $catList .= ' selected ';
        }
        ;
    }

    $catList .= ">$category[categoryName]</option>";
}
$catList .= '</select>';

?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add a Product</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    </head>

    <body>
        <div id="full-body-wrapper">
            <header id="page-header">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php';?>
            </header>

            <nav id="navigation">
                <?php echo $navList; ?>
            </nav>

            <main>

                <form method="post" action="/acme/products/index.php">

                    <label>Product Name</label>
                    <input type="text" name="invName" id="invName" <?php if (isset($invName)) {echo "value='$invName'"
                        ;}?> required
                    ><br />
                    <label>Product Description</label>
                    <textarea name="invDescription" id="invDescription" required><?php if (isset($invDescription)) {echo $invDescription;}?></textarea><br />
                    <br />
                    <label>Product Picture</label>
                    <input type="text" name="invImage" id="invImage" value="/acme/images/no-image.png" <?php if
                        (isset($invImage)) {echo "value='$invImage'" ;}?> required
                    ><br />
                    <label>Product Thumbnail</label>
                    <input type="text" name="invThumbnail" id="invThumbnail" value="/acme/images/no-image.png" <?php if
                        (isset($invThumbnail)) {echo "value='$invThumbnail'" ;}?> required
                    ><br />
                    <label>Product Price</label>
                    <input type="text" name="invPrice" id="invPrice" <?php if (isset($invPrice)) {echo
                        "value='$invPrice'" ;}?> required
                    pattern="^(\$)?([1-9]{1}[0-9]{0,2})(\,\d{3})*(\.\d{2})?$|^(\$)?([1-9]{1}[0-9]{0,2})(\d{3})*(\.\d{2})?$|^(0)?(\.\d{2})?$|^(\$0)?(\.\d{2})?$|^(\$\.)(\d{2})?$"
                    ><br />
                    <label>How many are in stock?</label>
                    <input type="text" name="invStock" id="invStock" <?php if (isset($invStock)) {echo
                        "value='$invStock'" ;}?> required
                    ><br />
                    <label>Product Size</label>
                    <input type="text" name="invSize" id="invSize" <?php if (isset($invSize)) {echo "value='$invSize'"
                        ;}?> required
                    ><br />
                    <label>Product Weight</label>
                    <input type="text" name="invWeight" id="invWeight" <?php if (isset($invWeight)) {echo
                        "value='$invWeight'" ;}?> required
                    ><br />
                    <label>Product Location</label>
                    <input type="text" name="invLocation" id="invLocation" <?php if (isset($invLocation)) {echo
                        "value='$invLocation'" ;}?> required
                    ><br />
                    <label>Category</label>
                    <?php echo $catList ?><br />
                    <label>Product Vendor</label>
                    <input type="text" name="invVendor" id="invVendor" <?php if (isset($invVendor)) {echo
                        "value='$invVendor'" ;}?> required
                    ><br />
                    <label>Product Style</label>
                    <input type="text" name="invStyle" id="invStyle" <?php if (isset($invStyle)) {echo
                        "value='$invStyle'" ;}?> required
                    ><br />


                    <input type="submit" name="submit" id="prodbtn" value="Submit">

                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="product">
                </form>

            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';?>
            </footer>
        </div>
    </body>

</html>
