<?php
// Build a dropdown using the $categories array

$catList = '<select name="categoryId" id="categoryId">';
foreach ($categories as $category) {

    $catList .= "<option value='$category[categoryId]'";

    if (isset($categoryId)) {
        if ($category['categoryId'] === $categoryId) {
            $catList .= ' selected ';
        }
    } elseif (isset($prodInfo['categoryId'])) {
        if ($category['categoryId'] === $prodInfo['categoryId']) {
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
        <title>
            <?php if (isset($prodInfo['invName'])) {echo "Modify $prodInfo[invName] ";} elseif (isset($invName)) {echo $invName;}?>
            | Acme, Inc
        </title>
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
                <h1>
                    <?php if (isset($prodInfo['invName'])) {echo "Modify $prodInfo[invName] ";} elseif (isset($invName)) {echo $invName;}?>
                </h1>
                <form method="post" action="/acme/products/index.php">

                    <label>Product Name</label>
                    <input type="text" name="invName" id="invName" <?php if (isset($invName)) {echo "value='$invName'"
                        ;} elseif (isset($prodInfo['invName'])) {echo "value='$prodInfo[invName]'" ;}?> required
                    ><br />

                    <label>Product Description</label>
                    <textarea name="invDescription" id="invDescription" required><?php if (isset($invDescription)) {echo $invDescription;} elseif (isset($prodInfo['invDescription'])) {echo $prodInfo['invDescription'];}?></textarea><br />
                    <br />

                    <label>Product Picture</label>
                    <input type="text" name="invImage" id="invImage" value="/acme/images/no-image.png" <?php if
                        (isset($invImage)) {echo "value='$invImage'" ;} elseif (isset($prodInfo['invImage'])) {echo
                        "value='$prodInfo[invImage]'" ;}?> required
                    ><br />

                    <label>Product Thumbnail</label>
                    <input type="text" name="invThumbnail" id="invThumbnail" value="/acme/images/no-image.png" <?php if
                        (isset($invThumbnail)) {echo "value='$invThumbnail'" ;} elseif
                        (isset($prodInfo['invThumbnail'])) {echo "value='$prodInfo[invThumbnail]'" ;}?> required
                    ><br />

                    <label>Product Price</label>
                    <input type="text" name="invPrice" id="invPrice" <?php if (isset($invPrice)) {echo
                        "value='$invPrice'" ;} elseif (isset($prodInfo['invPrice'])) {echo
                        "value='$prodInfo[invPrice]'" ;}?> required
                    pattern="^(\$)?([1-9]{1}[0-9]{0,2})(\,\d{3})*(\.\d{2})?$|^(\$)?([1-9]{1}[0-9]{0,2})(\d{3})*(\.\d{2})?$|^(0)?(\.\d{2})?$|^(\$0)?(\.\d{2})?$|^(\$\.)(\d{2})?$"
                    ><br />

                    <label>How many are in stock?</label>
                    <input type="text" name="invStock" id="invStock" <?php if (isset($invStock)) {echo
                        "value='$invStock'" ;} elseif (isset($prodInfo['invStock'])) {echo
                        "value='$prodInfo[invStock]'" ;}?> required
                    ><br />

                    <label>Product Size</label>
                    <input type="text" name="invSize" id="invSize" <?php if (isset($invSize)) {echo "value='$invSize'"
                        ;} elseif (isset($prodInfo['invSize'])) {echo "value='$prodInfo[invSize]'" ;}?> required
                    ><br />

                    <label>Product Weight</label>
                    <input type="text" name="invWeight" id="invWeight" <?php if (isset($invWeight)) {echo
                        "value='$invWeight'" ;} elseif (isset($prodInfo['invWeight'])) {echo
                        "value='$prodInfo[invWeight]'" ;}?> required
                    ><br />

                    <label>Product Location</label>
                    <input type="text" name="invLocation" id="invLocation" <?php if (isset($invLocation)) {echo
                        "value='$invLocation'" ;} elseif (isset($prodInfo['invLocation'])) {echo
                        "value='$prodInfo[invLocation]'" ;}?> required
                    ><br />

                    <label>Category</label>
                    <?php echo $catList ?><br />

                    <label>Product Vendor</label>
                    <input type="text" name="invVendor" id="invVendor" <?php if (isset($invVendor)) {echo
                        "value='$invVendor'" ;} elseif (isset($prodInfo['invVendor'])) {echo
                        "value='$prodInfo[invVendor]'" ;}?> required
                    ><br />

                    <label>Product Style</label>
                    <input type="text" name="invStyle" id="invStyle" <?php if (isset($invStyle)) {echo
                        "value='$invStyle'" ;} elseif (isset($prodInfo['invStyle'])) {echo
                        "value='$prodInfo[invStyle]'" ;}?> required
                    ><br />


                    <input type="submit" name="submit" id="prodbtn" value="Update Product">

                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="updateProd">
                    <!-- Store the primary key value for the updated prod -->
                    <input type="hidden" name="invId" value="<?php if (isset($prodInfo['invId'])) {echo $prodInfo['invId'];} elseif (isset($invId)) {echo $invId;}?>">
                </form>

            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';?>
            </footer>
        </div>
    </body>

</html>
